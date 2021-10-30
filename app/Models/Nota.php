<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nota
 *
 * @property $id
 * @property $alumnos_id
 * @property $cursos_id
 * @property $docentes_id
 * @property $nota1
 * @property $nota2
 * @property $nota3
 * @property $nota4
 * @property $promedio
 * @property $parcial
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno $alumno
 * @property Curso $curso
 * @property Docente $docente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nota extends Model
{
    
    static $rules = [
		'alumnos_id' => 'required',
		'cursos_id' => 'required',
		'docentes_id' => 'required',
		'nota1' => 'required',
		'nota2' => 'required',
		'nota3' => 'required',
		'nota4' => 'required',
		'promedio' => 'required',
		'parcial' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['alumnos_id','cursos_id','docentes_id','nota1','nota2','nota3','nota4','promedio','parcial'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno', 'id', 'alumnos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'cursos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'id', 'docentes_id');
    }
    

}
