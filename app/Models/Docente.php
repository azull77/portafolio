<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $dui
 * @property $telefono
 * @property $email
 * @property $clave
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso[] $cursos
 * @property Nota[] $notas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'dui' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'clave' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','dui','telefono','email','clave'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany('App\Models\Curso', 'docentes_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notas()
    {
        return $this->hasMany('App\Models\Nota', 'docentes_id', 'id');
    }
    

}
