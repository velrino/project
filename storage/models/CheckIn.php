<?php namespace App;

/**
 * Eloquent class to describe the check_in table
 *

 */
class CheckIn extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'check_in';

    public $primaryKey = 'check_in_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('check_in_universidade', 'check_in_ra', 'check_in_codigo', 'check_in_data',
        'check_in_hora');

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'check_in_usuario_id', 'usuario_id');
    }

}

