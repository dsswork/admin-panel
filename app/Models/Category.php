<?php

namespace App\Models;

use App\Traits\OrderBySortTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory, OrderBySortTrait;

    protected $fillable = ['name', 'slug', 'title', 'show', 'sort'];
}
