<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Throwable;
use function compact;
use function redirect;
use function view;

class AdminController
{

    public function dashboard()
    {
        return view("admin.dashboard");
    }

    public function presentation(Request $request)
    {
        $content = $this->getGroupedContent([
            "Who are we?",
            "Presentation",
            "3e.presentation.paragraph_1",
            "3e.presentation.paragraph_2",
            "3e.presentation.paragraph_3",
        ]);

        return view("admin.presentation", compact("content"));
    }

    private function getGroupedContent(array $keys)
    {
        $content = Content::whereIn("content_key", $keys)->get(["content_key", "content_value", "language"]);

        $groupedContent = [
            "en" => [],
            "de" => [],
            "sl" => []
        ];
        foreach ($content as $item) {
            $groupedContent[$item->language][$item->content_key] = $item->content_value;
        }

        return $groupedContent;
    }

    public function portfolio(Request $request)
    {
        // Get content for presentation
        $content = $this->getGroupedContent([
            "Portfolio",
            "Technical Services",
            "3e.portfolio.technical",
            "Production Technologies",
            "3e.portfolio.industrial_technologies",
            "Products",
            "3e.portfolio.products",
            "Assembly And Transport",
            "3e.portfolio.assembly_and_transport",
        ]);

        return view("admin.portfolio", compact("content"));
    }

    public function references(Request $request)
    {
        // Get content for references
        $content = $this->getGroupedContent([
            "Decorative Sculptures",
            "Stainless steel - AISI 304, Scotch-Brite finishin pasivited surface",
            "Stainless steel construction",
            "Europallets, special equipment for pharmaceutical industry.",
            "Construction steel projects",
            "Fences, stairs and roofs",
            "Our projects",
            "See our latest projects",
            "See more"
        ]);

        return view("admin.references", compact("content"));
    }

    public function contactUs(Request $request)
    {
        $content = $this->getGroupedContent([
            "Contact Us",
            "We will be glad to hear from you.",
            "3e.contact-us.info",
            "Address",
            "Subject",
            "Name",
            "Message",
            "Submit",
        ]);

        return view("admin.contact-us", compact("content"));
    }

    public function updateContent(Request $request)
    {
        try {
            $content = Content::where("content_key", $request->input("content_key"))->whereLanguage(
                $request->input("language")
            )->firstOrNew();
            $content->language = $request->input("language");
            $content->content_key = $request->input("content_key");
            $content->content_value = $request->input("content_value");
            $content->save();

            return redirect()->back()->with("success", "Content [" . $request->input("content_key") . "] updated.");
        } catch (Throwable $e) {
            return redirect()->back()->with("error", "Error updating the content [" . $request->input("content_key") . "].");
        }
    }

}
