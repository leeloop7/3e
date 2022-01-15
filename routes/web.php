<?php

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["prefix" => "admin", "middleware" => "auth.basic"], function() {
    Route::get("/", function(){
      return view("admin.dashboard");
    })->name("admin.dashboard");
    Route::get("presentation", function(){
       return view("admin.presentation");
    })->name("admin.presentation");
    Route::get("portfolio", function(){
        return view("admin.portfolio");
    })->name("admin.portfolio");
    Route::get("references", function(){
        return view("admin.references");
    })->name("admin.references");
    Route::get("contact-us", function(){
        return view("admin.contact-us");
    })->name("admin.contact-us");
});

Route::get("/", function () {
   return Redirect::to("/en");
});

Route::get('/{language}', function (string $language) {
    app()->setLocale($language);
    return view('home');
});

Route::post("/{language}/contact-us", function (Request $request, string $language) {
    app()->setLocale($language);
    $validator = Validator::make($request->input(), [
        "subject" => "required",
        "name" => "required",
        "email" => "required|email",
        "message" => "required"
    ]);

    if ($validator->fails()) {
        return redirect()->to("/#contactForm")->withErrors($validator->errors())->withInput();
    }

    Mail::to(
        env("MAIL_TO_ADDRESS", "info@3e-eng.eu")
    )->send(new ContactUs($request->input()));
    return redirect()->to("/#contactForm")->with("success", __("Form was successfully sent."));
})->name("sendContactForm");
