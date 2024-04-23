<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileInformation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'about',
        'service1',
        'service2',
        'service3',
        'specialty_text',
        'specialty',
        'contact_me',
        'name',
        'address',
        'email',
        'resume_link',
        'linkedin_link',
    ];
}
