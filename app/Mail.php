<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = [
        'id', 'uuid','for','from' ,'text','scent_id','flower_id','fold_id','sheet_id'
    ];
}
