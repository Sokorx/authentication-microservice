<?php

namespace App\Services\User;

use App\Models\User;
use App\Models\AppUser;
use App\Models\AppUserDevice;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthenticationService

{

    protected $user_reference;

    public function createAppUser(array $data)
    {
        $user_exists_check = $this->userExists($data['email']);
        $app_user_exists = $this->appUserExists($data['email'], $data['app_reference']);
        $app_user_device_exists = $this->appUserDeviceExists($data['device_id'], $data['app_reference']);

        $user_reference = null;

        if ($app_user_exists) {

            throw new Exception('app user alredy exists');
        }
        DB::beginTransaction();
        if (!$user_exists_check['exists']) {

            $user = User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'middle_name' => $data['middle_name'] ?? null,
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
            ]);

            $user->save();
            $user_reference = $user->reference;
        } else {
            $user_reference = $user_exists_check['reference'];
        }

        $verification_token = $this->generateVerificationToken();
        $app_user = AppUser::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'middle_name' => $data['middle_name'] ?? null,
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'app_reference' => $data['app_reference'],
            'password' => Hash::make($data['password']),
            'user_reference' => $user_reference,
            'verification_token' => $verification_token,
            'verification_token_expiry' => Carbon::now()->addMinutes(10)
        ]);
        if (!$app_user_device_exists) {
            AppUserDevice::create([
                'app_reference' => $data['app_reference'],
                'device_id' => $data['device_id'],
                'user_reference' => $user_reference,
            ]);
        }
        DB::commit();



        #TODO SEND EMAIL VERIFICATION MAIL

        return $app_user;
    }

    public function loginWithGoogle(array $data)
    {
        $user_exists_check = $this->userExists($data['email']);
        $app_user_exists = $this->appUserExists($data['email'], $data['app_reference']);

        $user_reference = null;

        if ($app_user_exists) {

            throw new Exception('app user alredy exists');
        }

        if (!$user_exists_check['exists']) {

            $user = User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'middle_name' => $data['middle_name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
            ]);
            $user_reference = $user->reference;
        } else {

            $user_reference = $user_exists_check['reference'];
        }

        $verification_token = $this->generateVerificationToken();
        $app_user = AppUser::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'middle_name' => $data['middle_name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'app_reference' => $data['app_reference'],
            'user_reference' => $user_reference,
            'verification_token' => $verification_token,
            'verification_token_expiry' => Carbon::now()->addMinutes(10)
        ]);




        #TODO SEND EMAIL VERIFICATION MAIL

        return $app_user;
    }


    /**
     * Checks if user exists and returns user reference
     * if available
     */
    public function userExists(string $email)
    {
        $user = User::where('email', $email)->first();
        if (!$user) {
            return  ['exists' => false, 'user_reference' => null];
        }
        return  ['exists' => true, 'user_reference' => $user->reference];
    }




    public function appUserExists(string $email, string $app_reference)
    {
        $user = AppUser::where([
            'email' => $email,
            "app_reference" => $app_reference
        ])->first();
        if (!$user) {
            return false;
        }
        return true;
    }

    public function appUserDeviceExists(string $device_id, string $app_reference)
    {
        $device = AppUserDevice::where([
            'device_id' => $device_id,
            "app_reference" => $app_reference
        ])->first();
        if (!$device) {
            return false;
        }
        return true;
    }

    public function generateVerificationToken()
    {
        $verification_token = rand(1000, 9999);

        $existing_token = AppUser::where('verification_token', $verification_token)->first();

        if ($existing_token) {

            return $this->generateVerificationToken();
        }
        return $verification_token;
    }

    public function verifyAppUserEmail($data)
    {
        /**
         * Find app user by verification token,
         * user reference and app reference and then verify email
         */
        $app_user = AppUser::where(
            $data
        )->first();

        $expiry_date = Carbon::parse($app_user->verification_token_expiry);
        if ($expiry_date->lt(Carbon::now())) {

            return ['verified' => false, 'message' => 'Expired verification token'];
        }

        DB::beginTransaction();

        $app_user->verified_at = Carbon::now();
        $app_user->verification_token_expiry = null;
        $app_user->verification_token = null;
        $app_user->save();
        DB::commit();


        return ['verified' => true, 'message' => 'App user verified successfully'];
    }

    public function resendAppUserVerificationMail($data)
    {

        $app_user = AppUser::where(
            $data
        )->whereNull('verified_at')->first();

        if (!$app_user) {

            return ['sent_email' => false, 'message' => 'App user not found or  already verified'];
        }
        DB::beginTransaction();

        $app_user->verification_token = $this->generateVerificationToken();
        $app_user->verification_token_expiry = Carbon::now()->addMinutes(10);
        $app_user->save();

        DB::commit();

        #TODO resend verification email


        return ['sent_email' => true, 'message' => 'Verification mail has been resent.'];
    }
}
