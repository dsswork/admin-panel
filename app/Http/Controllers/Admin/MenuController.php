<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSubMenusRequest;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Template;
use App\Services\UploadImages;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $menus = Menu::whereNull('menu_id')->get();
        $headerMenus = $menus->where('type', 'header');
        $footerMenus = $menus->where('type', 'footer');
        return view('menus.index', compact(['headerMenus', 'footerMenus']));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $templates = Template::where('show', 1)->where('type', 'menu')->get();
        return view('menus.create', compact(['templates']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMenuRequest  $request
     */
    public function store(StoreMenuRequest $request)
    {
        $menu = Menu::create($request->validated());
        return to_route('menus.edit', compact(['menu']))
            ->with(['message' => 'Menu was created', 'type' => 'success']);
    }

    public function addSubMenus(AddSubMenusRequest $request)
    {

        $insertArray = [];
        for ($i = 0; $i < $request->number; $i++) {
            $insertArray[] = [
                'menu_id' => $request->menu_id,
                'template_id' => $request->template_id
            ];
        }

        Menu::insert($insertArray);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     */
    public function edit(Menu $menu)
    {
        $languages = Language::all();
        $menu = Menu::where('id', $menu->id)->with('menus')->first();
        $menu->options = json_decode($menu->options);
        $menu->menus->each(function($subMenu){
            $subMenu->options = json_decode($subMenu->options);
        });
        return view('menus.edit', compact(['menu', 'languages']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuRequest  $request
     * @param  \App\Models\Menu  $menu
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {

        $update = [];
        foreach($request->blocks ?? [] as $id => $options) {
            $update[$id] = [
                'id' => $id,
                'options' => $options,
                'name' => $request->name,
                'type' => $request->type
            ];
        }

        if($files = $request->file('blocks')) {
            $update = UploadImages::upload($files, 'menus', $update);
        }

        foreach($update as $id => $options) {
            $update[$id]['options'] = json_encode($update[$id]['options']);
        }


        \Batch::update(new Menu, $update, 'id');

        return to_route('menus.edit', compact(['menu']))
            ->with(['message' => 'Changes was saved', 'type' => 'info']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu

     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return to_route('menus.index')
            ->with(['message' => 'Menu was deleted', 'type' => 'danger']);
    }
}
