<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
//    protected $guarded
//    protected $fillable =
    protected $guarded = [];
//    public function getRouteKeyName()
//    {
//        return 'slug'; // TODO: Change the autogenerated stub
//    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

