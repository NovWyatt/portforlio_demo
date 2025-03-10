<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'item_name', 
        'description',
        'project_url',
        'image',
        'status'
    ];
}