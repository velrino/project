<?php namespace App;

/**
 * Eloquent class to describe the oauth_auth_code_scopes table
 *

 */
class OauthAuthCodeScopes extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_auth_code_scopes';

    protected $fillable = array();

    public function oauthScopes()
    {
        return $this->belongsTo('App\OauthScopes', 'scope_id', 'id');
    }

    public function oauthAuthCodes()
    {
        return $this->belongsTo('App\OauthAuthCodes', 'auth_code_id', 'id');
    }

}

