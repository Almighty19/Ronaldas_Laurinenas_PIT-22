<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    // Išjungti automatinį created_at ir updated_at laukų valdymą
    public $timestamps = false;

    protected $fillable = ['title', 'description', 'date', 'location'];

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}



