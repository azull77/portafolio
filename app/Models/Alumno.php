<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $fechanacimiento
 * @property $direccion
 * @property $genero
 * @property $telefono
 * @property $correo
 * @property $clave
 * @property $created_at
 * @property $updated_at
 *
 * @property Nota[] $notas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'fechanacimiento' => 'required',
		'direccion' => 'required',
		'genero' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
		'clave' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','fechanacimiento','direccion','genero','telefono','correo','clave'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notas()
    {
        return $this->hasMany('App\Models\Nota', 'alumnos_id', 'id');
    }
    

}
