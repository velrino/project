<?php namespace App;

/**
 * Eloquent class to describe the grupo_postagem table
 *

 */
class GrupoPostagem extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'grupo_postagem';

    public $primaryKey = 'grupo_postagem_id';

    public $timestamps = false;

    protected $fillable = array('grupo_postagem_titulo', 'grupo_postagem_publicacao', 'grupo_postagem_data',
        'grupo_postagem_hora');

    public function grupo()
    {
        return $this->belongsTo('App\Grupo', 'grupo_postagem_id_grupo', 'grupo_id');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'grupo_postagem_autor', 'usuario_id');
    }

}

