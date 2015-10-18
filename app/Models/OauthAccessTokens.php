<?php namespace App\Models;

/**
 * Eloquent class to describe the oauth_access_tokens table
 *

 */
class OauthAccessTokens extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_access_tokens';

    public $incrementing = false;

    protected $fillable = array('expire_time');

    public function oauthSessions()
    {
        return $this->belongsTo('App\OauthSessions', 'session_id', 'id');
    }

    public function oauthAccessTokenScopes()
    {
        return $this->hasMany('App\OauthAccessTokenScopes', 'access_token_id', 'id');
    }

    public function oauthRefreshTokens()
    {
        return $this->hasOne('App\OauthRefreshTokens', 'access_token_id', 'id');
    }

}

