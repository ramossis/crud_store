<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Store extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable=[
        'name',
        'slug',
        'front_page',
        'description',
        'location',
        'nit',
        'status'
    ];

    protected $guarded=[
        'id','created_at','updated_at'
    ];

    public function sluggable():array{
        return [
            'slug'=>[
                'source'=>'name'
            ]
            ];
        
    }
}
