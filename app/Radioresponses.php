<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radioresponses extends Model
{
    protected $table = 'radio_responses';

    #For deleted records
    const STATUS_ACTIVE = 0;
    const STATUS_DELETED = 1;
    
    protected $fillable = ['topic_id','respon_name','respon_phone','response','created_by'];
    
    protected $attributes = [
        'deleted' => self::STATUS_ACTIVE,
    ];
    
}
