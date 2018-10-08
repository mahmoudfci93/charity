<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable =['place', 'mobile', 'value', 'confirm', 'send_trans', 'received',];

    public function donnerUser()
    {
        return $this->belongsTo(User::class);
    }
}
