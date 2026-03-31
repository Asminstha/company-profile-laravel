<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    //
protected $fillable = [
    'heading',
    'description',
    'image',
    'experience',
    'projects',
    'experts',

//  added later
    'mission_title',
    'mission_desc',
    'vision_title',
    'vision_desc',
    'goals_title',
    'goals_desc'

];
}
