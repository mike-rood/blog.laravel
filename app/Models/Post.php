<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'posts';
    protected $guarded = false;
    
    protected $withCount = ['likes'];
    protected $with = ['category', 'tags', 'likes', 'comments'];

    public function tags() 
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function likes() 
    {
        return $this->belongsToMany(User::class, 'post_user_likes', 'post_id', 'user_id');
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
