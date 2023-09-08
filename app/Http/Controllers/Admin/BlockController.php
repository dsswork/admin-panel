<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSubBlocksRequest;
use App\Http\Requests\StoreBlockRequest;
use App\Http\Requests\UpdateBlockRequest;
use App\Models\Block;
use App\Models\Language;
use App\Models\Page;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $languages = Language::all();
        $blocks = Block::where('type', 'general')->with('template')->get();
        $blocks = Block::decodeOptions($blocks);

        return view('blocks.index', compact(['blocks', 'languages']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreBlockRequest $request
     */
    public function store(StoreBlockRequest $request)
    {
        Block::create($request->validated());
        $page = Page::find($request->page_id);
        return to_route('pages.edit', compact(['page']))
            ->with(['message' => 'Block was added', 'type' => 'success']);;
    }

    public function addSubBlocks(AddSubBlocksRequest $request)
    {
        $insertArray = [];
        for ($i = 0; $i < $request->number; $i++) {
            $insertArray[] = [
                'block_id' => $request->block_id,
                'template_id' => $request->template_id
            ];
        }

        Block::insert($insertArray);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Block $block
     * @return \Illuminate\Http\Response
     */
    public function show(Block $block)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Block $block
     * @return \Illuminate\Http\Response
     */
    public function edit(Block $block)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateBlockRequest $request
     * @param \App\Models\Block $block
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlockRequest $request, Block $block)
    {
        //
    }

    public function updateGeneral(Request $request)
    {
        Block::updateBlocks($request->blocks, $request->file('blocks'));
        return to_route('blocks.index')
            ->with(['message' => 'Changes was saved', 'type' => 'info']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Block $block
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {
        //
    }
}
