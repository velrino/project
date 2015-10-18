<?php namespace App;

/**
 * Eloquent class to describe the oauth_client_grants table
 *

 */
class OauthClientGrants extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_client_grants';

    protected $fillable = array();

    public function oauthGrants()
    {
        return $this->belongsTo('App\OauthGrants', 'grant_id', 'id');
    }

    public function oauthClients()
    {
        return $this->belongsTo('App\OauthClients', 'client_id', 'id');
    }

}

