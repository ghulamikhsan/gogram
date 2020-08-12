<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/uhg6elk155hPM9XZTjfHn3s0YICBAuNSy5RMcsxS.webp';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}