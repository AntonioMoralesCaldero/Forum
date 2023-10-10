<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts'; 

    protected $fillable = [
        'user_id',
        'forum_id',
        'title',
        'description'
     ];
  
    public function forum(): BelongsTo{
        return $this->belongsTo(Forum::class, 'forum_id');
    }

    public function owner(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
     
}
