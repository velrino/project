<?php namespace App;

/**
 * Eloquent class to describe the oauth_grants table
 *

 */
class OauthGrants extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_grants';

    public $incrementing = false;

    protected $fillable = array();

    public function oauthClientGrants()
    {
        return $this->hasMany('App\OauthClientGrants', 'grant_id', 'id');
    }

    public function oauthGrantScopes()
    {
        return $this->hasMany('App\OauthGrantScopes', 'grant_id', 'id');
    }

}

