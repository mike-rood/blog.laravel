<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Post;
use Carbon\Carbon;


class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'comments';
    protected $guarded = false;
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
    
    public function getDateAsCarbonAttribute() 
    {
        return Carbon::parse($this->created_at);
    }
}
