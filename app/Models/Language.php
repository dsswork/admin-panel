<?php

namespace App\Models;

use App\Traits\OrderBySortTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory, OrderBySortTrait;

    protected $fillable = ['title', 'slug', 'sort', 'show'];
}
