<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class LivroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'identify'=> $this->id,
            'titulo'=> $this->titulo,
            'autor'=> $this->autor,
            'classificacao'=> $this->classificacao,
            'resenha'=> $this->resenha,
            'dataCadastro'=> Carbon::make($this->created_at)->format('d-m-Y')
        ];
    }
}
