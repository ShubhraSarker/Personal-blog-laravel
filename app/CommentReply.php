<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    //
    protected $fillable=[

        'comment_id',
        'email',
        'body',
        'is_active',
        'author'

    ];

    public function comment(){

        return $this->belongsTo('App\comment');

    }
}
