<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
    protected $fillable = [
        'user_id',
        'participant_id',
        'event_id'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at'  => 'date:m-d-Y',
        'updated_at' => 'datetime:Y-m-d',
        'upda' => 'datetime:Y-m-d'
    ];

    public function participated()
    {
        return $this->belongsTo(Participant::class, 'participant_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
