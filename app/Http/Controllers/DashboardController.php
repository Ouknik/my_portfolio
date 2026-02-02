<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    /**
     * Display the dashboard with statistics
     */
    public function index()
    {
        $projectsCount = Project::count();
        $messagesCount = ContactMessage::count();
        $unreadMessagesCount = ContactMessage::where('is_read', false)->count();
        $recentProjects = Project::latest()->take(3)->get();
        $recentMessages = ContactMessage::latest()->take(5)->get();

        // Fake analytics data (you can replace with real analytics)
        $portfolioViews = 1234;
        $performanceScore = 98;

        return view('dashboard', compact(
            'projectsCount',
            'messagesCount', 
            'unreadMessagesCount',
            'recentProjects',
            'recentMessages',
            'portfolioViews',
            'performanceScore'
        ));
    }
}
