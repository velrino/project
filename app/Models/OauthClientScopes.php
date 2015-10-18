<?php namespace App\Models;

/**
 * Eloquent class to describe the oauth_client_scopes table
 *

 */
class OauthClientScopes extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_client_scopes';

    protected $fillable = array();

    public function oauthScopes()
    {
        return $this->belongsTo('App\OauthScopes', 'scope_id', 'id');
    }

    public function oauthClients()
    {
        return $this->belongsTo('App\OauthClients', 'client_id', 'id');
    }

}

