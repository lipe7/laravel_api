<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'category_id ',
        'company_id ',
        'description',
        'price',
        'image'
    ];

    protected $hidden = [];
    protected $appends = [];
}
