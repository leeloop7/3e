<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Throwable;
use function compact;
use function redirect;
use function view;

class AdminController {

    public function dashboard()
    {
        return view("admin.dashboard");
    }

    public function presentation(Request $request)
    {
        // Get content for presentation
        $content = Content::whereIn("content_key", [
            "Who are we?",
            "Presentation",
            "3e.presentation.paragraph_1",
            "3e.presentation.paragraph_2",
            "3e.presentation.paragraph_3",
        ])->whereLanguage(
            $request->query("language", "en")
        )->get();

        return view("admin.presentation", compact("content"));
    }

    public function portfolio(Request $request)
    {
        // Get content for presentation
        $content = Content::whereIn("content_key", [
            "Portfolio",
            "Technical Services",
            "3e.portfolio.technical",
            "Production Technologies",
            "3e.portfolio.industrial_technologies",
            "Products",
            "3e.portfolio.products",
            "Assembly And Transport",
            "3e.portfolio.assembly_and_transport",
        ])->whereLanguage(
            $request->query("language", "en")
        )->get();

        return view("admin.portfolio", compact("content"));
    }

    public function references()
    {
        return view("admin.references");
    }

    public function contactUs()
    {
        return view("admin.contact-us");
    }

    public function updateContent(Request $request)
    {
       try {
           $content = Content::where("content_key", $request->input("content_key"))->whereLanguage(
               $request->query("language", "en")
           )->firstOrFail();
           $content->content_value = $request->input("content_value");
           $content->save();

           return redirect()->back()->with("success", "Content [".$request->input("content_key")."] updated.");
       } catch (Throwable $e) {
           return redirect()->back()->with("error", "Error updating the content [".$request->input("content_key")."].");
       }
    }

}
