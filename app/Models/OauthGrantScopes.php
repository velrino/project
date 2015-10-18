<?php namespace App\Models;

/**
 * Eloquent class to describe the oauth_grant_scopes table
 *

 */
class OauthGrantScopes extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_grant_scopes';

    protected $fillable = array();

    public function oauthScopes()
    {
        return $this->belongsTo('App\OauthScopes', 'scope_id', 'id');
    }

    public function oauthGrants()
    {
        return $this->belongsTo('App\OauthGrants', 'grant_id', 'id');
    }

}

