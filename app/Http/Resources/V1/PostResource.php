<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /*asi podemos establecer el formato de como mostrar datos
        a traves de api agregando incluso campos vortuales que
        no existan en la base de datos si queremos segmentar mas
        la información que vamos a mostrar */
        return  [
            'title'=> $this->title,
            'slug'=> $this->slug,
            'excerpt'=> $this->excerpt,
            'content'=> $this->content
        ];
    }
}
