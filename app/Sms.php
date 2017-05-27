<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    #For deleted records
    const STATUS_APPROVED = 1;
    const STATUS_NOT_APPROVED = 0;

    protected $fillable = [
      'from','to','text','date','aft_id','link_id','discussion_id','approved','radiotopic_id','type','message_id'
    ];

    protected $attributes =[
      'approved' => self::STATUS_NOT_APPROVED,
      'discussion_id' => 0
    ];
}
