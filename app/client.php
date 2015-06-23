<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    /**
     * Get the user that owns the Client.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get all of the client member's person.
     */
    public function customer(){
        return $this->morphMany('App\person','personable');
    }
    /**
     * Get all of the client member's address.
     */
    public function addresses(){
        return $this->morphMany('App\Address','addressable');
    }}
