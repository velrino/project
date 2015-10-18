<?php namespace App;

/**
 * Eloquent class to describe the oauth_refresh_tokens table
 *

 */
class OauthRefreshTokens extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'oauth_refresh_tokens';

    public $primaryKey = 'access_token_id';

    public $incrementing = false;

    protected $fillable = array('id', 'expire_time');

    public function oauthAccessTokens()
    {
        return $this->belongsTo('App\OauthAccessTokens', 'access_token_id', 'id');
    }

}

