<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bankDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['bankName','accountNo'];

    /**
     * Get the Owner that owns the BankDetail.
     */
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }

}
