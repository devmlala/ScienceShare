<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Defina a tabela associada se não seguir a convenção padrão
    protected $table = 'categories';

    // Atributos que podem ser atribuídos em massa
    protected $fillable = [
        'name', // Exemplo de atributo, ajuste conforme necessário
        'image_id', // Adicionando a chave estrangeira para a tabela de imagens
    ];

    /**
     * Relacionamento com subcategorias
     * 
     * Uma categoria pode ter muitas subcategorias.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    /**
     * Relacionamento com a tabela de imagens
     * 
     * Cada categoria pode ter uma imagem associada.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}