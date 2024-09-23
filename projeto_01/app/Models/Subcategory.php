<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    // Atributos que podem ser atribuídos em massa
    protected $fillable = ['name', 'category_id', 'image_id', 'image_path']; // Adicionando image_id

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

    /**
     * Relacionamento com a tabela de imagens
     * 
     * Cada subcategoria pode ter uma imagem associada.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    /**
     * Relacionamento com a tabela de categorias
     * 
     * Cada subcategoria pertence a uma categoria.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}


