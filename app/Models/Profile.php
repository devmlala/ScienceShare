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
        'name',
    ];

    /**
     * Definir o relacionamento de muitos-para-muitos com a model Material.
     */
    public function materials()
    {
        return $this->belongsToMany(Material::class, 'material_profile', 'profile_id', 'material_id')
                    ->withTimestamps(); // Inclui timestamps no relacionamento
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
