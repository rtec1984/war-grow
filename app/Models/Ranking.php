<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;

    protected $dates = ['date'];

    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }

    public function events() {
        return $this->hasMany('App\Models\Event');
    }

    public function eventsAsParticipant() {
        return $this->belongsToMany('App\Models\Event');
    }
}
