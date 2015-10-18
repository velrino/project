<?php namespace App\Models;

/**
 * Eloquent class to describe the oauth_scopes table
 *

 */
class OauthScopes extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_scopes';

    public $incrementing = false;

    protected $fillable = array('description');

    public function oauthAccessTokenScopes()
    {
        return $this->hasMany('App\OauthAccessTokenScopes', 'scope_id', 'id');
    }

    public function oauthAuthCodeScopes()
    {
        return $this->hasMany('App\OauthAuthCodeScopes', 'scope_id', 'id');
    }

    public function oauthClientScopes()
    {
        return $this->hasMany('App\OauthClientScopes', 'scope_id', 'id');
    }

    public function oauthGrantScopes()
    {
        return $this->hasMany('App\OauthGrantScopes', 'scope_id', 'id');
    }

    public function oauthSessionScopes()
    {
        return $this->hasMany('App\OauthSessionScopes', 'scope_id', 'id');
    }

}

