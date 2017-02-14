<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    const STATUS_ACTIVE = 0;
    const STATUS_DELETED = 1;

    #For approved items
    const STATUS_APPROVED = 1;
    const STATUS_NOT_APPROVED = 0;

    const ANONYMOUS_USER = 2;

    #Default values
    protected $attributes = [
        'approved' => self::STATUS_NOT_APPROVED,
        'deleted' => self::STATUS_ACTIVE,
    ];

    protected $fillable = ['content','user_id','discussion_id'];

    protected $table = 'discussion_comments';
    
    

}
