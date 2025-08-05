<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = [
        'titulo',
        'categoria_id',
        'imgLink',
        'price',
        'descricao',
    ];
    public function categoria()
    {
        return $this->belongsTo(Category::class, 'categoria_id', 'id');
    }
}
