<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rembursement extends Model
{
    protected $fillable = [
        'users_id', 'image', 'status', 'nominal', 'date', 'description'
    ];
    public function Users()
    {
        return $this->belongsTo(User::class);
    }    
}
