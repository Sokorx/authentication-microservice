<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppUserResource extends JsonResource
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
            'reference' => (string) $this->reference,
            'first_name' => (string) $this->first_name,
            'last_name' => (string) $this->last_name,
            'phone_number' => (string) $this->phone_number,
            'middle_name' => (string) $this->middle_name,
            'email' => (string)$this->email,
            'app_reference' => (string) $this->app_reference,
            'user_reference' => (string) $this->user_reference,
            'verified' => (bool) !!$this->verified_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
