<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class issuebook extends Model
{
    //
    protected $table= 'issuebooks';
    protected $primarykey= 'id';


    protected $fillable = [
        'username', 'bid', 'approve','issue','return'
    ];
}
