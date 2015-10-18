<?php namespace App\Models;

/**
 * Eloquent class to describe the oauth_client_endpoints table
 *

 */
class OauthClientEndpoints extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_client_endpoints';

    protected $fillable = array('redirect_uri');

    public function oauthClients()
    {
        return $this->belongsTo('App\OauthClients', 'client_id', 'id');
    }

}

