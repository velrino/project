<?php namespace App;

/**
 * Eloquent class to describe the oauth_auth_codes table
 *

 */
class OauthAuthCodes extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_auth_codes';

    public $incrementing = false;

    protected $fillable = array('redirect_uri', 'expire_time');

    public function oauthSessions()
    {
        return $this->belongsTo('App\OauthSessions', 'session_id', 'id');
    }

    public function oauthAuthCodeScopes()
    {
        return $this->hasMany('App\OauthAuthCodeScopes', 'auth_code_id', 'id');
    }

}

