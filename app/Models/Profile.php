<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', // Inclua o nome ou outros atributos adicionais
        'material_id',
    ];

    /**
     * Definir o relacionamento com a model Material.
     * Um Profile pertence a um Material.
     */
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
