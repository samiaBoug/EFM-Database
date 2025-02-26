<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'article_id'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
