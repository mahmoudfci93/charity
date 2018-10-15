<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable =['full_name','time','place','sub_place', 'mobile','mobile2','other', 'value', 'confirm', 'send_trans', 'received'];

    public function donnerUser()
    {
        return $this->belongsTo(User::class);
    }
}
