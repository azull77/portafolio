<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $docentes_id
 * @property $nombrecurso
 * @property $año
 * @property $ciclo
 * @property $created_at
 * @property $updated_at
 *
 * @property Docente $docente
 * @property Nota[] $notas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{
    
    static $rules = [
		'docentes_id' => 'required',
		'nombrecurso' => 'required',
		'año' => 'required',
		'ciclo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docentes_id','nombrecurso','año','ciclo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'id', 'docentes_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notas()
    {
        return $this->hasMany('App\Models\Nota', 'cursos_id', 'id');
    }
    

}
