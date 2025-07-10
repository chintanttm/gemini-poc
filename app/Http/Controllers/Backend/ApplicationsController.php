<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function App()
    {
        return view('backend.applications.app');
    }
    public function calendarIndex()
    {
        return view('backend.applications.app-calendar');
    }

    public function calendarTuiIndex()
    {
        return view('backend.applications.app-calendar-tui');
    }

    public function EmailIndex()
    {
        return view('backend.applications.app-email');
    }

    public function ComposeEmailIndex()
    {
        return view('backend.applications.app-email-compose');
    }

    public function EmailDetailIndex()
    {
        return view('backend.applications.app-email-detail');
    }

    public function ChatIndex()
    {
        return view('backend.applications.app-chat');
    }

    public function CampaignsIndex()
    {
        return view('backend.applications.app-campaigns');
    }

    public function SocialIndex()
    {
        return view('backend.applications.app-social');
    }

    public function FileManagerIndex()
    {
        return view('backend.applications.app-file-manager');
    }

    public function TodolistIndex()
    {
        return view('backend.applications.app-todo');
    }

    public function ContactsIndex()
    {
        return view('backend.applications.app-contacts');
    }

    public function TasksIndex()
    {
        return view('backend.applications.app-tasks');
    }

    public function ProjectIndex()
    {
        return view('backend.applications.app-project');
    }

    public function ProjectDetailIndex()
    {
        return view('backend.applications.app-project-detail');
    }

    public function JkanbanIndex()
    {
        return view('backend.applications.app-jkanban');
    }

    public function BlogIndex()
    {
        return view('backend.applications.app-blog');
    }

    public function BlogDetailIndex()
    {
        return view('backend.applications.app-blog-detail');
    }

    public function BlogPostIndex()
    {
        return view('backend.applications.app-blog-post');
    }

    function chatAI(Request $request) {
        $apiKey = "AIzaSyAjjVbqPD6nWvG68xemqC9dIcpg8xfadM0";
        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key={$apiKey}";
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post($url, [
            'contents' => [
                [
                    'parts' => [
                        ['text' => 'How to work recaptcha']
                    ]
                ]
            ]
        ]);

        return response()->json([
            'response' => $response->json()
        ]);
    }
}
