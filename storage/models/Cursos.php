<?php namespace App;

/**
 * Eloquent class to describe the cursos table
 *

 */
class Cursos extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'cursos';

    public $primaryKey = 'curso_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('curso_nome', 'area_curso_id');

}

