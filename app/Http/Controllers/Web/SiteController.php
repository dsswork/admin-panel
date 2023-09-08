<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Block;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SiteController extends Controller
{
    public function page(Request $request, LanguageRequest $langRequest)
    {
        $languages = Language::all();
        $langSlug = $langRequest->language ?? Language::first()->slug;

        App::setLocale($langSlug);

        $langId = Language::where('slug', $langSlug)->first()->id;

        $slug = '/'.$request->slug;

        $page = Page::where('slug',  $slug)->with(['blocks' => function($query) {
            $query->where('show', 1)->with('template:id,slug,type');
        }], 'blocks.blocks')->first();

        $meta = json_decode($page->meta)?->{ $langId } ?? null;


        $page->blocks = $page->blocks->map(function ($block) use ($langId) {
            if($block->template->type=='general') {
                $block = Block::with('blocks')
                    ->where('type', 'general')
                    ->where('template_id', $block->template_id)->first();
            }

            $block->options = json_decode($block->options)?->{ $langId } ?? null;

            $block->blocks->each(function ($subBlock) use ($langId) {
                $subBlock->options = json_decode($subBlock->options)?->{ $langId }  ?? null;
            });

            return $block;
        });


        $menus = Menu::where('type', 'header')->where('show', 1)->with('template', 'menus.template')->get();
        $menus->each(function ($menu) use ($langId) {
            $menu->options = json_decode($menu->options)?->{ $langId } ?? null;
            $menu->menus->each(function ($subMenu) use ($langId) {
                $subMenu->options = json_decode($subMenu->options)?->{ $langId }  ?? null;
            });
        });

        return view('site.index', compact(['menus', 'page', 'meta', 'languages', 'langSlug', 'slug']));
    }
}
