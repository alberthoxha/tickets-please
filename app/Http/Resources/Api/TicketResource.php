<?php

namespace App\Http\Resources\Api;

use App\Http\Resources\V1\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * @mixin \App\Models\Ticket
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'ticket',
            'id' => $this->id,
            'atributes' => [
                'title' => $this->title,
                'description' => $this->when(
                    $request->routeIs(
                        'tickets.show'
                    ),
                    $this->description
                ),
                'status' => $this->status,
                'createdAt' => $this->created_at,
                'updatedAt' => $this->updated_at,
            ],
            'relationships' => [
                'author' => [
                    'data' => [
                        'type' => 'user',
                        'id' => $this->user_id,
                    ],
                    'links' => [
                        [
                            'self' => 'todo',
                        ],
                    ],
                ],
            ],
            'includes' => [
                new UserResource($this->user),
            ],
            'links' => [
                ['self' => route('tickets.show', ['ticket' => $this->id])],
            ],
        ];
    }
}
