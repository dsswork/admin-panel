<?php

namespace App\Models;

use App\Traits\OrderBySortTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory, OrderBySortTrait;

    protected $fillable = ['name', 'slug', 'image', 'type',
                           'fields', 'sort', 'show', 'template_id'];

    public function template()
    {
        return $this->hasOne(Template::class)->with('template');
    }
}
