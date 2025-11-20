@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
    <!-- Background Shapes -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-purple-300 dark:bg-purple-900 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
        <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-yellow-300 dark:bg-yellow-900 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-1/3 w-72 h-72 bg-pink-300 dark:bg-pink-900 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
    </div>

    <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
        <h2 class="text-xl md:text-2xl font-medium text-indigo-600 dark:text-indigo-400 mb-4 animate-fade-in-up">
            Hello, I'm <span class="font-bold">Denis Akbar</span>
        </h2>
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-gray-900 dark:text-white mb-6 animate-fade-in-up animation-delay-200">
            Backend <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Developer</span>
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300 mb-10 animate-fade-in-up animation-delay-400">
            Building robust, scalable web applications with modern technologies. Passionate about clean code and elegant solutions.
        </p>
        <div class="flex justify-center gap-4 animate-fade-in-up animation-delay-600">
            <a href="#projects" class="px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10 transition-transform hover:scale-105 shadow-lg hover:shadow-xl">
                View Projects
            </a>
            <a href="#" class="px-8 py-3 border border-transparent text-base font-medium rounded-full text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10 transition-transform hover:scale-105">
                Download CV
            </a>
        </div>

        <!-- Floating Tech Icons -->
        <div class="mt-16 flex justify-center gap-8 flex-wrap animate-fade-in-up animation-delay-800">
            <div class="flex flex-col items-center animate-float">
                <span class="text-4xl mb-2">🐘</span>
                <span class="text-xs font-semibold text-gray-500 dark:text-gray-400">PHP</span>
            </div>
            <div class="flex flex-col items-center animate-float animation-delay-1000">
                <span class="text-4xl mb-2">🔥</span>
                <span class="text-xs font-semibold text-gray-500 dark:text-gray-400">Laravel</span>
            </div>
            <div class="flex flex-col items-center animate-float animation-delay-2000">
                <span class="text-4xl mb-2">🎨</span>
                <span class="text-xs font-semibold text-gray-500 dark:text-gray-400">Tailwind</span>
            </div>
            <div class="flex flex-col items-center animate-float animation-delay-3000">
                <span class="text-4xl mb-2">🐬</span>
                <span class="text-xs font-semibold text-gray-500 dark:text-gray-400">MySQL</span>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <div class="mb-10 lg:mb-0 relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-xl bg-gray-100 dark:bg-gray-800 aspect-w-4 aspect-h-5">
                    <!-- Placeholder Image -->
                    <div class="flex items-center justify-center h-96 bg-gray-200 dark:bg-gray-700 text-gray-400">
                        <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl mb-6">
                    About Me
                </h2>
                <p class="text-lg text-gray-500 dark:text-gray-300 mb-6 leading-relaxed">
                    I'm a passionate backend developer with a knack for creating efficient and scalable web applications. With over 5 years of experience in the PHP ecosystem, I specialize in building RESTful APIs, complex database architectures, and seamless user experiences using Laravel.
                </p>
                <p class="text-lg text-gray-500 dark:text-gray-300 mb-8 leading-relaxed">
                    When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, or enjoying a good cup of coffee while solving algorithmic challenges.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-bold text-gray-900 dark:text-white text-xl">5+</h4>
                        <p class="text-gray-500 dark:text-gray-400">Years Experience</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 dark:text-white text-xl">50+</h4>
                        <p class="text-gray-500 dark:text-gray-400">Projects Completed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Technical Skills
            </h2>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300">
                My tech stack and tools of choice.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Backend -->
            <div class="bg-white dark:bg-gray-900 rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 border-b pb-2 border-gray-200 dark:border-gray-700">Backend</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200 hover:scale-105 transition-transform cursor-default">PHP 8+</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200 hover:scale-105 transition-transform cursor-default">Laravel 11</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200 hover:scale-105 transition-transform cursor-default">Node.js</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200 hover:scale-105 transition-transform cursor-default">Python</span>
                </div>
            </div>

            <!-- Frontend -->
            <div class="bg-white dark:bg-gray-900 rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 border-b pb-2 border-gray-200 dark:border-gray-700">Frontend</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-200 hover:scale-105 transition-transform cursor-default">Tailwind CSS</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-200 hover:scale-105 transition-transform cursor-default">Alpine.js</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-200 hover:scale-105 transition-transform cursor-default">JavaScript</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-200 hover:scale-105 transition-transform cursor-default">Livewire</span>
                </div>
            </div>

            <!-- Database -->
            <div class="bg-white dark:bg-gray-900 rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 border-b pb-2 border-gray-200 dark:border-gray-700">Database</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200 hover:scale-105 transition-transform cursor-default">MySQL</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200 hover:scale-105 transition-transform cursor-default">PostgreSQL</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200 hover:scale-105 transition-transform cursor-default">Redis</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200 hover:scale-105 transition-transform cursor-default">SQLite</span>
                </div>
            </div>

            <!-- Tools -->
            <div class="bg-white dark:bg-gray-900 rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4 border-b pb-2 border-gray-200 dark:border-gray-700">Tools</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 hover:scale-105 transition-transform cursor-default">Git</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 hover:scale-105 transition-transform cursor-default">Docker</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 hover:scale-105 transition-transform cursor-default">AWS</span>
                    <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 hover:scale-105 transition-transform cursor-default">Postman</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 bg-white dark:bg-gray-900" x-data="{
    currentPage: 1,
    itemsPerPage: 8,
    projects: [
        {
            title: 'E-Commerce API',
            description: 'A robust RESTful API for a multi-vendor e-commerce platform featuring cart management, payment gateway integration, and order processing.',
            tags: ['Laravel 11', 'MySQL', 'Redis'],
            color: 'from-blue-400 to-indigo-500',
            icon: '🛍️'
        },
        {
            title: 'Task Manager',
            description: 'A collaborative task management tool with real-time updates, team workspaces, and progress tracking.',
            tags: ['Vue.js', 'Laravel', 'WebSockets'],
            color: 'from-green-400 to-teal-500',
            icon: '✅'
        },
        {
            title: 'SaaS Dashboard',
            description: 'Analytics dashboard for SaaS applications, visualizing user growth, revenue, and churn rates with interactive charts.',
            tags: ['Livewire', 'Alpine.js', 'Chart.js'],
            color: 'from-orange-400 to-red-500',
            icon: '📊'
        },
        {
            title: 'Fitness Tracker',
            description: 'A cross-platform mobile application for tracking workouts and nutrition. Syncs data with Apple Health and Google Fit.',
            tags: ['React Native', 'Laravel API'],
            color: 'from-purple-600 to-pink-600',
            icon: '💪'
        },
        {
            title: 'Cloud Infrastructure',
            description: 'Automated infrastructure provisioning using Terraform and Ansible. Sets up a highly available Kubernetes cluster on AWS.',
            tags: ['AWS', 'Docker', 'Terraform'],
            color: 'from-cyan-500 to-blue-600',
            icon: '☁️'
        },
        {
            title: 'Social Media Bot',
            description: 'An intelligent bot that automates social media interactions, content scheduling, and analytics reporting.',
            tags: ['Python', 'Selenium', 'OpenAI API'],
            color: 'from-pink-500 to-rose-500',
            icon: '🤖'
        },
        {
            title: 'LMS Platform',
            description: 'A comprehensive Learning Management System with course creation, student progress tracking, and quiz modules.',
            tags: ['Laravel', 'Vue.js', 'PostgreSQL'],
            color: 'from-yellow-400 to-orange-500',
            icon: '🎓'
        },
        {
            title: 'Real-time Chat',
            description: 'A scalable chat application supporting private messaging, group chats, and file sharing with end-to-end encryption.',
            tags: ['Node.js', 'Socket.io', 'MongoDB'],
            color: 'from-indigo-500 to-purple-600',
            icon: '💬'
        },
        {
            title: 'Inventory System',
            description: 'Warehouse inventory management system with barcode scanning, stock alerts, and supplier management.',
            tags: ['Laravel', 'Livewire', 'Tailwind'],
            color: 'from-teal-400 to-emerald-600',
            icon: '📦'
        },
        {
            title: 'Booking Engine',
            description: 'Appointment booking system for clinics and salons with calendar integration and SMS notifications.',
            tags: ['PHP', 'MySQL', 'Twilio'],
            color: 'from-blue-500 to-cyan-500',
            icon: '📅'
        },
        {
            title: 'Crypto Tracker',
            description: 'Real-time cryptocurrency portfolio tracker with price alerts and historical data analysis.',
            tags: ['React', 'Node.js', 'CoinGecko API'],
            color: 'from-violet-500 to-fuchsia-600',
            icon: '💰'
        },
        {
            title: 'Weather App',
            description: 'Location-based weather forecast application with severe weather alerts and interactive maps.',
            tags: ['JavaScript', 'OpenWeatherMap', 'Leaflet'],
            color: 'from-sky-400 to-blue-500',
            icon: '🌤️'
        }
    ],
    get totalPages() {
        return Math.ceil(this.projects.length / this.itemsPerPage);
    },
    get paginatedProjects() {
        const start = (this.currentPage - 1) * this.itemsPerPage;
        const end = start + this.itemsPerPage;
        return this.projects.slice(start, end);
    },
    nextPage() {
        if (this.currentPage < this.totalPages) this.currentPage++;
    },
    prevPage() {
        if (this.currentPage > 1) this.currentPage--;
    },
    goToPage(page) {
        this.currentPage = page;
    }
}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Featured Projects
            </h2>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300">
                A selection of my recent work.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <template x-for="project in paginatedProjects" :key="project.title">
                <div class="group relative bg-gray-50 dark:bg-gray-800 rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 dark:border-gray-700 flex flex-col h-full">
                    <!-- Image Area -->
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200 dark:bg-gray-700 overflow-hidden relative">
                        <div :class="`w-full h-48 bg-gradient-to-br ${project.color} group-hover:scale-105 transition-transform duration-500`"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-4xl filter drop-shadow-lg transform group-hover:scale-110 transition-transform duration-300" x-text="project.icon"></span>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6 flex-1 flex flex-col">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors" x-text="project.title"></h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4 line-clamp-3 flex-1" x-text="project.description"></p>
                        
                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <template x-for="tag in project.tags">
                                <span class="text-xs font-semibold px-2 py-1 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded" x-text="tag"></span>
                            </template>
                        </div>
                        
                        <!-- Actions -->
                        <div class="flex justify-between items-center mt-auto pt-4 border-t border-gray-100 dark:border-gray-700">
                            <a href="#" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors flex items-center gap-1">
                                View Code 
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            </a>
                            <a href="#" class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition-colors flex items-center gap-1">
                                Live Demo
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <!-- Pagination Controls -->
        <div class="flex justify-center items-center gap-4 mt-16" x-show="totalPages > 1">
            <!-- Previous Button -->
            <button @click="prevPage" :disabled="currentPage === 1" 
                    class="flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="sr-only">Previous</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            
            <!-- Page Numbers -->
            <div class="flex items-center gap-2">
                <template x-for="page in totalPages" :key="page">
                    <button @click="goToPage(page)" 
                            :class="currentPage === page ? 'bg-indigo-600 text-white border-indigo-600' : 'bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700'"
                            class="w-10 h-10 flex items-center justify-center rounded-full border text-sm font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            x-text="page">
                    </button>
                </template>
            </div>

            <!-- Next Button -->
            <button @click="nextPage" :disabled="currentPage === totalPages"
                    class="flex items-center justify-center w-10 h-10 rounded-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 disabled:opacity-50 disabled:cursor-not-allowed transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="sr-only">Next</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Work Experience
            </h2>
        </div>

        <div class="relative border-l-4 border-indigo-200 dark:border-indigo-900 ml-3 md:ml-6 space-y-12">
            <!-- Item 1 -->
            <div class="relative pl-8 md:pl-12 group">
                <div class="absolute -left-3 top-1 bg-white dark:bg-gray-800 border-4 border-indigo-600 w-6 h-6 rounded-full group-hover:scale-125 transition-transform duration-300"></div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-2">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Senior Laravel Developer</h3>
                    <span class="text-sm font-medium text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900 px-3 py-1 rounded-full mt-2 sm:mt-0">2023 - Present</span>
                </div>
                <h4 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">Tech Solutions Inc.</h4>
                <p class="text-gray-500 dark:text-gray-400 max-w-3xl">
                    Leading the backend team in re-architecting the legacy monolith into microservices. Improved API response times by 40% and implemented automated CI/CD pipelines.
                </p>
            </div>

            <!-- Item 2 -->
            <div class="relative pl-8 md:pl-12 group">
                <div class="absolute -left-3 top-1 bg-white dark:bg-gray-800 border-4 border-indigo-600 w-6 h-6 rounded-full group-hover:scale-125 transition-transform duration-300"></div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-2">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Full Stack Developer</h3>
                    <span class="text-sm font-medium text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900 px-3 py-1 rounded-full mt-2 sm:mt-0">2021 - 2023</span>
                </div>
                <h4 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">Creative Agency</h4>
                <p class="text-gray-500 dark:text-gray-400 max-w-3xl">
                    Developed custom CMS solutions for clients using Laravel and Vue.js. Collaborated closely with designers to implement pixel-perfect responsive UIs.
                </p>
            </div>

            <!-- Item 3 -->
            <div class="relative pl-8 md:pl-12 group">
                <div class="absolute -left-3 top-1 bg-white dark:bg-gray-800 border-4 border-indigo-600 w-6 h-6 rounded-full group-hover:scale-125 transition-transform duration-300"></div>
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-2">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Junior Web Developer</h3>
                    <span class="text-sm font-medium text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900 px-3 py-1 rounded-full mt-2 sm:mt-0">2019 - 2021</span>
                </div>
                <h4 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">StartUp Hub</h4>
                <p class="text-gray-500 dark:text-gray-400 max-w-3xl">
                    Assisted in the development of MVP products. Maintained existing codebases and fixed bugs. Gained proficiency in PHP and MySQL.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-white dark:bg-gray-900">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
                Get In Touch
            </h2>
            <p class="mt-4 text-xl text-gray-500 dark:text-gray-300">
                Have a project in mind or just want to say hi?
            </p>
        </div>

        <form class="space-y-6 bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-lg">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3" placeholder="Your Name">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3" placeholder="you@example.com">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3" placeholder="Your message..."></textarea>
            </div>
            <div>
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-transform hover:scale-105">
                    Send Message
                </button>
            </div>
        </form>

        <div class="mt-12 flex justify-center space-x-8">
            <a href="#" class="text-gray-400 hover:text-indigo-500 transition-colors">
                <span class="sr-only">LinkedIn</span>
                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-indigo-500 transition-colors">
                <span class="sr-only">Twitter</span>
                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- AI Chatbot Widget -->
<div x-data="chatbot()" class="fixed bottom-6 right-6 z-50">
    <!-- Chat Window -->
    <div x-show="isOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-10 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-10 scale-95"
         class="bg-white dark:bg-gray-800 w-80 md:w-96 rounded-2xl shadow-2xl overflow-hidden flex flex-col mb-4 border border-gray-200 dark:border-gray-700"
         style="display: none;">
        
        <!-- Header -->
        <div class="bg-indigo-600 p-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                <h3 class="text-white font-bold">Developer AI Assistant</h3>
            </div>
            <button @click="isOpen = false" class="text-white hover:text-gray-200 focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <!-- Messages Area -->
        <div class="flex-1 p-4 h-80 overflow-y-auto bg-gray-50 dark:bg-gray-900 space-y-4" id="chat-messages">
            <!-- Welcome Message -->
            <div class="flex justify-start">
                <div class="bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-lg rounded-tl-none py-2 px-4 shadow-sm max-w-[85%] border border-gray-200 dark:border-gray-700">
                    <p class="text-sm">Hi there! I'm an AI assistant. Ask me about Denis' skills, projects, or how to get in touch.</p>
                </div>
            </div>

            <template x-for="(msg, index) in messages" :key="index">
                <div :class="msg.isUser ? 'flex justify-end' : 'flex justify-start'">
                    <div :class="msg.isUser ? 'bg-indigo-600 text-white rounded-tr-none' : 'bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 rounded-tl-none border border-gray-200 dark:border-gray-700'"
                         class="rounded-lg py-2 px-4 shadow-sm max-w-[85%]">
                        <p class="text-sm" x-text="msg.text"></p>
                    </div>
                </div>
            </template>

            <!-- Typing Indicator -->
            <div x-show="isLoading" class="flex justify-start" style="display: none;">
                <div class="bg-white dark:bg-gray-800 rounded-lg rounded-tl-none py-2 px-4 shadow-sm border border-gray-200 dark:border-gray-700">
                    <div class="flex space-x-1">
                        <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                        <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce animation-delay-200"></div>
                        <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce animation-delay-400"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Input Area -->
        <div class="p-4 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
            <form @submit.prevent="sendMessage" class="flex space-x-2">
                <input x-model="newMessage" type="text" placeholder="Type a message..." 
                       class="flex-1 border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-full px-4 py-2 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-sm">
                <button type="submit" :disabled="isLoading || !newMessage.trim()"
                        class="bg-indigo-600 text-white rounded-full p-2 hover:bg-indigo-700 focus:outline-none disabled:opacity-50 disabled:cursor-not-allowed transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                </button>
            </form>
        </div>
    </div>

    <!-- Toggle Button -->
    <button @click="isOpen = !isOpen" 
            class="bg-indigo-600 hover:bg-indigo-700 text-white rounded-full p-4 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 focus:outline-none">
        <svg x-show="!isOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
        <svg x-show="isOpen" x-cloak class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
</div>

@endsection
