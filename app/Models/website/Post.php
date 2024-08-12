<?php

namespace App\Models\website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;

class Post extends Model
{
    use HasFactory;
   protected $fillable=[
    'title',
    'content',
   ];

  
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    } 
}
