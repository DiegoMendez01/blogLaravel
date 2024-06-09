<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table = 'posts';

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean'
        ];
    }

    protected function title(): Attribute
    {
        // Set - Mutador
        // Get - Accesor
        return Attribute::make(
            // Antes de insertar en BD
            set: function($value)
            {
                // Transformar en minuscula el valor de title
                return strtolower($value);
            },
            // Recuperar de BD
            get: function($value)
            {
                // La primera en mayuscula sin transformar en BD
                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName()
    {
        return "slug";
    }
}
