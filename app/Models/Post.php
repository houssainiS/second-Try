<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',  // Add 'title' here
        'desc',
        'postedBy'   // Assuming you also want to allow mass assignment for 'body'
        // Other attributes as needed
    ];
}
