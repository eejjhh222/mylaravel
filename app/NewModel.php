<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    protected $table = 'test';

    // tiemstamp 이름변경시 설정
//    const CREATED_AT = 'creation_date';
//    const UPDATED_AT = 'last_update';

//    public $timestamps = false; // timestpam 를 원하지 않을 때 false

}

