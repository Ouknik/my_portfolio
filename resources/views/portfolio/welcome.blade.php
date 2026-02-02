<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- SEO Meta Tags -->
        <title>Abdellah Ouknik - FullStack Developer | Morocco</title>
        <meta name="description" content="Abdellah Ouknik - FullStack Developer at Université Cadi Ayyad, Morocco. Specialized in PHP, Go, Flutter, and modern web technologies. Building innovative digital solutions.">
        <meta name="keywords" content="Abdellah Ouknik, FullStack Developer, Web Developer, Morocco, Laravel, Flutter, Go, PHP, University Cadi Ayyad">
        <meta name="author" content="Abdellah Ouknik">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url('/') }}">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:title" content="Abdellah Ouknik - FullStack Developer">
        <meta property="og:description" content="FullStack Developer at Université Cadi Ayyad, Morocco. Building innovative digital solutions with PHP, Go, Flutter and modern technologies.">
        <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
        <meta property="og:locale" content="en_US">
        
        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url('/') }}">
        <meta name="twitter:title" content="Abdellah Ouknik - FullStack Developer">
        <meta name="twitter:description" content="FullStack Developer at Université Cadi Ayyad, Morocco. Building innovative digital solutions.">
        <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&family=space-grotesk:400,500,600,700&display=swap" rel="stylesheet" />
        
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
                theme: {
                    extend: {
                        fontFamily: {
                            'space': ['Space Grotesk', 'sans-serif'],
                            'inter': ['Inter', 'sans-serif'],
                        },
                        colors: {
                            primary: {
                                50: '#eff6ff',
                                100: '#dbeafe',
                                200: '#bfdbfe',
                                300: '#93c5fd',
                                400: '#60a5fa',
                                500: '#3b82f6',
                                600: '#2563eb',
                                700: '#1d4ed8',
                                800: '#1e40af',
                                900: '#1e3a8a',
                            },
                            accent: '#10b981'
                        }
                    }
                }
            }
        </script>
        
        <style>
            body { 
                font-family: 'Inter', sans-serif; 
                overflow-x: hidden;
            }
            .font-space { font-family: 'Space Grotesk', sans-serif; }
            
            /* Minimal glassmorphism */
            .glass {
                background: rgba(255, 255, 255, 0.05);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
            
            /* Typography gradient - blue accent */
            .text-gradient {
                background: linear-gradient(135deg, #3b82f6 0%, #10b981 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
            
            /* Subtle animations */
            @keyframes fadeInUp {
                0% { transform: translateY(20px); opacity: 0; }
                100% { transform: translateY(0); opacity: 1; }
            }
            
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-10px); }
            }
            
            .animate-fade-up { animation: fadeInUp 0.6s ease-out forwards; }
            .animate-float { animation: float 6s ease-in-out infinite; }
            
            /* Scroll reveal */
            .reveal {
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.6s ease;
            }
            
            .reveal.active {
                opacity: 1;
                transform: translateY(0);
            }
            
            /* Subtle hover effects */
            .card-hover {
                transition: all 0.3s ease;
            }
            
            .card-hover:hover {
                transform: translateY(-5px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            }
            
            /* Custom scrollbar */
            ::-webkit-scrollbar {
                width: 6px;
            }
            
            ::-webkit-scrollbar-track {
                background: rgba(0, 0, 0, 0.1);
            }
            
            ::-webkit-scrollbar-thumb {
                background: linear-gradient(135deg, #3b82f6, #10b981);
                border-radius: 3px;
            }
            
            /* Smooth link underline */
            .link-underline {
                position: relative;
            }
            
            .link-underline::after {
                content: '';
                position: absolute;
                width: 0;
                height: 2px;
                bottom: -2px;
                left: 0;
                background: linear-gradient(90deg, #3b82f6, #10b981);
                transition: width 0.3s ease;
            }
            
            .link-underline:hover::after {
                width: 100%;
            }
        </style>
    </head>
    <body class="bg-slate-900 text-white">
        <!-- Scroll Progress Bar -->
        <div id="progress" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-blue-500 to-emerald-500 z-50 transition-all duration-150"></div>
        
        <!-- Navigation -->
        <nav class="fixed top-0 w-full glass backdrop-blur-lg border-b border-white/5 z-50" id="navbar">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <a href="#home" class="flex items-center">
                        <span class="text-xl font-bold font-space text-gradient">AO</span>
                    </a>
                    
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#home" class="nav-link text-white/70 hover:text-white transition-colors link-underline">Home</a>
                        <a href="#about" class="nav-link text-white/70 hover:text-white transition-colors link-underline">About</a>
                        <a href="#projects" class="nav-link text-white/70 hover:text-white transition-colors link-underline">Projects</a>
                        <a href="#skills" class="nav-link text-white/70 hover:text-white transition-colors link-underline">Skills</a>
                        <a href="#experience" class="nav-link text-white/70 hover:text-white transition-colors link-underline">Experience</a>
                        <a href="#contact" class="nav-link text-white/70 hover:text-white transition-colors link-underline">Contact</a>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <button class="md:hidden text-white/80 hover:text-white" id="mobile-menu-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Mobile menu -->
                <div class="md:hidden hidden" id="mobile-menu">
                    <div class="px-2 pt-2 pb-3 space-y-1 glass rounded-lg mt-2">
                        <a href="#home" class="block px-3 py-2 text-white/80 hover:text-white">Home</a>
                        <a href="#about" class="block px-3 py-2 text-white/80 hover:text-white">About</a>
                        <a href="#projects" class="block px-3 py-2 text-white/80 hover:text-white">Projects</a>
                        <a href="#skills" class="block px-3 py-2 text-white/80 hover:text-white">Skills</a>
                        <a href="#experience" class="block px-3 py-2 text-white/80 hover:text-white">Experience</a>
                        <a href="#contact" class="block px-3 py-2 text-white/80 hover:text-white">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="min-h-screen flex items-center justify-center pt-16 relative">
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
                <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
            </div>
            
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
                <div class="text-center">
                    <!-- Avatar -->
                    <div class="mb-10 reveal">
                        <div class="w-56 h-56 md:w-72 md:h-72 mx-auto relative">
                            <div class="w-full h-full rounded-full bg-gradient-to-br from-blue-500 via-purple-500 to-emerald-500 p-1.5 shadow-2xl shadow-blue-500/30 animate-pulse-slow">
                                <img src="{{ asset('images/profile.jpg') }}" alt="Abdellah Ouknik" class="w-full h-full rounded-full object-cover object-top ring-4 ring-slate-900/50">
                            </div>
                            <!-- Status indicator -->
                            <div class="absolute bottom-4 right-4 w-7 h-7 bg-emerald-500 rounded-full border-4 border-slate-900 shadow-lg shadow-emerald-500/50"></div>
                        </div>
                    </div>
                    
                    <!-- Name -->
                    <div class="reveal" style="animation-delay: 0.1s;">
                        <h1 class="text-5xl md:text-7xl font-bold mb-4 font-space">
                            <span class="text-white">Abdellah</span>
                            <span class="text-gradient"> Ouknik</span>
                        </h1>
                    </div>
                    
                    <!-- Title -->
                    <div class="reveal" style="animation-delay: 0.2s;">
                        <p class="text-xl md:text-2xl text-white/80 mb-2 font-medium">
                            FullStack Developer
                        </p>
                        <p class="text-lg text-white/60 mb-8">
                            @ Université Cadi Ayyad, Morocco
                        </p>
                    </div>
                    
                    <!-- Tagline -->
                    <div class="reveal" style="animation-delay: 0.3s;">
                        <p class="text-lg text-white/60 mb-10 max-w-2xl mx-auto leading-relaxed">
                            Transforming ideas into powerful digital experiences. I build modern web & mobile applications 
                            that solve real-world problems with clean code and elegant design.
                        </p>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="reveal flex flex-col sm:flex-row gap-4 justify-center items-center" style="animation-delay: 0.4s;">
                        <a href="#projects" class="group px-8 py-4 bg-gradient-to-r from-blue-600 to-emerald-600 rounded-full font-semibold transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/25 hover:-translate-y-0.5 flex items-center">
                            View Projects
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        
                        <a href="#contact" class="px-8 py-4 glass border border-white/20 rounded-full font-semibold transition-all duration-300 hover:bg-white/10 hover:-translate-y-0.5 flex items-center">
                            Contact Me
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="reveal flex justify-center gap-4 mt-8" style="animation-delay: 0.5s;">
                        <a href="https://github.com/Ouknik" target="_blank" rel="noopener noreferrer" class="w-12 h-12 glass rounded-full flex items-center justify-center text-white/60 hover:text-white hover:scale-110 hover:bg-white/10 transition-all" title="GitHub">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="https://ma.linkedin.com/in/abdellah-ouknik-5b439a207" target="_blank" rel="noopener noreferrer" class="w-12 h-12 glass rounded-full flex items-center justify-center text-white/60 hover:text-white hover:scale-110 hover:bg-white/10 transition-all" title="LinkedIn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="https://play.google.com/store/apps/developer?id=DeV+Step&hl=ar" target="_blank" rel="noopener noreferrer" class="w-12 h-12 glass rounded-full flex items-center justify-center text-white/60 hover:text-white hover:scale-110 hover:bg-white/10 transition-all" title="Google Play Store">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3.609 1.814L13.792 12 3.61 22.186a.996.996 0 0 1-.61-.92V2.734a1 1 0 0 1 .609-.92zm10.89 10.893l2.302 2.302-10.937 6.333 8.635-8.635zm3.199-3.198l2.807 1.626a1 1 0 0 1 0 1.73l-2.808 1.626L15.206 12l2.492-2.491zM5.864 2.658L16.8 8.99l-2.302 2.302-8.634-8.634z"/>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Scroll indicator -->
                    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 reveal" style="animation-delay: 0.5s;">
                        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                            <div class="w-1 h-3 bg-white/60 rounded-full mt-2 animate-bounce"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-24 relative">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 reveal">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4 font-space">About <span class="text-gradient">Me</span></h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-emerald-500 mx-auto"></div>
                </div>
                
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left side - Bio -->
                    <div class="reveal">
                        <div class="glass p-8 rounded-2xl">
                            <h3 class="text-2xl font-semibold mb-6 font-space text-gradient">Who I Am</h3>
                            <p class="text-white/80 mb-6 leading-relaxed">
                                I'm <strong>Abdellah Ouknik</strong>, a passionate FullStack Developer currently working at 
                                <strong>Université Cadi Ayyad</strong> in Morocco. With expertise spanning from backend systems 
                                to mobile applications, I specialize in creating robust, scalable solutions.
                            </p>
                            <p class="text-white/80 mb-6 leading-relaxed">
                                My journey in software development has led me to work with diverse technologies including 
                                <strong>PHP, Go (Golang), Python, Flutter</strong>, and modern web frameworks. I'm driven by 
                                the challenge of turning complex problems into simple, elegant solutions.
                            </p>
                            
                            <!-- Languages -->
                            <div class="mt-8">
                                <h4 class="text-lg font-semibold mb-4 text-white/90">Languages</h4>
                                <div class="flex flex-wrap gap-3">
                                    <span class="glass px-4 py-2 rounded-full text-sm border border-emerald-500/30 text-emerald-300">ⵜⴰⵎⴰⵣⵉⵖⵜ Tamazight (Native)</span>
                                    <span class="glass px-4 py-2 rounded-full text-sm border border-blue-500/30 text-blue-300">العربية Arabic (Native)</span>
                                    <span class="glass px-4 py-2 rounded-full text-sm border border-purple-500/30 text-purple-300">English (Intermediate)</span>
                                    <span class="glass px-4 py-2 rounded-full text-sm border border-pink-500/30 text-pink-300">Français (Basic)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right side - Quick Stats -->
                    <div class="reveal" style="animation-delay: 0.2s;">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="glass p-6 rounded-2xl text-center card-hover">
                                <div class="text-3xl font-bold text-blue-400 mb-2">5+</div>
                                <div class="text-white/70 text-sm">Years Experience</div>
                            </div>
                            <div class="glass p-6 rounded-2xl text-center card-hover">
                                <div class="text-3xl font-bold text-emerald-400 mb-2">20+</div>
                                <div class="text-white/70 text-sm">Projects Completed</div>
                            </div>
                            <div class="glass p-6 rounded-2xl text-center card-hover">
                                <div class="text-3xl font-bold text-purple-400 mb-2">10+</div>
                                <div class="text-white/70 text-sm">Technologies</div>
                            </div>
                            <div class="glass p-6 rounded-2xl text-center card-hover">
                                <div class="text-3xl font-bold text-pink-400 mb-2">∞</div>
                                <div class="text-white/70 text-sm">Learning Spirit</div>
                            </div>
                        </div>
                        
                        <!-- Location card -->
                        <div class="glass p-6 rounded-2xl mt-4 card-hover">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-green-500 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-xl">🇲🇦</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-white">Based in Morocco</h4>
                                    <p class="text-white/60 text-sm">Open to remote opportunities worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Projects Section -->
        <section id="projects" class="py-24 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-blue-500/5 to-transparent"></div>
            
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-16 reveal">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4 font-space">Featured <span class="text-gradient">Projects</span></h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-emerald-500 mx-auto mb-6"></div>
                    <p class="text-white/60 max-w-2xl mx-auto">Real-world applications I've built that are making an impact</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Project 1: WhatsOTP -->
                    <div class="reveal card-hover">
                        <div class="glass rounded-2xl overflow-hidden border border-white/10 group">
                            <div class="h-48 bg-gradient-to-br from-green-500 to-emerald-600 relative overflow-hidden flex items-center justify-center">
                                <span class="text-6xl">📱</span>
                                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-3 font-space text-white">WhatsOTP</h3>
                                <p class="text-white/70 mb-4 leading-relaxed">
                                    OTP verification service using WhatsApp for apps and websites. Secure, fast, and reliable authentication solution.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="text-xs px-3 py-1 bg-green-500/20 text-green-300 rounded-full">API</span>
                                    <span class="text-xs px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full">Backend</span>
                                    <span class="text-xs px-3 py-1 bg-purple-500/20 text-purple-300 rounded-full">Web</span>
                                </div>
                                <a href="https://whatsotp.me/" target="_blank" class="inline-flex items-center text-emerald-400 hover:text-emerald-300 transition-colors font-medium">
                                    Visit Project
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Project 2: Madrasati -->
                    <div class="reveal card-hover" style="animation-delay: 0.1s;">
                        <div class="glass rounded-2xl overflow-hidden border border-white/10 group">
                            <div class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 relative overflow-hidden flex items-center justify-center">
                                <span class="text-6xl">🎓</span>
                                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-3 font-space text-white">Madrasati</h3>
                                <p class="text-white/70 mb-4 leading-relaxed">
                                    Complete school management platform for parents, students, and teachers. Manage absences, grades, exercises, and communication.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="text-xs px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full">Web Platform</span>
                                    <span class="text-xs px-3 py-1 bg-purple-500/20 text-purple-300 rounded-full">Education</span>
                                    <span class="text-xs px-3 py-1 bg-pink-500/20 text-pink-300 rounded-full">SaaS</span>
                                </div>
                                <a href="https://madrasati.me/" target="_blank" class="inline-flex items-center text-blue-400 hover:text-blue-300 transition-colors font-medium">
                                    Visit Project
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Project 3: E.soussi Store -->
                    <div class="reveal card-hover" style="animation-delay: 0.2s;">
                        <div class="glass rounded-2xl overflow-hidden border border-white/10 group">
                            <div class="h-48 bg-gradient-to-br from-orange-500 to-red-600 relative overflow-hidden flex items-center justify-center">
                                <span class="text-6xl">🛒</span>
                                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-3 font-space text-white">E.soussi Store</h3>
                                <p class="text-white/70 mb-4 leading-relaxed">
                                    Modern e-commerce platform for products and online ordering. Complete shopping experience with secure payments.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="text-xs px-3 py-1 bg-orange-500/20 text-orange-300 rounded-full">E-commerce</span>
                                    <span class="text-xs px-3 py-1 bg-red-500/20 text-red-300 rounded-full">Web</span>
                                    <span class="text-xs px-3 py-1 bg-yellow-500/20 text-yellow-300 rounded-full">Payments</span>
                                </div>
                                <a href="https://e.soussi.store/" target="_blank" class="inline-flex items-center text-orange-400 hover:text-orange-300 transition-colors font-medium">
                                    Visit Project
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Project 4: UCA Student -->
                    <div class="reveal card-hover" style="animation-delay: 0.3s;">
                        <div class="glass rounded-2xl overflow-hidden border border-white/10 group">
                            <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-600 relative overflow-hidden flex items-center justify-center">
                                <span class="text-6xl">🏛️</span>
                                <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-3 font-space text-white">UCA Student</h3>
                                <p class="text-white/70 mb-4 leading-relaxed">
                                    University student platform for Cadi Ayyad University. Digital services and access for students and administration.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="text-xs px-3 py-1 bg-purple-500/20 text-purple-300 rounded-full">Web Platform</span>
                                    <span class="text-xs px-3 py-1 bg-pink-500/20 text-pink-300 rounded-full">University</span>
                                    <span class="text-xs px-3 py-1 bg-indigo-500/20 text-indigo-300 rounded-full">Services</span>
                                </div>
                                <a href="https://ucastudent.uca.ma/" target="_blank" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition-colors font-medium">
                                    Visit Project
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-24 relative">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 reveal">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4 font-space">Technical <span class="text-gradient">Skills</span></h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-emerald-500 mx-auto"></div>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Frontend -->
                    <div class="reveal card-hover">
                        <div class="glass p-6 rounded-2xl border border-white/10">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h12a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-4 text-white">Frontend</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs px-3 py-1.5 bg-orange-500/20 text-orange-300 rounded-full">HTML</span>
                                <span class="text-xs px-3 py-1.5 bg-blue-500/20 text-blue-300 rounded-full">CSS</span>
                                <span class="text-xs px-3 py-1.5 bg-yellow-500/20 text-yellow-300 rounded-full">JavaScript</span>
                                <span class="text-xs px-3 py-1.5 bg-purple-500/20 text-purple-300 rounded-full">Bootstrap</span>
                                <span class="text-xs px-3 py-1.5 bg-pink-500/20 text-pink-300 rounded-full">Materialize CSS</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Backend -->
                    <div class="reveal card-hover" style="animation-delay: 0.1s;">
                        <div class="glass p-6 rounded-2xl border border-white/10">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-4 text-white">Backend</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs px-3 py-1.5 bg-indigo-500/20 text-indigo-300 rounded-full">PHP</span>
                                <span class="text-xs px-3 py-1.5 bg-cyan-500/20 text-cyan-300 rounded-full">Go (Golang)</span>
                                <span class="text-xs px-3 py-1.5 bg-green-500/20 text-green-300 rounded-full">Python</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mobile -->
                    <div class="reveal card-hover" style="animation-delay: 0.2s;">
                        <div class="glass p-6 rounded-2xl border border-white/10">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-4 text-white">Mobile</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs px-3 py-1.5 bg-blue-500/20 text-blue-300 rounded-full">Flutter (Dart)</span>
                                <span class="text-xs px-3 py-1.5 bg-orange-500/20 text-orange-300 rounded-full">Java</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Databases -->
                    <div class="reveal card-hover" style="animation-delay: 0.3s;">
                        <div class="glass p-6 rounded-2xl border border-white/10">
                            <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z"></path>
                                    <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z"></path>
                                    <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-4 text-white">Databases</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs px-3 py-1.5 bg-blue-500/20 text-blue-300 rounded-full">MySQL</span>
                                <span class="text-xs px-3 py-1.5 bg-cyan-500/20 text-cyan-300 rounded-full">SQL</span>
                                <span class="text-xs px-3 py-1.5 bg-purple-500/20 text-purple-300 rounded-full">SQLite</span>
                                <span class="text-xs px-3 py-1.5 bg-amber-500/20 text-amber-300 rounded-full">Hive</span>
                                <span class="text-xs px-3 py-1.5 bg-orange-500/20 text-orange-300 rounded-full">Firebase</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tools -->
                    <div class="reveal card-hover" style="animation-delay: 0.4s;">
                        <div class="glass p-6 rounded-2xl border border-white/10">
                            <div class="w-12 h-12 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-4 text-white">Tools</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs px-3 py-1.5 bg-gray-500/20 text-gray-300 rounded-full">Git</span>
                                <span class="text-xs px-3 py-1.5 bg-orange-500/20 text-orange-300 rounded-full">Postman</span>
                                <span class="text-xs px-3 py-1.5 bg-green-500/20 text-green-300 rounded-full">i18n</span>
                                <span class="text-xs px-3 py-1.5 bg-blue-500/20 text-blue-300 rounded-full">WordPress</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- OS -->
                    <div class="reveal card-hover" style="animation-delay: 0.5s;">
                        <div class="glass p-6 rounded-2xl border border-white/10">
                            <div class="w-12 h-12 bg-gradient-to-r from-gray-500 to-slate-500 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold mb-4 text-white">Operating Systems</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs px-3 py-1.5 bg-yellow-500/20 text-yellow-300 rounded-full">Linux</span>
                                <span class="text-xs px-3 py-1.5 bg-blue-500/20 text-blue-300 rounded-full">Windows</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="py-24 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-emerald-500/5 to-transparent"></div>
            
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-16 reveal">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4 font-space">Work <span class="text-gradient">Experience</span></h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-emerald-500 mx-auto"></div>
                </div>
                
                <div class="max-w-3xl mx-auto">
                    <div class="reveal">
                        <div class="glass p-8 rounded-2xl border border-white/10 relative overflow-hidden">
                            <!-- Decorative element -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-emerald-500/20 to-transparent rounded-full blur-2xl"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-start justify-between flex-wrap gap-4 mb-6">
                                    <div>
                                        <h3 class="text-2xl font-semibold text-white font-space">FullStack Developer</h3>
                                        <p class="text-emerald-400 font-medium text-lg">Université Cadi Ayyad</p>
                                    </div>
                                    <div class="text-right">
                                        <span class="inline-flex items-center px-4 py-2 bg-emerald-500/20 text-emerald-300 rounded-full text-sm font-medium">
                                            <span class="w-2 h-2 bg-emerald-400 rounded-full mr-2 animate-pulse"></span>
                                            Current Position
                                        </span>
                                        <p class="text-white/60 mt-2">📍 Morocco</p>
                                    </div>
                                </div>
                                
                                <p class="text-white/80 leading-relaxed mb-6">
                                    Working as a FullStack Developer at one of Morocco's largest universities, I'm responsible for 
                                    developing and maintaining critical digital platforms that serve thousands of students, faculty, 
                                    and administrative staff.
                                </p>
                                
                                <div class="space-y-3 mb-6">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-emerald-400 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-white/70">Developing and maintaining university web applications and portals</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-emerald-400 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-white/70">Building scalable backend systems with PHP, Go, and Python</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-emerald-400 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-white/70">Creating mobile applications using Flutter for student services</span>
                                    </div>
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-emerald-400 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-white/70">Collaborating with cross-functional teams to deliver digital transformation projects</span>
                                    </div>
                                </div>
                                
                                <div class="flex flex-wrap gap-2">
                                    <span class="text-xs px-3 py-1.5 bg-white/10 text-white/70 rounded-full">PHP</span>
                                    <span class="text-xs px-3 py-1.5 bg-white/10 text-white/70 rounded-full">Go</span>
                                    <span class="text-xs px-3 py-1.5 bg-white/10 text-white/70 rounded-full">Flutter</span>
                                    <span class="text-xs px-3 py-1.5 bg-white/10 text-white/70 rounded-full">MySQL</span>
                                    <span class="text-xs px-3 py-1.5 bg-white/10 text-white/70 rounded-full">Firebase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 relative">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16 reveal">
                    <h2 class="text-4xl md:text-5xl font-bold mb-4 font-space">Get In <span class="text-gradient">Touch</span></h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-emerald-500 mx-auto mb-6"></div>
                    <p class="text-white/60 max-w-2xl mx-auto">Have a project in mind? Let's work together to bring your ideas to life.</p>
                </div>
                
                <div class="grid lg:grid-cols-2 gap-12">
                    <!-- Contact Info -->
                    <div class="reveal">
                        <div class="space-y-6">
                            <!-- Email -->
                            <a href="mailto:ouknukabdeallah@email.com" class="glass p-6 rounded-2xl border border-white/10 flex items-center group card-hover block">
                                <div class="w-14 h-14 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Email</h4>
                                    <p class="text-blue-400">ouknukabdeallah@email.com</p>
                                </div>
                            </a>
                            
                            <!-- Phone -->
                            <a href="tel:+212650421408" class="glass p-6 rounded-2xl border border-white/10 flex items-center group card-hover block">
                                <div class="w-14 h-14 bg-gradient-to-r from-emerald-500 to-green-500 rounded-xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Phone</h4>
                                    <p class="text-emerald-400">+212 650 421 408</p>
                                </div>
                            </a>
                            
                            <!-- Location -->
                            <div class="glass p-6 rounded-2xl border border-white/10 flex items-center group card-hover">
                                <div class="w-14 h-14 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mr-6 group-hover:scale-110 transition-transform">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Location</h4>
                                    <p class="text-purple-400">Morocco 🇲🇦</p>
                                </div>
                            </div>
                            
                            <!-- Download CV -->
                            <a href="{{ route('portfolio.cv') }}" class="w-full bg-gradient-to-r from-blue-600 to-emerald-600 hover:from-blue-700 hover:to-emerald-700 text-white font-semibold py-4 px-6 rounded-xl transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-blue-500/25 flex items-center justify-center group">
                                <svg class="w-5 h-5 mr-3 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Download CV
                            </a>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div class="reveal" style="animation-delay: 0.2s;">
                        <div class="glass p-8 rounded-2xl border border-white/10">
                            <form id="contactForm" class="space-y-5">
                                @csrf
                                <div class="grid md:grid-cols-2 gap-5">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-white/80 mb-2">Name</label>
                                        <input type="text" id="name" name="name" required 
                                               class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                               placeholder="Your name">
                                    </div>
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-white/80 mb-2">Email</label>
                                        <input type="email" id="email" name="email" required 
                                               class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                               placeholder="your@email.com">
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-white/80 mb-2">Subject</label>
                                    <input type="text" id="subject" name="subject" required 
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                           placeholder="Project inquiry">
                                </div>
                                
                                <div>
                                    <label for="message" class="block text-sm font-medium text-white/80 mb-2">Message</label>
                                    <textarea id="message" name="message" rows="4" required 
                                              class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all resize-none"
                                              placeholder="Tell me about your project..."></textarea>
                                </div>
                                
                                <button type="submit" 
                                        class="w-full bg-gradient-to-r from-blue-600 to-emerald-600 hover:from-blue-700 hover:to-emerald-700 text-white font-semibold py-4 rounded-xl transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-blue-500/25 flex items-center justify-center group">
                                    <svg class="w-5 h-5 mr-3 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    Send Message
                                </button>
                            </form>
                            
                            <div id="form-messages" class="mt-4 hidden"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-white/10 py-12">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-6 md:mb-0">
                        <span class="text-2xl font-bold font-space text-gradient">Abdellah Ouknik</span>
                        <p class="text-white/50 text-sm mt-2">FullStack Developer • Morocco</p>
                    </div>
                    
                    <!-- Quick links -->
                    <div class="flex flex-wrap justify-center gap-6 mb-6 md:mb-0">
                        <a href="#home" class="text-white/60 hover:text-white transition-colors text-sm">Home</a>
                        <a href="#about" class="text-white/60 hover:text-white transition-colors text-sm">About</a>
                        <a href="#projects" class="text-white/60 hover:text-white transition-colors text-sm">Projects</a>
                        <a href="#contact" class="text-white/60 hover:text-white transition-colors text-sm">Contact</a>
                    </div>
                    
                    <!-- Social links -->
                    <div class="flex space-x-4">
                        <a href="https://github.com/Ouknik" target="_blank" rel="noopener noreferrer" class="w-10 h-10 glass rounded-full flex items-center justify-center text-white/60 hover:text-white hover:scale-110 transition-all" title="GitHub">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="https://ma.linkedin.com/in/abdellah-ouknik-5b439a207" target="_blank" rel="noopener noreferrer" class="w-10 h-10 glass rounded-full flex items-center justify-center text-white/60 hover:text-white hover:scale-110 transition-all" title="LinkedIn">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="https://play.google.com/store/apps/developer?id=DeV+Step&hl=ar" target="_blank" rel="noopener noreferrer" class="w-10 h-10 glass rounded-full flex items-center justify-center text-white/60 hover:text-white hover:scale-110 transition-all" title="Google Play Store">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3.609 1.814L13.792 12 3.61 22.186a.996.996 0 0 1-.61-.92V2.734a1 1 0 0 1 .609-.92zm10.89 10.893l2.302 2.302-10.937 6.333 8.635-8.635zm3.199-3.198l2.807 1.626a1 1 0 0 1 0 1.73l-2.808 1.626L15.206 12l2.492-2.491zM5.864 2.658L16.8 8.99l-2.302 2.302-8.634-8.634z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="border-t border-white/10 mt-8 pt-8 text-center">
                    <p class="text-white/40 text-sm">
                        © {{ date('Y') }} Abdellah Ouknik. All rights reserved. Built with ❤️ in Morocco
                    </p>
                </div>
            </div>
        </footer>

        <!-- JavaScript -->
        <script>
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
            
            // Scroll reveal
            function revealOnScroll() {
                const reveals = document.querySelectorAll('.reveal');
                reveals.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    if (elementTop < windowHeight - 100) {
                        element.classList.add('active');
                    }
                });
            }
            
            // Smooth scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const headerOffset = 80;
                        const elementPosition = target.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                        window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
                    }
                    // Close mobile menu
                    document.getElementById('mobile-menu')?.classList.add('hidden');
                });
            });
            
            // Mobile menu
            document.getElementById('mobile-menu-button')?.addEventListener('click', () => {
                document.getElementById('mobile-menu')?.classList.toggle('hidden');
            });
            
            // Progress bar
            const progressBar = document.getElementById('progress');
            window.addEventListener('scroll', () => {
                const scroll = window.scrollY;
                const height = document.documentElement.scrollHeight - window.innerHeight;
                const width = (scroll / height) * 100;
                if (progressBar) progressBar.style.width = width + '%';
                revealOnScroll();
            });
            
            // Contact form
            document.getElementById('contactForm')?.addEventListener('submit', async function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                const submitButton = this.querySelector('button[type="submit"]');
                const messagesDiv = document.getElementById('form-messages');
                
                if (submitButton) {
                    submitButton.disabled = true;
                    submitButton.innerHTML = '<svg class="animate-spin w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Sending...';
                }
                
                try {
                    const response = await fetch('/contact', {
                        method: 'POST',
                        body: formData,
                        headers: { 'X-CSRF-TOKEN': csrfToken }
                    });
                    
                    if (response.ok) {
                        if (messagesDiv) {
                            messagesDiv.innerHTML = '<div class="bg-emerald-500/20 border border-emerald-500 text-emerald-400 px-4 py-3 rounded-lg">Message sent successfully! I\'ll get back to you soon.</div>';
                            messagesDiv.classList.remove('hidden');
                        }
                        this.reset();
                    } else {
                        throw new Error('Failed to send message');
                    }
                } catch (error) {
                    if (messagesDiv) {
                        messagesDiv.innerHTML = '<div class="bg-red-500/20 border border-red-500 text-red-400 px-4 py-3 rounded-lg">Error sending message. Please try again or email me directly.</div>';
                        messagesDiv.classList.remove('hidden');
                    }
                } finally {
                    if (submitButton) {
                        submitButton.disabled = false;
                        submitButton.innerHTML = '<svg class="w-5 h-5 mr-3 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>Send Message';
                    }
                }
            });
            
            // Initial reveal
            document.addEventListener('DOMContentLoaded', () => {
                revealOnScroll();
                document.querySelectorAll('.reveal').forEach((el, i) => {
                    if (i < 5) el.classList.add('active');
                });
            });
        </script>
    </body>
</html>
