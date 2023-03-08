<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'tickets');
    }

    public function typeEvent()
    {
        return $this->hasOne(TypeEvent::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function statusEvent()
    {
        return $this->hasOne(StatusEvent::class);
    }

    public function userCreator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
