<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    // Defina a tabela associada se não seguir a convenção padrão
    protected $table = 'materials';

    // Atributos que podem ser atribuídos em massa
    protected $fillable = [
        'title',
        'description',
        'content', // Verifique se você está usando esse campo
        'category_id',
        'user_id',
        'fonte_url',
    ];

    /**
     * Relacionamento com categoria
     * 
     * Um material pertence a uma categoria.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relacionamento com subcategorias
     * 
     * Um material pode pertencer a muitas subcategorias.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class, 'material_subcategory', 'material_id', 'subcategory_id');
    }

    /**
     * Relacionamento com usuário
     * 
     * Um material pertence a um usuário.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
