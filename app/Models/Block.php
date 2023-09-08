<?php

namespace App\Models;

use App\Services\UploadImages;
use App\Traits\OrderBySortTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Block extends Model
{
    use HasFactory, OrderBySortTrait;

    protected $fillable = ['name', 'page_id', 'template_id', 'options', 'block_id', 'show', 'sort', 'type'];

    public static function decodeOptions($blocks)
    {
        return $blocks->each(function ($block){
            $block->options = json_decode($block->options);
            $block->blocks->each(function ($subBlock){
                $subBlock->options = json_decode($subBlock->options);
            });
        });
    }

    public function template() {
        return $this->belongsTo(Template::class);
    }

    public function blocks() {
        return $this->hasMany(Block::class);
    }

    public static function updateBlocks($blocks, $files, $names = []) {

        $updateBlocksArray = [];
        foreach($blocks ?? [] as $id => $options) {
            $updateBlocksArray[$id] = ['id' => $id, 'options' => $options, 'name' => $names[$id] ?? ''];
        }

        if($files) {
            $updateBlocksArray = UploadImages::upload($files, 'blocks', $updateBlocksArray);
        }

        foreach($updateBlocksArray as $key => $block) {
            $updateBlocksArray[$key]['options'] = json_encode($block['options']);
        }

        \Batch::update(new Block, $updateBlocksArray, 'id');
    }
}
