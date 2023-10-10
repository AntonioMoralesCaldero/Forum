<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Forum extends Model
{
    use HasFactory;

    protected $table = 'forums'; 

  protected $fillable = [
      'name',
      'description'
   ];

   public function posts(): HasMany{
    return $this->hasMany(Post::class);
   }
}


