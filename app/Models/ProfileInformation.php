<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'about',
        'specialty_text',
        'specialty',
        'contact_me',
        'name',
        'address',
        'email',
        'resume_link',
        'linkedin_link',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
