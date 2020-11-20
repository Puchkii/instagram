<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/Hg8KNmO33YZ2COpThfxysMokk66uIO29lueRdFEv.png';
        return '/storage/'. $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
