<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    #For deleted records
    const STATUS_ACTIVE = 0;
    const STATUS_DELETED = 1;

    #For approved items
    const STATUS_APPROVED = 1;
    const STATUS_NOT_APPROVED = 0;

    #Set default views to 0
    const CLICK_COUNT = 0;

    #Set default user to 2 for anonymous users
    const ANONYMOUS_USER = 2;

    #Set slug url to # for now
    const DEFAULT_SLUG = "#";
    const DEFAULT_IMG_URL = '#';

    protected $fillable = ['title','content','category', 'user_id','click_count','attachment_url'];

    #Default values
    protected $attributes = [
        'approved' => self::STATUS_NOT_APPROVED,
        'deleted' => self::STATUS_ACTIVE,
        'click_count' => self::CLICK_COUNT,
        'slug' => self::DEFAULT_SLUG,
        'img_url' => self::DEFAULT_IMG_URL,
        'attachment_url' => self::DEFAULT_IMG_URL


    ];
}
