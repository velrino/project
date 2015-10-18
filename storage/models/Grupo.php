<?php namespace App;

/**
 * Eloquent class to describe the grupo table
 *

 */
class Grupo extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'grupo';

    public $primaryKey = 'grupo_id';

    public $timestamps = false;

    protected $fillable = array('grupo_nome', 'grupo_area', 'grupo_subarea', 'grupo_descricao', 'grupo_admin');

    public function grupoPostagem()
    {
        return $this->hasMany('App\GrupoPostagem', 'grupo_postagem_id_grupo', 'grupo_id');
    }

    public function grupoUsuario()
    {
        return $this->hasMany('App\GrupoUsuario', 'grupo_id', 'grupo_id');
    }

}
