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

Route::get('/', function () {
    return view('home');
});

Route::post("contact-us", function (Request $request) {
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
