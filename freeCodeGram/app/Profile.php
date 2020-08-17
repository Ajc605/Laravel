<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        return '/storage/' .($this->image ? $this->image : 'profile/zUP8V4oGnjszYKIjYdizRWjDTeXUJYYNiBn5JB6x.jpeg');
    }

    public function follower() {
        return $this->belongsToMany(User::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
