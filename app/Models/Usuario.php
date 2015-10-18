<?php namespace App\Models;

/**
 * Eloquent class to describe the usuario table
 *

 */
class Usuario extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'usuario';

    public $primaryKey = 'usuario_id';

    public $timestamps = false;

    protected $fillable = array('usuario', 'usuario_email', 'usuario_nome', 'usuario_password', 'usuario_tipo',
        'id_area', 'usuario_sexo', 'usuario_cor');

    public function checkIn()
    {
        return $this->hasMany('App\CheckIn', 'check_in_usuario_id', 'usuario_id');
    }

    public function grupoPostagem()
    {
        return $this->hasMany('App\GrupoPostagem', 'grupo_postagem_autor', 'usuario_id');
    }

    public function grupoUsuario()
    {
        return $this->hasMany('App\GrupoUsuario', 'grupo_membro_usuario_id', 'usuario_id');
    }

}
