<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ContactMessage;

class AdminPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectsCount = Project::count();
        $messagesCount = ContactMessage::count();
        $unreadMessagesCount = ContactMessage::unread()->count();
        $recentProjects = Project::latest()->take(5)->get();
        $recentMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.portfolio.dashboard', compact(
            'projectsCount',
            'messagesCount', 
            'unreadMessagesCount',
            'recentProjects',
            'recentMessages'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function projects()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.portfolio.projects.index', compact('projects'));
    }

    public function createProject()
    {
        return view('admin.portfolio.projects.create');
    }

    public function storeProject(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'required|array',
            'github_url' => 'nullable|url',
            'demo_url' => 'nullable|url',
            'image_url' => 'nullable|url',
            'gradient_class' => 'required|string',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        Project::create($validated);

        return redirect()->route('admin.portfolio.projects')
            ->with('success', 'Projet créé avec succès!');
    }

    public function editProject(Project $project)
    {
        return view('admin.portfolio.projects.edit', compact('project'));
    }

    public function updateProject(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'required|array',
            'github_url' => 'nullable|url',
            'demo_url' => 'nullable|url',
            'image_url' => 'nullable|url',
            'gradient_class' => 'required|string',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $project->update($validated);

        return redirect()->route('admin.portfolio.projects')
            ->with('success', 'Projet mis à jour avec succès!');
    }

    public function destroyProject(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.portfolio.projects')
            ->with('success', 'Projet supprimé avec succès!');
    }

    public function messages()
    {
        $messages = ContactMessage::latest()->paginate(10);
        return view('admin.portfolio.messages.index', compact('messages'));
    }

    public function showMessage(ContactMessage $message)
    {
        $message->markAsRead();
        return view('admin.portfolio.messages.show', compact('message'));
    }

    public function destroyMessage(ContactMessage $message)
    {
        $message->delete();

        return redirect()->route('admin.portfolio.messages')
            ->with('success', 'Message supprimé avec succès!');
    }
}
