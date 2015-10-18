<?php namespace App;

/**
 * Eloquent class to describe the notificacoes table
 *

 */
class Notificacoes extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'notificacoes';

    public $primaryKey = 'notificacao_id';

    public $timestamps = false;

    protected $fillable = array('notificacao_tipo', 'notificacao_subtipo', 'notificacao_leitor', 'notificacao_receptor',
        'notificacao_lida', 'notificacao_texto', 'notificacoes_email');

}

