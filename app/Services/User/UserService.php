<?php

namespace App\Services\User;

use App\Models\AppUserDevice;
use App\Models\AppLoginHistory;
use Illuminate\Support\Facades\DB;

class UserService

{


    public function updateAppUserLoginHistory(array $data)
    {

        $app = auth()->user();

        $app_user_device = AppUserDevice::where('device_id', $data['device_id'])->first();

        DB::beginTransaction();

        if (!$app_user_device) {

            $app_user_device =   AppUserDevice::create([
                'device_id' => $data['device_id'],
                'user_reference' => $data['user_reference'],
                'app_reference' => $app->reference
            ]);
        }

        $app_login_history = AppLoginHistory::create([

            'app_user_device_reference' => $app_user_device->reference,
            'ip_address' => $data['ip_address'],
            'is_successful' => $data['is_successful'],
        ]);


        DB::commit();

        return $app_login_history;
    }
}
