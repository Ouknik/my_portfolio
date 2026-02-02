<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 p-6 rounded-xl shadow-xl">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-bold text-3xl text-white leading-tight flex items-center">
                        <svg class="w-10 h-10 mr-3 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Dashboard Portfolio
                    </h2>
                    <p class="text-blue-100 mt-2 text-lg">Bienvenue {{ Auth::user()->name }}, gérez votre présence digitale professionnelle</p>
                </div>
                <div class="hidden md:block">
                    <div class="text-right text-white">
                        <p class="text-sm opacity-75">Dernière connexion</p>
                        <p class="font-semibold">{{ now()->format('d/m/Y à H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .glass-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        
        .gradient-border {
            background: linear-gradient(45deg, #667eea, #764ba2, #f093fb, #f5576c);
            padding: 3px;
            border-radius: 16px;
        }
        
        .gradient-border-inner {
            background: white;
            border-radius: 13px;
        }
        
        .dark .gradient-border-inner {
            background: #1f2937;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
            50% { box-shadow: 0 0 30px rgba(59, 130, 246, 0.6); }
        }
        
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        .hover-lift {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .hover-lift:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .stat-card {
            background: linear-gradient(135deg, rgba(255,255,255,0.15) 0%, rgba(255,255,255,0.08) 100%);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.15);
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.1) 100%);
            transform: translateY(-5px);
        }
        
        .progress-bar {
            background: linear-gradient(90deg, #3b82f6, #8b5cf6, #ec4899);
            height: 6px;
            border-radius: 3px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #fbbf24, #f59e0b);
            border-radius: 3px;
            transition: width 2s ease-in-out;
        }
        
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .slide-in {
            animation: slideIn 0.6s ease-out forwards;
        }
        
        .notification-badge {
            background: linear-gradient(45deg, #ef4444, #f97316);
            animation: pulse-glow 2s ease-in-out infinite;
        }
    </style>

    <div class="py-8 bg-gradient-to-br from-slate-50 via-blue-50 to-purple-50 dark:from-gray-900 dark:via-blue-900 dark:to-purple-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Header Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="stat-card p-6 rounded-xl hover-lift slide-in">
                    <div class="flex items-center">
                        <div class="p-4 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-1">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-300">Vues Portfolio</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $portfolioViews ?? '1,234' }}</p>
                            <div class="progress-bar mt-2">
                                <div class="progress-fill" style="width: 75%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card p-6 rounded-xl hover-lift slide-in" style="animation-delay: 0.1s;">
                    <div class="flex items-center">
                        <div class="p-4 bg-gradient-to-br from-green-500 to-green-600 rounded-full shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-1">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-300">Projets</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $projectsCount ?? 5 }}</p>
                            <p class="text-xs text-green-600 font-medium mt-1">+2 ce mois</p>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card p-6 rounded-xl hover-lift slide-in" style="animation-delay: 0.2s;">
                    <div class="flex items-center">
                        <div class="p-4 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full shadow-lg relative">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            @if(($unreadMessagesCount ?? 0) > 0)
                            <span class="notification-badge absolute -top-2 -right-2 w-5 h-5 text-xs text-white rounded-full flex items-center justify-center">
                                {{ $unreadMessagesCount }}
                            </span>
                            @endif
                        </div>
                        <div class="ml-4 flex-1">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-300">Messages</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $messagesCount ?? 12 }}</p>
                            @if(($unreadMessagesCount ?? 0) > 0)
                            <p class="text-xs text-purple-600 font-medium mt-1">{{ $unreadMessagesCount }} non lus</p>
                            @endif
                        </div>
                    </div>
                </div>
                
                <div class="stat-card p-6 rounded-xl hover-lift slide-in" style="animation-delay: 0.3s;">
                    <div class="flex items-center">
                        <div class="p-4 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="ml-4 flex-1">
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-300">Performance</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $performanceScore ?? 98 }}%</p>
                            <div class="progress-bar mt-2">
                                <div class="progress-fill" style="width: {{ $performanceScore ?? 98 }}%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Actions principales -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Carte de bienvenue -->
                    <div class="glass-card dark:bg-gray-800/50 overflow-hidden shadow-2xl rounded-2xl p-8 border border-white/20 slide-in">
                        <div class="mb-8">
                            <h3 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4 flex items-center">
                                <span class="text-4xl mr-3">🚀</span>
                                Bienvenue sur votre Portfolio Dashboard
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 text-lg">Contrôlez et optimisez votre présence digitale professionnelle depuis cette interface moderne.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Lien vers le portfolio public -->
                            <div class="gradient-border hover-lift float-animation pulse-glow">
                                <a href="{{ route('portfolio.home') }}" class="gradient-border-inner p-6 rounded-lg block group">
                                    <div class="flex items-center">
                                        <div class="p-4 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl mr-4 group-hover:scale-110 transition-transform">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0 9c-5 0-9-4-9-9s4-9 9-9"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 transition-colors">Voir le Portfolio</h4>
                                            <p class="text-gray-600 dark:text-gray-300">Site public en ligne</p>
                                            <span class="text-sm text-blue-600 font-medium">Cliquez pour visiter →</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Gestion des projets -->
                            <div class="gradient-border hover-lift float-animation" style="animation-delay: 0.5s;">
                                <a href="{{ route('admin.portfolio.projects') }}" class="gradient-border-inner p-6 rounded-lg block group">
                                    <div class="flex items-center">
                                        <div class="p-4 bg-gradient-to-r from-green-500 to-green-600 rounded-xl mr-4 group-hover:scale-110 transition-transform">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-green-600 transition-colors">Gérer les Projets</h4>
                                            <p class="text-gray-600 dark:text-gray-300">Ajouter/Modifier vos créations</p>
                                            <span class="text-sm text-green-600 font-medium">{{ $projectsCount ?? 0 }} projets →</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Messages de contact -->
                            <div class="gradient-border hover-lift float-animation" style="animation-delay: 1s;">
                                <a href="{{ route('admin.portfolio.messages') }}" class="gradient-border-inner p-6 rounded-lg block group relative">
                                    @if(($unreadMessagesCount ?? 0) > 0)
                                    <div class="absolute -top-2 -right-2 notification-badge w-6 h-6 text-xs text-white rounded-full flex items-center justify-center">
                                        {{ $unreadMessagesCount }}
                                    </div>
                                    @endif
                                    <div class="flex items-center">
                                        <div class="p-4 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl mr-4 group-hover:scale-110 transition-transform">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-purple-600 transition-colors">Messages Reçus</h4>
                                            <p class="text-gray-600 dark:text-gray-300">Contacts et opportunités</p>
                                            <span class="text-sm text-purple-600 font-medium">
                                                {{ $messagesCount ?? 0 }} messages 
                                                @if(($unreadMessagesCount ?? 0) > 0)
                                                    ({{ $unreadMessagesCount }} nouveaux)
                                                @endif
                                                →
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Ajouter un projet -->
                            <div class="gradient-border hover-lift float-animation" style="animation-delay: 1.5s;">
                                <a href="{{ route('admin.portfolio.projects.create') }}" class="gradient-border-inner p-6 rounded-lg block group">
                                    <div class="flex items-center">
                                        <div class="p-4 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl mr-4 group-hover:scale-110 transition-transform">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-orange-600 transition-colors">Nouveau Projet</h4>
                                            <p class="text-gray-600 dark:text-gray-300">Ajouter une création</p>
                                            <span class="text-sm text-orange-600 font-medium">Créer maintenant →</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Projets récents -->
                    @if(isset($recentProjects) && $recentProjects->count() > 0)
                    <div class="glass-card dark:bg-gray-800/50 p-6 rounded-2xl border border-white/20 slide-in" style="animation-delay: 0.4s;">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-6 flex items-center">
                            <span class="text-2xl mr-2">📁</span>
                            Projets récents
                        </h4>
                        <div class="space-y-3">
                            @foreach($recentProjects->take(3) as $project)
                            <div class="flex items-center p-3 bg-white/10 dark:bg-gray-700/30 rounded-lg hover:bg-white/20 transition-colors">
                                <div class="p-2 bg-blue-500 rounded-lg mr-3">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-medium text-gray-900 dark:text-white">{{ $project->title }}</h5>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">{{ Str::limit($project->description, 50) }}</p>
                                </div>
                                <span class="text-xs text-gray-500 dark:text-gray-400">{{ $project->created_at->diffForHumans() }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Sidebar avec informations -->
                <div class="space-y-6">
                    <!-- Messages récents -->
                    @if(isset($recentMessages) && $recentMessages->count() > 0)
                    <div class="glass-card dark:bg-gray-800/50 p-6 rounded-2xl border border-white/20 slide-in" style="animation-delay: 0.5s;">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-6 flex items-center">
                            <span class="text-2xl mr-2">💬</span>
                            Messages récents
                            @if(($unreadMessagesCount ?? 0) > 0)
                            <span class="notification-badge ml-auto w-6 h-6 text-xs text-white rounded-full flex items-center justify-center">
                                {{ $unreadMessagesCount }}
                            </span>
                            @endif
                        </h4>
                        <div class="space-y-3">
                            @foreach($recentMessages->take(3) as $message)
                            <div class="p-3 bg-white/10 dark:bg-gray-700/30 rounded-lg hover:bg-white/20 transition-colors">
                                <div class="flex items-start">
                                    <div class="p-2 bg-purple-500 rounded-full mr-3 mt-1">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h5 class="font-medium text-gray-900 dark:text-white text-sm">{{ $message->name }}</h5>
                                        <p class="text-xs text-gray-600 dark:text-gray-300">{{ Str::limit($message->message, 40) }}</p>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">{{ $message->created_at->diffForHumans() }}</span>
                                    </div>
                                    @if(!$message->is_read)
                                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a href="{{ route('admin.portfolio.messages') }}" class="block mt-4 text-center text-blue-600 hover:text-blue-800 dark:text-blue-400 font-medium text-sm">
                            Voir tous les messages →
                        </a>
                    </div>
                    @endif

                    <!-- Prochaines étapes -->
                    <div class="glass-card dark:bg-gray-800/50 p-6 rounded-2xl border border-white/20 slide-in" style="animation-delay: 0.6s;">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-6 flex items-center">
                            <span class="text-2xl mr-2">✨</span>
                            Prochaines étapes
                        </h4>
                        <div class="space-y-4">
                            <div class="flex items-center p-3 bg-green-50 dark:bg-green-900/20 rounded-lg">
                                <svg class="w-5 h-5 mr-3 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-green-700 dark:text-green-300 font-medium text-sm">Portfolio créé avec succès</span>
                            </div>
                            
                            <div class="flex items-center p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-blue-700 dark:text-blue-300 font-medium text-sm">Ajouter vos vrais projets</span>
                            </div>
                            
                            <div class="flex items-center p-3 bg-purple-50 dark:bg-purple-900/20 rounded-lg">
                                <svg class="w-5 h-5 mr-3 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-purple-700 dark:text-purple-300 font-medium text-sm">Personnaliser les informations</span>
                            </div>
                            
                            <div class="flex items-center p-3 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg">
                                <svg class="w-5 h-5 mr-3 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-yellow-700 dark:text-yellow-300 font-medium text-sm">Ajouter votre CV</span>
                            </div>
                        </div>
                    </div>

                    <!-- Conseil du jour -->
                    <div class="glass-card dark:bg-gray-800/50 p-6 rounded-2xl border border-white/20 slide-in" style="animation-delay: 0.7s;">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4 flex items-center">
                            <span class="text-2xl mr-2">💡</span>
                            Conseil du jour
                        </h4>
                        <div class="bg-gradient-to-r from-blue-500/10 to-purple-500/10 p-4 rounded-lg">
                            <p class="text-gray-700 dark:text-gray-300 italic text-sm">
                                "Un portfolio régulièrement mis à jour attire 3x plus d'opportunités professionnelles."
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                                - Étude LinkedIn 2024
                            </p>
                        </div>
                    </div>

                    <!-- Raccourcis utiles -->
                    <div class="glass-card dark:bg-gray-800/50 p-6 rounded-2xl border border-white/20 slide-in" style="animation-delay: 0.8s;">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4 flex items-center">
                            <span class="text-2xl mr-2">⚡</span>
                            Raccourcis
                        </h4>
                        <div class="space-y-2">
                            <a href="{{ route('admin.portfolio.projects.create') }}" class="flex items-center p-2 text-blue-600 hover:text-blue-800 dark:text-blue-400 font-medium text-sm rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Nouveau projet
                            </a>
                            <a href="{{ route('portfolio.home') }}" target="_blank" class="flex items-center p-2 text-blue-600 hover:text-blue-800 dark:text-blue-400 font-medium text-sm rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                                Voir le site
                            </a>
                            <a href="{{ route('admin.portfolio.messages') }}" class="flex items-center p-2 text-blue-600 hover:text-blue-800 dark:text-blue-400 font-medium text-sm rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Voir messages
                                @if(($unreadMessagesCount ?? 0) > 0)
                                <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">{{ $unreadMessagesCount }}</span>
                                @endif
                            </a>
                        </div>
                    </div>

                    <!-- Support -->
                    <div class="glass-card dark:bg-gray-800/50 p-6 rounded-2xl border border-white/20 slide-in" style="animation-delay: 0.9s;">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4 flex items-center">
                            <span class="text-2xl mr-2">🔧</span>
                            Support
                        </h4>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm">
                            Besoin d'aide ? Consultez notre documentation ou contactez le support.
                        </p>
                        <div class="space-y-2">
                            <a href="#" class="flex items-center p-2 text-blue-600 hover:text-blue-800 dark:text-blue-400 font-medium text-sm rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                                <span class="mr-2">📚</span>
                                Documentation
                            </a>
                            <a href="#" class="flex items-center p-2 text-blue-600 hover:text-blue-800 dark:text-blue-400 font-medium text-sm rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                                <span class="mr-2">💬</span>
                                Support Chat
                            </a>
                            <a href="mailto:support@portfolio.com" class="flex items-center p-2 text-blue-600 hover:text-blue-800 dark:text-blue-400 font-medium text-sm rounded-lg hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                                <span class="mr-2">📧</span>
                                Contact Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation des barres de progression
            const progressBars = document.querySelectorAll('.progress-fill');
            
            setTimeout(() => {
                progressBars.forEach(bar => {
                    const width = bar.style.width;
                    bar.style.width = '0%';
                    setTimeout(() => {
                        bar.style.width = width;
                    }, 100);
                });
            }, 500);

            // Animation d'apparition des cartes
            const cards = document.querySelectorAll('.slide-in');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            });

            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                observer.observe(card);
            });

            // Effet de survol amélioré pour les cartes stat
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px) scale(1.02)';
                    this.style.boxShadow = '0 25px 50px rgba(0, 0, 0, 0.15)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                    this.style.boxShadow = '';
                });
            });

            // Animation des badges de notification
            const notificationBadges = document.querySelectorAll('.notification-badge');
            notificationBadges.forEach(badge => {
                setInterval(() => {
                    badge.style.transform = 'scale(1.1)';
                    setTimeout(() => {
                        badge.style.transform = 'scale(1)';
                    }, 200);
                }, 2000);
            });

            // Messages de bienvenue dynamiques
            const welcomeMessages = [
                "Excellent travail ! Votre portfolio prend forme.",
                "Continuez comme ça ! Votre présence en ligne s'améliore.",
                "Bravo ! Vous construisez un portfolio professionnel.",
                "Fantastique ! Votre marque personnelle se développe."
            ];

            // Tooltips interactifs
            const tooltipElements = document.querySelectorAll('[data-tooltip]');
            tooltipElements.forEach(element => {
                element.addEventListener('mouseenter', function(e) {
                    const tooltip = document.createElement('div');
                    tooltip.className = 'absolute bg-gray-800 text-white text-xs px-2 py-1 rounded shadow-lg z-50';
                    tooltip.textContent = this.getAttribute('data-tooltip');
                    tooltip.style.top = e.target.offsetTop - 30 + 'px';
                    tooltip.style.left = e.target.offsetLeft + 'px';
                    document.body.appendChild(tooltip);
                    
                    this.addEventListener('mouseleave', function() {
                        if (tooltip.parentNode) {
                            tooltip.parentNode.removeChild(tooltip);
                        }
                    });
                });
            });

            // Actualisation automatique des statistiques (simulation)
            setInterval(() => {
                const viewsElement = document.querySelector('.stat-card:first-child .text-3xl');
                if (viewsElement) {
                    let currentViews = parseInt(viewsElement.textContent.replace(/,/g, ''));
                    let newViews = currentViews + Math.floor(Math.random() * 5);
                    viewsElement.textContent = newViews.toLocaleString();
                }
            }, 30000); // Toutes les 30 secondes

            // Animation de typing pour le titre
            const title = document.querySelector('h2');
            if (title) {
                const originalText = title.textContent;
                title.textContent = '';
                let i = 0;
                
                const typeEffect = setInterval(() => {
                    if (i < originalText.length) {
                        title.textContent += originalText.charAt(i);
                        i++;
                    } else {
                        clearInterval(typeEffect);
                    }
                }, 100);
            }
        });
    </script>
</x-app-layout>
