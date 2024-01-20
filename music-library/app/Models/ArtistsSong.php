<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistsSong extends Model
{
    protected $table="artists_song";

    public function artist()
    {
        return $this->belongsTo(User::class, 'artist_name', 'id');
    }
}
