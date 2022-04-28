<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }
    public function voter()
    {
        return $this->belongsToMany(User::class, 'user_comment')
            ->withTimestamps()
            ->withPivot('upvoted');
    }

}
