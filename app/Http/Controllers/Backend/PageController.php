<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function CraftedPage()
    {
        return view('backend.page.crafted-page');
    }

    public function ProfileIndex()
    {
        return view('backend.page.page-profile');
    }

    public function BookmarkIndex()
    {
        return view('backend.page.page-bookmark');
    }

    public function TimelineIndex()
    {
        return view('backend.page.page-timeline');
    }

    public function ImagegalleryIndex()
    {
        return view('backend.page.page-imagegallery');
    }

    public function PricingIndex()
    {
        return view('backend.page.page-pricing');
    }

    public function TeamsboardIndex()
    {
        return view('backend.page.page-teamsboard');
    }

    public function SupportTicketIndex()
    {
        return view('backend.page.page-support-ticket');
    }

    public function FaqsIndex()
    {
        return view('backend.page.page-faqs');
    }

    public function SearchIndex()
    {
        return view('backend.page.page-search');
    }

    public function FooterIndex()
    {
        return view('backend.page.page-footers');
    }
}
