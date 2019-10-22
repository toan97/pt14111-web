<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use Notifiable;
    public function categories()
    {
    	return $this->hasMany(Category::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
    public function setPasswordAttribute($password)
    {
        $this->attribute['password'] = bcrypt($password);
    }
}
