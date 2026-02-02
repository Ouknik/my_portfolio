<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Project;
use App\Models\ContactMessage;

class PortfolioController extends Controller
{
    public function index()
    {
        // Récupérer les projets depuis la base de données ou utiliser des données par défaut
        $projects = Project::active()->ordered()->get();
        
        // Si aucun projet en base, utiliser des données par défaut
        if ($projects->isEmpty()) {
            $projects = collect([
                (object)[
                    'title' => 'WhatsOTP',
                    'description' => 'OTP verification service via WhatsApp - A secure and reliable way to verify users through WhatsApp messages.',
                    'technologies' => ['PHP', 'MySQL', 'WhatsApp API', 'Bootstrap'],
                    'github_url' => '#',
                    'demo_url' => 'https://whatsotp.me/',
                    'gradient_class' => 'from-green-500 to-emerald-600'
                ],
                (object)[
                    'title' => 'Madrasati',
                    'description' => 'School management platform - Comprehensive solution for schools to manage students, teachers, and academic activities.',
                    'technologies' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap'],
                    'github_url' => '#',
                    'demo_url' => 'https://madrasati.me/',
                    'gradient_class' => 'from-blue-500 to-indigo-600'
                ],
                (object)[
                    'title' => 'E.soussi Store',
                    'description' => 'E-commerce platform - Modern online store with product management, shopping cart, and secure payment integration.',
                    'technologies' => ['PHP', 'MySQL', 'Bootstrap', 'JavaScript'],
                    'github_url' => '#',
                    'demo_url' => 'https://e.soussi.store/',
                    'gradient_class' => 'from-purple-500 to-pink-600'
                ],
                (object)[
                    'title' => 'UCA Student',
                    'description' => 'University student portal for Cadi Ayyad University - Centralized platform for student services and academic information.',
                    'technologies' => ['PHP', 'Laravel', 'MySQL', 'Tailwind CSS'],
                    'github_url' => '#',
                    'demo_url' => 'https://ucastudent.uca.ma/',
                    'gradient_class' => 'from-orange-500 to-red-600'
                ]
            ]);
        }

        $skills = [
            'frontend' => [
                'title' => 'Frontend',
                'skills' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'Materialize CSS'],
                'icon' => 'frontend'
            ],
            'backend' => [
                'title' => 'Backend',
                'skills' => ['PHP', 'Go (Golang)', 'Python', 'Laravel'],
                'icon' => 'backend'
            ],
            'mobile' => [
                'title' => 'Mobile',
                'skills' => ['Flutter', 'Dart', 'Java', 'Android'],
                'icon' => 'mobile'
            ],
            'databases' => [
                'title' => 'Databases',
                'skills' => ['MySQL', 'SQLite', 'Firebase', 'Hive'],
                'icon' => 'database'
            ],
            'tools' => [
                'title' => 'Tools',
                'skills' => ['Git', 'Postman', 'i18n', 'WordPress'],
                'icon' => 'tools'
            ],
            'os' => [
                'title' => 'Operating Systems',
                'skills' => ['Linux', 'Windows'],
                'icon' => 'os'
            ]
        ];

        return view('portfolio.welcome', compact('projects', 'skills'));
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Sauvegarder le message en base de données
        ContactMessage::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Message envoyé avec succès ! Je vous répondrai rapidement.'
        ]);
    }

    public function downloadCV()
    {
        $pathToFile = storage_path('app/public/cv-abdellah-ouknik.pdf');
        
        if (file_exists($pathToFile)) {
            return response()->download($pathToFile, 'CV-Abdellah-Ouknik.pdf');
        }
        
        return redirect()->back()->with('error', 'CV non disponible pour le moment.');
    }
}
