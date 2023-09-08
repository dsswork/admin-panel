<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $languages = Language::all();
        return view('languages.index', compact(['languages']));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLanguageRequest  $request
     */
    public function store(StoreLanguageRequest $request)
    {
        Language::create($request->validated());
        return to_route('languages.index')
            ->with(['message' => 'Language was created', 'type' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Language  $language
     */
    public function edit(Language $language)
    {
        return view('languages.edit', compact(['language']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLanguageRequest  $request
     * @param  \App\Models\Language  $language
     */
    public function update(UpdateLanguageRequest $request, Language $language)
    {
        $language->update($request->validated());
        return to_route('languages.edit', compact(['language']))
            ->with(['message' => 'Changes was saved', 'type' => 'info']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Language  $language
     */
    public function destroy(Language $language)
    {
        $language->delete();
        return to_route('languages.index')
            ->with(['message' => 'Language was deleted', 'type' => 'danger']);
    }
}
