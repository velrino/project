<?php namespace App\Models;

/**
 * Eloquent class to describe the oauth_session_scopes table
 *

 */
class OauthSessionScopes extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_session_scopes';

    protected $fillable = array();

    public function oauthScopes()
    {
        return $this->belongsTo('App\OauthScopes', 'scope_id', 'id');
    }

    public function oauthSessions()
    {
        return $this->belongsTo('App\OauthSessions', 'session_id', 'id');
    }

}

