<?php namespace App;

/**
 * Eloquent class to describe the password_resets table
 *

 */
class PasswordResets extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'password_resets';

    public $primaryKey = '';

    public $incrementing = false;

    protected $fillable = array('email', 'token');

}

