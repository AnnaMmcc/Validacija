<?php

use Illuminate\Support\Facades\Route;

Route::get("/",[ \App\Http\Controllers\HomeController::class, 'index']);
//Route::view("/", "welcome");

Route::view("/about", "about");

Route::get("shop", [\App\Http\Controllers\ShopController::class, 'index']);
//Route::view("/shop", "shop");

Route::get("/contact", [\App\Http\Controllers\ContactController::class, 'index']);
//Route::view("/contact", "contact");

Route::get("/admin/all-contacts",[\App\Http\Controllers\ContactController::class, 'getAllContacts']);

Route::post("/send-contact", [\App\Http\Controllers\ContactController::class, "sendContact"]);

Route::get("/admin/add-product", [\App\Http\Controllers\ShopController::class, 'AddProducts']);

Route::post("/create-product", [\App\Http\Controllers\ShopController::class, 'CreateProducts']);

Route::get("/admin/products", [\App\Http\Controllers\ShopController::class, 'ShowAllProducts']);
