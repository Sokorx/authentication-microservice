<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Exception;

class CheckIfUserExistsResource extends JsonResource
{



    public function __construct($user = null)
    {
        $this->user = $user;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {



        $app_user = null;
        if (isset($this->user)) {

            $app_user = new AppUserResource($this->user);
        }

        return [
            'app_user_exists' => (bool) !!$this->user,
            'app_user' => $app_user,

        ];
    }
}
