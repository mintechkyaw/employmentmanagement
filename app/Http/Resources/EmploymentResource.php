<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmploymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
            'email_verified' => $this->email_verified_at ? true : false,
            'hiring_date' => $this->created_at->toDateTimeString(),
            'profile_updated' => $this->created_at->ne($this->updated_at) ? $this->updated_at->toDateTimeString() : null
        ];
    }
}
