<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getExcerptAttribute(){
        return substr($this->content, 0, 120);
    }

/*es camel case cuidado como se llaman a las funciones
no puedo ponerle cualquier nombre*/
    public function getPublishedAtAttribute(){
        return $this->created_at->format('d/m/y');
    }
}
