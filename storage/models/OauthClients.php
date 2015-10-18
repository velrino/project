<?php namespace App;

/**
 * Eloquent class to describe the oauth_clients table
 *

 */
class OauthClients extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_clients';

    public $incrementing = false;

    protected $fillable = array('secret', 'name');

    public function oauthClientEndpoints()
    {
        return $this->hasMany('App\OauthClientEndpoints', 'client_id', 'id');
    }

    public function oauthClientGrants()
    {
        return $this->hasMany('App\OauthClientGrants', 'client_id', 'id');
    }

    public function oauthClientScopes()
    {
        return $this->hasMany('App\OauthClientScopes', 'client_id', 'id');
    }

    public function oauthSessions()
    {
        return $this->hasMany('App\OauthSessions', 'client_id', 'id');
    }

}

