<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radiotopics extends Model
{
    protected $table = 'radio_topics';

    #For deleted records
    const STATUS_ACTIVE = 0;
    const STATUS_DELETED = 1;

    protected $fillable = ['title','description','station_name','deleted','created_by','audio_url'];

    protected $attributes = [
        'deleted' => self::STATUS_ACTIVE,
        'open' => self::STATUS_ACTIVE
    ];
}
