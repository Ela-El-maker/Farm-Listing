<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rentee extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [
        'user_id',
        'name',
        'profile_image',
        'title',
        'phone',
        'email'
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
