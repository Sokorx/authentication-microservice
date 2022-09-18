<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppLoginHistoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'app_user_device_reference' => (string) $this->app_user_device_reference,
            'ip_address' => (string) $this->ip_address,
            'is_successful' => (bool) $this->is_successful,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
