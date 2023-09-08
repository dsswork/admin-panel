<?php

namespace App\Observers;

use App\Models\Event;
use App\Models\Page;
use Illuminate\Support\Facades\Log;

class PageObserver
{
    protected $title = '<span class="right badge badge-danger">Page</span>';

    /**
     * Handle the Page "created" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function created(Page $page)
    {
        Event::create([
            'title' => $this->title.' '.$page->name.' was created',
            'description' => 'Page '.$page->name.' was created',
            'link' => route('pages.edit', compact(['page'])),
            'icon' => 'fa-plus bg-blue'
        ]);
    }

    /**
     * Handle the Page "updated" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function updated(Page $page)
    {
        $message = '';

        if($page->isDirty('slug')) {
            $oldSlug = $page->getOriginal('slug');
            $newSlug = $page->slug;
            $message = "Old slug: $oldSlug. New slug: $newSlug.";
        }

        Event::create([
            'title' => $this->title.' '.$page->name.' was updated',
            'description' => 'Page '.$page->name.' was updated. '.$message,
            'link' => route('pages.edit', compact(['page'])),
            'icon' => 'fa-save bg-yellow'
        ]);
    }

    /**
     * Handle the Page "deleted" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function deleted(Page $page)
    {
        Event::create([
            'title' => $this->title.' '.$page->name.' was deleted',
            'description' => 'Page '.$page->name.' was deleted',
            'icon' => 'fa-trash bg-red'
        ]);
    }

    /**
     * Handle the Page "restored" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function restored(Page $page)
    {
        //
    }

    /**
     * Handle the Page "force deleted" event.
     *
     * @param  \App\Models\Page  $page
     * @return void
     */
    public function forceDeleted(Page $page)
    {
        //
    }
}
