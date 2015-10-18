<?php namespace App\Models;

/**
 * Eloquent class to describe the migrations table
 *

 */
class Migrations extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'migrations';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('migration', 'batch');

}

