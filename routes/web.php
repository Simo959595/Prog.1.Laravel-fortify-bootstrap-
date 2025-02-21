<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProductsController;

Route::get('/', [ContactsController::class, 'home'])->name('welcome');


// rotta di tipo get per inserimento dati nella pagina contacts
Route::get("/contacts", [ContactsController::class, "contacts"])->name("contacts");

// rotta di tipo post per inserimento dati nella pagina contacts
Route::post("/contacts/send", [ContactsController::class, "contactsSend"])->name("send.contacts");

// rotta di tipo get per visualizzare tutti i prodotti presenti nel DB tabella products
Route::get("/products/products_index", [ProductsController::class, "productsIndex"])->name("products.products_index");

// rotte in group routing attraverso il controller
Route::controller(HouseController::class)->group(function () {    
    
// rotta di tipo get per recuperare tutti gli oggetti salvati nel DB attraverso la classe eloquent model House
Route::get('/house/index', 'index')->name('house.index');

// rotta di tipo get per la creazione della risorsa House
Route::get('/house/create', 'create')->name('house.create');

// rotta di tipo post per la creazione della risorsa House
Route::post('/house/store', 'store')->name('house.store');
});

Route::get('/land/land_create', [LandController::class, 'landCreate'])->name('land.land_create');

Route::get('/land/land_index', [LandController::class, 'landIndex'])->name('land.land_index');

Route::get('/land/{land}/edit', [LandController::class, 'landEdit'])->name('land.edit');