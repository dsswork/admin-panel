<?php

namespace App\Models;

use App\Traits\OrderBySortTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory, OrderBySortTrait;

    protected $fillable = ['name', 'type', 'sort', 'options', 'show', 'template_id', 'menu_id'];

    public function template() {
        return $this->belongsTo(Template::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
