<?php namespace App\Models;

/**
 * Eloquent class to describe the users table
 *

 */
class Users extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'users';

    protected $fillable = array('name', 'email', 'password', 'remember_token');

}

