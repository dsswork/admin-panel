<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Block;
use App\Models\Language;
use App\Models\Page;
use App\Models\Template;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact(['pages']));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePageRequest  $request
     */
    public function store(StorePageRequest $request)
    {
        $page = Page::create($request->validated());
        return to_route('pages.edit', compact(['page']))
            ->with(['message' => 'Page was created', 'type' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page

     */
    public function edit(Page $page)
    {
        $page->load('blocks.template');
        $meta = json_decode($page->meta);
        $page->blocks = Block::decodeOptions($page->blocks);
        $languages = Language::all();
        return view('pages.edit', compact(['page', 'languages', 'meta']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePageRequest  $request
     * @param  \App\Models\Page  $page
     */
    public function update(UpdatePageRequest $request, Page $page)
    {

        $page->update($request->validated());

        Block::updateBlocks($request->blocks, $request->file('blocks'), $request->names);

        return to_route('pages.edit', compact(['page']))
            ->with(['message' => 'Changes was saved', 'type' => 'info']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return to_route('pages.index')
            ->with(['message' => 'Page was deleted', 'type' => 'danger']);
    }

    public function addBlock(Page $page)
    {
        $templates = Template::where('show', 1)->where('type', 'page')->orWhere('type', 'general')->get();
        $pageTemplates = $templates->where('type', 'page');
        $generalTemplates = $templates->where('type', 'general');
        return view('pages.add-block', compact(['pageTemplates', 'generalTemplates', 'page']));
    }
}
