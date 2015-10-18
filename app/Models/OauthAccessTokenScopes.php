<?php namespace App\Models;

/**
 * Eloquent class to describe the oauth_access_token_scopes table
 *

 */
class OauthAccessTokenScopes extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_access_token_scopes';

    protected $fillable = array();

    public function oauthScopes()
    {
        return $this->belongsTo('App\OauthScopes', 'scope_id', 'id');
    }

    public function oauthAccessTokens()
    {
        return $this->belongsTo('App\OauthAccessTokens', 'access_token_id', 'id');
    }

}

