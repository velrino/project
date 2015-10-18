<?php namespace App\Models;

/**
 * Eloquent class to describe the area table
 *

 */
class Area extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'area';

    public $primaryKey = 'area_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('area_nome');

}

