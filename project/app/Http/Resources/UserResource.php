<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'session' => $this->session_id,
            'score' => (int) $this->score,
            'date' => Carbon::parse($this->created_at)->format('U'),
        ];
    }
}
