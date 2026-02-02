<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- SEO Meta Tags -->
        <title>Abdellah Ouknik - FullStack Developer | Morocco</title>
        <meta name="description" content="Abdellah Ouknik - FullStack Developer at Université Cadi Ayyad, Morocco. Specialized in PHP, Go, Flutter, and modern web technologies.">
        <meta name="keywords" content="Abdellah Ouknik, FullStack Developer, Web Developer, Morocco, Laravel, Flutter, Go, PHP">
        <meta name="author" content="Abdellah Ouknik">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url('/') }}">
        
        <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:title" content="Abdellah Ouknik - FullStack Developer">
        <meta property="og:description" content="FullStack Developer at Université Cadi Ayyad, Morocco.">
        <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&family=playfair-display:400,500,600,700&display=swap" rel="stylesheet" />
        
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            'sans': ['Inter', 'sans-serif'],
                            'serif': ['Playfair Display', 'serif'],
                        },
                        colors: {
                            'brand': {
                                50: '#fdf4f3',
                                100: '#fce8e6',
                                200: '#f9d5d2',
                                300: '#f4b5af',
                                400: '#ec8b82',
                                500: '#e06456',
                                600: '#cc4637',
                                700: '#ab382b',
                                800: '#8e3228',
                                900: '#762f27',
                            }
                        }
                    }
                }
            }
        </script>
        
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            
            html { scroll-behavior: smooth; }
            
            body { 
                font-family: 'Inter', sans-serif;
                background: #fafafa;
                color: #1a1a1a;
                overflow-x: hidden;
            }
            
            .font-serif { font-family: 'Playfair Display', serif; }
            
            /* Selection */
            ::selection {
                background: #e06456;
                color: white;
            }
            
            /* Scrollbar */
            ::-webkit-scrollbar { width: 8px; }
            ::-webkit-scrollbar-track { background: #f1f1f1; }
            ::-webkit-scrollbar-thumb { background: #e06456; border-radius: 4px; }
            ::-webkit-scrollbar-thumb:hover { background: #cc4637; }
            
            /* Smooth transitions */
            .transition-smooth {
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }
            
            /* Card hover */
            .card-hover:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            }
            
            /* Text gradient */
            .text-gradient {
                background: linear-gradient(135deg, #e06456, #cc4637);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
            
            /* Underline animation */
            .underline-animation {
                position: relative;
            }
            .underline-animation::after {
                content: '';
                position: absolute;
                bottom: -4px;
                left: 0;
                width: 0;
                height: 2px;
                background: #e06456;
                transition: width 0.3s ease;
            }
            .underline-animation:hover::after {
                width: 100%;
            }
            
            /* Avatar */
            .avatar-wrapper {
                position: relative;
            }
            .avatar-wrapper::before {
                content: '';
                position: absolute;
                inset: -4px;
                background: linear-gradient(135deg, #e06456, #f4b5af);
                border-radius: 50%;
                z-index: -1;
            }
            
            /* Section reveal */
            .reveal {
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            }
            .reveal.active {
                opacity: 1;
                transform: translateY(0);
            }
            
            /* Skill bar */
            .skill-bar {
                height: 6px;
                background: #e5e5e5;
                border-radius: 3px;
                overflow: hidden;
            }
            .skill-fill {
                height: 100%;
                background: linear-gradient(90deg, #e06456, #f4b5af);
                border-radius: 3px;
                transition: width 1s ease;
            }
            
            /* Nav link */
            .nav-link {
                position: relative;
                color: #666;
                transition: color 0.3s ease;
            }
            .nav-link:hover, .nav-link.active {
                color: #e06456;
            }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-md border-b border-gray-100" id="navbar">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex justify-between items-center h-20">
                    <a href="#home" class="text-2xl font-serif font-bold text-gray-900">
                        A<span class="text-brand-500">.</span>Ouknik
                    </a>
                    
                    <div class="hidden md:flex items-center gap-10">
                        <a href="#home" class="nav-link text-sm font-medium">Home</a>
                        <a href="#about" class="nav-link text-sm font-medium">About</a>
                        <a href="#projects" class="nav-link text-sm font-medium">Projects</a>
                        <a href="#skills" class="nav-link text-sm font-medium">Skills</a>
                        <a href="#contact" class="nav-link text-sm font-medium">Contact</a>
                    </div>
                    
                    <a href="#contact" class="hidden md:inline-flex px-6 py-2.5 bg-gray-900 text-white text-sm font-medium rounded-full hover:bg-brand-500 transition-smooth">
                        Let's Talk
                    </a>
                    
                    <!-- Mobile menu button -->
                    <button class="md:hidden p-2" id="mobile-btn">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
                
                <!-- Mobile menu -->
                <div class="md:hidden hidden pb-4" id="mobile-menu">
                    <div class="flex flex-col gap-4">
                        <a href="#home" class="text-gray-600 hover:text-brand-500 transition-colors">Home</a>
                        <a href="#about" class="text-gray-600 hover:text-brand-500 transition-colors">About</a>
                        <a href="#projects" class="text-gray-600 hover:text-brand-500 transition-colors">Projects</a>
                        <a href="#skills" class="text-gray-600 hover:text-brand-500 transition-colors">Skills</a>
                        <a href="#contact" class="text-gray-600 hover:text-brand-500 transition-colors">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="min-h-screen flex items-center pt-20 bg-white">
            <div class="max-w-6xl mx-auto px-6 py-20">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <!-- Text Content -->
                    <div class="reveal">
                        <p class="text-brand-500 font-medium mb-4 tracking-wide">Hello, I'm</p>
                        
                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-serif font-bold text-gray-900 leading-tight mb-6">
                            Abdellah<br/>
                            <span class="text-gradient">Ouknik</span>
                        </h1>
                        
                        <p class="text-xl text-gray-500 mb-4">
                            FullStack Developer
                        </p>
                        
                        <p class="text-gray-600 leading-relaxed mb-8 max-w-md">
                            I create elegant digital solutions that blend creativity with technology. 
                            Based in Morocco, working at Université Cadi Ayyad.
                        </p>
                        
                        <div class="flex flex-wrap gap-4 mb-10">
                            <a href="#projects" class="px-8 py-4 bg-gray-900 text-white font-medium rounded-full hover:bg-brand-500 transition-smooth">
                                View Projects
                            </a>
                            <a href="{{ route('portfolio.cv') }}" class="px-8 py-4 border-2 border-gray-200 text-gray-700 font-medium rounded-full hover:border-brand-500 hover:text-brand-500 transition-smooth flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Download CV
                            </a>
                        </div>
                        
                        <!-- Social Links -->
                        <div class="flex gap-4">
                            <a href="https://github.com/Ouknik" target="_blank" class="w-12 h-12 border border-gray-200 rounded-full flex items-center justify-center text-gray-500 hover:border-brand-500 hover:text-brand-500 hover:bg-brand-50 transition-smooth">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                                </svg>
                            </a>
                            <a href="https://ma.linkedin.com/in/abdellah-ouknik-5b439a207" target="_blank" class="w-12 h-12 border border-gray-200 rounded-full flex items-center justify-center text-gray-500 hover:border-brand-500 hover:text-brand-500 hover:bg-brand-50 transition-smooth">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="https://play.google.com/store/apps/developer?id=DeV+Step&hl=ar" target="_blank" class="w-12 h-12 border border-gray-200 rounded-full flex items-center justify-center text-gray-500 hover:border-brand-500 hover:text-brand-500 hover:bg-brand-50 transition-smooth">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3.609 1.814L13.792 12 3.61 22.186a.996.996 0 0 1-.61-.92V2.734a1 1 0 0 1 .609-.92zm10.89 10.893l2.302 2.302-10.937 6.333 8.635-8.635zm3.199-3.198l2.807 1.626a1 1 0 0 1 0 1.73l-2.808 1.626L15.206 12l2.492-2.491zM5.864 2.658L16.8 8.99l-2.302 2.302-8.634-8.634z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Image -->
                    <div class="reveal flex justify-center lg:justify-end" style="animation-delay: 0.2s">
                        <div class="relative">
                            <!-- Decorative elements -->
                            <div class="absolute -top-8 -left-8 w-24 h-24 bg-brand-100 rounded-full -z-10"></div>
                            <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-brand-50 rounded-full -z-10"></div>
                            
                            <div class="avatar-wrapper">
                                <img src="{{ asset('images/profile.jpg') }}" alt="Abdellah Ouknik" 
                                     class="w-72 h-72 md:w-96 md:h-96 rounded-full object-cover object-top shadow-2xl">
                            </div>
                            
                            <!-- Status badge -->
                            <div class="absolute -bottom-4 left-1/2 -translate-x-1/2 bg-white px-6 py-3 rounded-full shadow-lg border border-gray-100">
                                <div class="flex items-center gap-2">
                                    <span class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></span>
                                    <span class="text-sm font-medium text-gray-700">Available for work</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-24 bg-gray-50">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-16 reveal">
                    <p class="text-brand-500 font-medium mb-2">About Me</p>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900">
                        Get to know me
                    </h2>
                </div>
                
                <div class="grid lg:grid-cols-3 gap-8">
                    <!-- Info Card -->
                    <div class="reveal bg-white p-8 rounded-2xl shadow-sm card-hover transition-smooth">
                        <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Who I Am</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A passionate FullStack Developer working at Université Cadi Ayyad in Morocco. 
                            I specialize in building scalable web and mobile applications.
                        </p>
                    </div>
                    
                    <!-- Stats Card -->
                    <div class="reveal bg-white p-8 rounded-2xl shadow-sm card-hover transition-smooth" style="animation-delay: 0.1s">
                        <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Experience</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-3xl font-bold text-brand-500">5+</p>
                                <p class="text-sm text-gray-500">Years</p>
                            </div>
                            <div>
                                <p class="text-3xl font-bold text-brand-500">20+</p>
                                <p class="text-sm text-gray-500">Projects</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Languages Card -->
                    <div class="reveal bg-white p-8 rounded-2xl shadow-sm card-hover transition-smooth" style="animation-delay: 0.2s">
                        <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Languages</h3>
                        <div class="space-y-2">
                            <p class="text-gray-600"><span class="font-medium">Tamazight</span> - Native</p>
                            <p class="text-gray-600"><span class="font-medium">Arabic</span> - Native</p>
                            <p class="text-gray-600"><span class="font-medium">English</span> - Intermediate</p>
                            <p class="text-gray-600"><span class="font-medium">French</span> - Basic</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-24 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-16 reveal">
                    <p class="text-brand-500 font-medium mb-2">My Work</p>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900">
                        Featured Projects
                    </h2>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Project 1 -->
                    <div class="reveal group">
                        <div class="bg-gray-50 rounded-2xl overflow-hidden card-hover transition-smooth">
                            <div class="h-48 bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center">
                                <span class="text-7xl">📱</span>
                            </div>
                            <div class="p-8">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-2xl font-semibold text-gray-900">WhatsOTP</h3>
                                    <a href="https://whatsotp.me/" target="_blank" class="text-gray-400 hover:text-brand-500 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </a>
                                </div>
                                <p class="text-gray-600 mb-6">OTP verification service using WhatsApp for apps and websites.</p>
                                <div class="flex gap-2">
                                    <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-sm rounded-full">API</span>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">Backend</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Project 2 -->
                    <div class="reveal" style="animation-delay: 0.1s">
                        <div class="bg-gray-50 rounded-2xl overflow-hidden card-hover transition-smooth">
                            <div class="h-48 bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center">
                                <span class="text-7xl">🎓</span>
                            </div>
                            <div class="p-8">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-2xl font-semibold text-gray-900">Madrasati</h3>
                                    <a href="https://madrasati.me/" target="_blank" class="text-gray-400 hover:text-brand-500 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </a>
                                </div>
                                <p class="text-gray-600 mb-6">Complete school management platform for parents, students, and teachers.</p>
                                <div class="flex gap-2">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">Platform</span>
                                    <span class="px-3 py-1 bg-purple-100 text-purple-700 text-sm rounded-full">Education</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Project 3 -->
                    <div class="reveal" style="animation-delay: 0.2s">
                        <div class="bg-gray-50 rounded-2xl overflow-hidden card-hover transition-smooth">
                            <div class="h-48 bg-gradient-to-br from-orange-400 to-red-500 flex items-center justify-center">
                                <span class="text-7xl">🛒</span>
                            </div>
                            <div class="p-8">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-2xl font-semibold text-gray-900">E.soussi Store</h3>
                                    <a href="https://e.soussi.store/" target="_blank" class="text-gray-400 hover:text-brand-500 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </a>
                                </div>
                                <p class="text-gray-600 mb-6">Modern e-commerce platform with secure payments.</p>
                                <div class="flex gap-2">
                                    <span class="px-3 py-1 bg-orange-100 text-orange-700 text-sm rounded-full">E-commerce</span>
                                    <span class="px-3 py-1 bg-red-100 text-red-700 text-sm rounded-full">Web</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Project 4 -->
                    <div class="reveal" style="animation-delay: 0.3s">
                        <div class="bg-gray-50 rounded-2xl overflow-hidden card-hover transition-smooth">
                            <div class="h-48 bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center">
                                <span class="text-7xl">🏛️</span>
                            </div>
                            <div class="p-8">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-2xl font-semibold text-gray-900">UCA Student</h3>
                                    <a href="https://ucastudent.uca.ma/" target="_blank" class="text-gray-400 hover:text-brand-500 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </a>
                                </div>
                                <p class="text-gray-600 mb-6">University student platform for Cadi Ayyad University.</p>
                                <div class="flex gap-2">
                                    <span class="px-3 py-1 bg-purple-100 text-purple-700 text-sm rounded-full">Platform</span>
                                    <span class="px-3 py-1 bg-pink-100 text-pink-700 text-sm rounded-full">University</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-24 bg-gray-50">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-16 reveal">
                    <p class="text-brand-500 font-medium mb-2">My Skills</p>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900">
                        Technical Expertise
                    </h2>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Frontend -->
                    <div class="reveal bg-white p-8 rounded-2xl shadow-sm">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center gap-3">
                            <span class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h12a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            Frontend
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600 text-sm">HTML/CSS</span>
                                    <span class="text-brand-500 text-sm font-medium">95%</span>
                                </div>
                                <div class="skill-bar"><div class="skill-fill" style="width: 95%"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600 text-sm">JavaScript</span>
                                    <span class="text-brand-500 text-sm font-medium">90%</span>
                                </div>
                                <div class="skill-bar"><div class="skill-fill" style="width: 90%"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600 text-sm">Tailwind CSS</span>
                                    <span class="text-brand-500 text-sm font-medium">92%</span>
                                </div>
                                <div class="skill-bar"><div class="skill-fill" style="width: 92%"></div></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Backend -->
                    <div class="reveal bg-white p-8 rounded-2xl shadow-sm" style="animation-delay: 0.1s">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center gap-3">
                            <span class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            Backend
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600 text-sm">PHP/Laravel</span>
                                    <span class="text-brand-500 text-sm font-medium">95%</span>
                                </div>
                                <div class="skill-bar"><div class="skill-fill" style="width: 95%"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600 text-sm">Go (Golang)</span>
                                    <span class="text-brand-500 text-sm font-medium">85%</span>
                                </div>
                                <div class="skill-bar"><div class="skill-fill" style="width: 85%"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600 text-sm">Python</span>
                                    <span class="text-brand-500 text-sm font-medium">80%</span>
                                </div>
                                <div class="skill-bar"><div class="skill-fill" style="width: 80%"></div></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mobile -->
                    <div class="reveal bg-white p-8 rounded-2xl shadow-sm" style="animation-delay: 0.2s">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center gap-3">
                            <span class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            Mobile
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600 text-sm">Flutter/Dart</span>
                                    <span class="text-brand-500 text-sm font-medium">90%</span>
                                </div>
                                <div class="skill-bar"><div class="skill-fill" style="width: 90%"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600 text-sm">Java/Android</span>
                                    <span class="text-brand-500 text-sm font-medium">75%</span>
                                </div>
                                <div class="skill-bar"><div class="skill-fill" style="width: 75%"></div></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Databases -->
                    <div class="reveal bg-white p-8 rounded-2xl shadow-sm" style="animation-delay: 0.3s">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center gap-3">
                            <span class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z"/>
                                    <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z"/>
                                    <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"/>
                                </svg>
                            </span>
                            Databases
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-full">MySQL</span>
                            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-full">SQLite</span>
                            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-full">Firebase</span>
                            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-full">Hive</span>
                        </div>
                    </div>
                    
                    <!-- Tools -->
                    <div class="reveal bg-white p-8 rounded-2xl shadow-sm" style="animation-delay: 0.4s">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center gap-3">
                            <span class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            Tools
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-full">Git</span>
                            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-full">Docker</span>
                            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-full">Postman</span>
                            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-full">Linux</span>
                        </div>
                    </div>
                    
                    <!-- OS -->
                    <div class="reveal bg-white p-8 rounded-2xl shadow-sm" style="animation-delay: 0.5s">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6 flex items-center gap-3">
                            <span class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            Systems
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-full">🐧 Linux</span>
                            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm rounded-full">🪟 Windows</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-16 reveal">
                    <p class="text-brand-500 font-medium mb-2">Get in Touch</p>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900">
                        Let's Work Together
                    </h2>
                </div>
                
                <div class="grid lg:grid-cols-2 gap-12">
                    <!-- Contact Info -->
                    <div class="space-y-6">
                        <div class="reveal">
                            <a href="mailto:ouknukabdeallah@email.com" class="flex items-center gap-4 p-6 bg-gray-50 rounded-xl hover:bg-brand-50 transition-smooth group">
                                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center group-hover:bg-brand-200 transition-smooth">
                                    <svg class="w-6 h-6 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Email</p>
                                    <p class="text-gray-900 font-medium">ouknukabdeallah@email.com</p>
                                </div>
                            </a>
                        </div>
                        
                        <div class="reveal" style="animation-delay: 0.1s">
                            <a href="tel:+212650421408" class="flex items-center gap-4 p-6 bg-gray-50 rounded-xl hover:bg-brand-50 transition-smooth group">
                                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center group-hover:bg-brand-200 transition-smooth">
                                    <svg class="w-6 h-6 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Phone</p>
                                    <p class="text-gray-900 font-medium">+212 650 421 408</p>
                                </div>
                            </a>
                        </div>
                        
                        <div class="reveal" style="animation-delay: 0.2s">
                            <div class="flex items-center gap-4 p-6 bg-gray-50 rounded-xl">
                                <div class="w-14 h-14 bg-brand-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Location</p>
                                    <p class="text-gray-900 font-medium">Morocco 🇲🇦</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="reveal" style="animation-delay: 0.3s">
                            <a href="{{ route('portfolio.cv') }}" class="flex items-center justify-center gap-3 p-4 bg-gray-900 text-white rounded-xl hover:bg-brand-500 transition-smooth">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Download My CV
                            </a>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div class="reveal" style="animation-delay: 0.2s">
                        <form id="contactForm" class="bg-gray-50 p-8 rounded-2xl">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                                    <input type="text" id="name" name="name" required 
                                           class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all"
                                           placeholder="Your name">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                    <input type="email" id="email" name="email" required 
                                           class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all"
                                           placeholder="your@email.com">
                                </div>
                            </div>
                            
                            <div class="mb-6">
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                                <input type="text" id="subject" name="subject" required 
                                       class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all"
                                       placeholder="Project inquiry">
                            </div>
                            
                            <div class="mb-6">
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                                <textarea id="message" name="message" rows="5" required 
                                          class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all resize-none"
                                          placeholder="Tell me about your project..."></textarea>
                            </div>
                            
                            <button type="submit" class="w-full py-4 bg-brand-500 text-white font-medium rounded-xl hover:bg-brand-600 transition-smooth flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                Send Message
                            </button>
                        </form>
                        
                        <div id="form-messages" class="mt-4 hidden"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-12 bg-gray-900 text-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <div>
                        <span class="text-2xl font-serif font-bold">A<span class="text-brand-400">.</span>Ouknik</span>
                        <p class="text-gray-400 text-sm mt-1">FullStack Developer • Morocco</p>
                    </div>
                    
                    <div class="flex gap-8">
                        <a href="#home" class="text-gray-400 hover:text-white transition-colors text-sm">Home</a>
                        <a href="#about" class="text-gray-400 hover:text-white transition-colors text-sm">About</a>
                        <a href="#projects" class="text-gray-400 hover:text-white transition-colors text-sm">Projects</a>
                        <a href="#contact" class="text-gray-400 hover:text-white transition-colors text-sm">Contact</a>
                    </div>
                    
                    <div class="flex gap-4">
                        <a href="https://github.com/Ouknik" target="_blank" class="w-10 h-10 border border-gray-700 rounded-full flex items-center justify-center text-gray-400 hover:border-brand-500 hover:text-brand-400 transition-smooth">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <a href="https://ma.linkedin.com/in/abdellah-ouknik-5b439a207" target="_blank" class="w-10 h-10 border border-gray-700 rounded-full flex items-center justify-center text-gray-400 hover:border-brand-500 hover:text-brand-400 transition-smooth">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                    <p class="text-gray-500 text-sm">© {{ date('Y') }} Abdellah Ouknik. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <script>
            // Mobile menu
            document.getElementById('mobile-btn')?.addEventListener('click', () => {
                document.getElementById('mobile-menu')?.classList.toggle('hidden');
            });
            
            // Smooth scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                    document.getElementById('mobile-menu')?.classList.add('hidden');
                });
            });
            
            // Scroll reveal
            const reveals = document.querySelectorAll('.reveal');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.1 });
            
            reveals.forEach(el => observer.observe(el));
            
            // Initial reveal
            setTimeout(() => {
                document.querySelectorAll('#home .reveal').forEach(el => el.classList.add('active'));
            }, 100);
            
            // Contact form
            document.getElementById('contactForm')?.addEventListener('submit', async function(e) {
                e.preventDefault();
                const btn = this.querySelector('button[type="submit"]');
                const msg = document.getElementById('form-messages');
                
                btn.disabled = true;
                btn.innerHTML = '<svg class="animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path></svg> Sending...';
                
                try {
                    const res = await fetch('/contact', {
                        method: 'POST',
                        body: new FormData(this),
                        headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '' }
                    });
                    
                    if (res.ok) {
                        msg.innerHTML = '<div class="p-4 bg-green-100 text-green-700 rounded-xl">Message sent successfully!</div>';
                        msg.classList.remove('hidden');
                        this.reset();
                    } else throw new Error();
                } catch {
                    msg.innerHTML = '<div class="p-4 bg-red-100 text-red-700 rounded-xl">Error sending message.</div>';
                    msg.classList.remove('hidden');
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg> Send Message';
                }
            });
        </script>
    </body>
</html>
