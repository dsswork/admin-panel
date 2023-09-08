<?php

use App\Http\Controllers\Admin as Admin;
use App\Http\Controllers\Web as Web;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [Admin\AdminController::class, 'index'])->name('admin.index');
    Route::post('on-off', [Admin\AdminController::class, 'onOff'])->name('admin.on-off');
    Route::post('sort', [Admin\AdminController::class, 'sort'])->name('admin.sort');
    Route::delete('destroy', [Admin\AdminController::class, 'destroy'])->name('admin.destroy');

    Route::resource('languages', Admin\LanguageController::class);
    Route::resource('categories', Admin\CategoryController::class);

    Route::get('backups/{backup}/download', [Admin\BackupController::class, 'download'])->name('backups.download');
    Route::get('backups/create-from-file', [Admin\BackupController::class, 'createFromFile'])->name('backups.createFromFile');
    Route::post('backups/store-from-file', [Admin\BackupController::class, 'storeFromFile'])->name('backups.storeFromFile');
    Route::post('backups/{backup}/restore', [Admin\BackupController::class, 'restore'])->name('backups.restore');

    Route::resource('backups', Admin\BackupController::class);

    Route::delete('events/clear', [Admin\EventController::class, 'clear'])->name('events.clear');
    Route::resource('events', Admin\EventController::class);

    Route::resource('menus', Admin\MenuController::class);
    Route::post('menus/add-sub-menus', [Admin\MenuController::class, 'addSubMenus'])->name('menus.addSubMenus');

    Route::resource('templates', Admin\TemplateController::class);
    Route::post('templates/add', [Admin\TemplateController::class, 'addSubTemplate'])->name('templates.add');

    Route::put('blocks/update-general', [Admin\BlockController::class, 'updateGeneral'])->name('blocks.update-general');
    Route::post('blocks/add-sub-blocks', [Admin\BlockController::class, 'addSubBlocks'])->name('blocks.addSubBlocks');
    Route::resource('blocks', Admin\BlockController::class);

    Route::resource('pages', Admin\PageController::class);
    Route::get('pages/{page}/add-block', [Admin\PageController::class, 'addBlock'])->name('pages.add-block');
});

require __DIR__ . '/auth.php';

Route::get('/{language?}/{slug?}', [Web\SiteController::class, 'page'])->name('page');
