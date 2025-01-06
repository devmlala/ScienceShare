<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'title',
        'module_content',
        'module_theme',
    ];

    /**
     * Define a relação com o modelo Profile.
     */
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    /**
     * Define a relação com os materiais (materials) associados ao módulo.
     */
    public function materials()
    {
        return $this->hasMany(Material::class); // Assume que a tabela material tem a chave estrangeira 'module_id'
    }
}
