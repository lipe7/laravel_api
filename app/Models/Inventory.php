<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'company';
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'quantity',
    ];

    protected $hidden = [];
    protected $appends = [];
}
