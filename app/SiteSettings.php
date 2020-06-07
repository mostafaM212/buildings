<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    //
    protected $table ='siteSetting' ;
    protected $fillable =[
        'slug',
        'nameSetting',
        'value',
        'type',
        'main_image'

    ];
}
