<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ItemListResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public static $wrap = 'users';
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            // 'item' => ItemListResource::collection($this->items),
            // 'secret' => $this->when(Auth::check(), 'please delete today post'),
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
        function isAdmin()
        {
            return true;
        }
        // return parent::toArray($request);
    }
}
