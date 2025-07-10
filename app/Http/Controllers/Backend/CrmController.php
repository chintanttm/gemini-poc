<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrmController extends Controller
{
    public function index()
    {
        return view('backend.crm.index');
    }
    public function cryptocurrency()
    {
        return view('backend.unique.unique-cryptocurrency');
    }
    // public function eCommerce()
    // {
    //     return view('backend.unique.unique-ecommerce');
    // }
    public function eventManagement()
    {
        return view('backend.unique.unique-event-management');
    }
    public function fitnessAnalytics()
    {
        return view('backend.unique.unique-fitness-analytics');
    }
    public function hospitalManagement()
    {
        return view('backend.unique.hospital-management');
    }
    public function hrAndProject()
    {
        return view('backend.unique.hr-and-project');
    }
    public function inventoryManagement()
    {
        return view('backend.unique.inventory-management');
    }
    public function jobPortal()
    {
        return view('backend.unique.job-portal');
    }
    public function musicStreaming()
    {
        return view('backend.unique.music-streaming');
    }
    public function nftDashboard()
    {
        return view('backend.unique.nft-dashboard');
    }
    public function realEstate()
    {
        return view('backend.unique.real-estate');
    }
    public function restaurantAndCafe()
    {
        return view('backend.unique.restaurant-and-cafe');
    }
    public function serverAnalysis()
    {
        return view('backend.unique.server-analysis');
    }
    public function schoolUnivercity()
    {
        return view('backend.unique.school-univercity');
    }
    public function analytics()
    {
        return view('backend.crm-dashboard.analytics');
    }
    public function leads()
    {
        return view('backend.crm-dashboard.leads');
    }
    public function customers()
    {
        return view('backend.crm-dashboard.customers');
    }
    public function vendors()
    {
        return view('backend.crm-dashboard.vendors');
    }
    public function project()
    {
        return view('backend.crm-dashboard.project');
    }
    public function activities()
    {
        return view('backend.crm-dashboard.activities');
    }
}
