<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'Une plateforme e-commerce moderne et responsive développée avec Laravel et Vue.js, incluant un système de paiement intégré, gestion d\'inventaire en temps réel et tableau de bord administrateur complet.',
                'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS', 'MySQL', 'Stripe'],
                'github_url' => 'https://github.com/aminedaaboub/ecommerce-platform',
                'demo_url' => 'https://demo-ecommerce.aminedaaboub.com',
                'image_url' => null,
                'gradient_class' => 'from-blue-500 to-purple-600',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Task Management App',
                'description' => 'Application de gestion de tâches collaborative avec fonctionnalités de temps réel, drag & drop, système de notifications et intégration avec les calendriers populaires.',
                'technologies' => ['React', 'Node.js', 'Socket.io', 'MongoDB', 'Express'],
                'github_url' => 'https://github.com/aminedaaboub/task-manager',
                'demo_url' => 'https://tasks.aminedaaboub.com',
                'image_url' => null,
                'gradient_class' => 'from-green-500 to-teal-600',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Portfolio CMS',
                'description' => 'Système de gestion de contenu spécialement conçu pour les portfolios créatifs, avec éditeur visuel, optimisation SEO automatique et déploiement en un clic.',
                'technologies' => ['Laravel', 'Livewire', 'AlpineJS', 'PostgreSQL', 'AWS'],
                'github_url' => 'https://github.com/aminedaaboub/portfolio-cms',
                'demo_url' => 'https://cms-demo.aminedaaboub.com',
                'image_url' => null,
                'gradient_class' => 'from-purple-500 to-pink-600',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'AI Chat Assistant',
                'description' => 'Assistant conversationnel intelligent intégrant l\'API OpenAI, avec interface chat moderne, historique des conversations et personnalisation avancée.',
                'technologies' => ['Next.js', 'TypeScript', 'OpenAI API', 'Prisma', 'Vercel'],
                'github_url' => 'https://github.com/aminedaaboub/ai-chat-assistant',
                'demo_url' => 'https://ai-chat.aminedaaboub.com',
                'image_url' => null,
                'gradient_class' => 'from-indigo-500 to-cyan-600',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Finance Tracker',
                'description' => 'Application mobile de suivi des finances personnelles avec synchronisation bancaire, analyses prédictives et conseils personnalisés basés sur l\'IA.',
                'technologies' => ['React Native', 'Firebase', 'Chart.js', 'Plaid API', 'Redux'],
                'github_url' => 'https://github.com/aminedaaboub/finance-tracker',
                'demo_url' => 'https://finance.aminedaaboub.com',
                'image_url' => null,
                'gradient_class' => 'from-orange-500 to-red-600',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Social Learning Platform',
                'description' => 'Plateforme d\'apprentissage social gamifiée avec cours interactifs, système de badges, forums de discussion et suivi de progression avancé.',
                'technologies' => ['Laravel', 'React', 'WebRTC', 'Redis', 'Docker'],
                'github_url' => 'https://github.com/aminedaaboub/learning-platform',
                'demo_url' => 'https://learn.aminedaaboub.com',
                'image_url' => null,
                'gradient_class' => 'from-emerald-500 to-blue-600',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
