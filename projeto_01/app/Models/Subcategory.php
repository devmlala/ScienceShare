<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    // Atributos que podem ser atribuídos em massa
    protected $fillable = ['name', 'category_id'];

    /**
     * Define o relacionamento muitos-para-muitos com o modelo Material.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function materials()
    {
        return $this->belongsToMany(
            Material::class,       // Modelo relacionado
            'material_subcategory', // Nome da tabela pivot
            'subcategory_id',      // Chave estrangeira na tabela pivot para o modelo atual
            'material_id'          // Chave estrangeira na tabela pivot para o modelo relacionado
        );
    }
}
