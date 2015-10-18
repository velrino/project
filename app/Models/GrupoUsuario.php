<?php namespace App\Models;

/**
 * Eloquent class to describe the grupo_usuario table
 *

 */
class GrupoUsuario extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'grupo_usuario';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('grupo_membro_status', 'grupo_membro_aprovado_id');

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'grupo_membro_usuario_id', 'usuario_id');
    }

    public function grupo()
    {
        return $this->belongsTo('App\Grupo', 'grupo_id', 'grupo_id');
    }

}

