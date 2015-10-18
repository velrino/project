<?php namespace App;

/**
 * Eloquent class to describe the oauth_sessions table
 *

 */
class OauthSessions extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_sessions';

    protected $fillable = array('owner_type', 'owner_id', 'client_redirect_uri');

    public function oauthClients()
    {
        return $this->belongsTo('App\OauthClients', 'client_id', 'id');
    }

    public function oauthAccessTokens()
    {
        return $this->hasMany('App\OauthAccessTokens', 'session_id', 'id');
    }

    public function oauthAuthCodes()
    {
        return $this->hasMany('App\OauthAuthCodes', 'session_id', 'id');
    }

    public function oauthSessionScopes()
    {
        return $this->hasMany('App\OauthSessionScopes', 'session_id', 'id');
    }

}

