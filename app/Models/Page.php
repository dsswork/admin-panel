<?php

namespace App\Models;

use App\Traits\OrderBySortTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory, OrderBySortTrait;

    protected $fillable = ['name', 'slug', 'meta', 'main', 'show', 'sort', 'category_id'];

    public function blocks() {
        return $this->hasMany(Block::class);
    }
}
