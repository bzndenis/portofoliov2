import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Dark Mode Logic
const themeToggleBtn = document.getElementById('theme-toggle');
const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'light') {
    themeToggleDarkIcon.classList.remove('hidden');
    document.documentElement.classList.remove('dark');
} else {
    themeToggleLightIcon.classList.remove('hidden');
    document.documentElement.classList.add('dark');
}

if (themeToggleBtn) {
    themeToggleBtn.addEventListener('click', function() {
        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }
        } else {
            // if NOT set via local storage previously
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    });
}

// Chatbot Logic
document.addEventListener('alpine:init', () => {
    Alpine.data('chatbot', () => ({
        isOpen: false,
        messages: [],
        newMessage: '',
        isLoading: false,

        async sendMessage() {
            if (!this.newMessage.trim()) return;

            const userMsg = this.newMessage;
            this.messages.push({ text: userMsg, isUser: true });
            this.newMessage = '';
            this.isLoading = true;

            // Scroll to bottom
            this.$nextTick(() => {
                const chatContainer = document.getElementById('chat-messages');
                chatContainer.scrollTop = chatContainer.scrollHeight;
            });

            try {
                const response = await fetch('/chatbot/message', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ message: userMsg })
                });

                const data = await response.json();
                
                // Simulate a small delay for realism if response is too fast
                // await new Promise(r => setTimeout(r, 500));

                this.messages.push({ text: data.reply, isUser: false });
            } catch (error) {
                console.error('Error:', error);
                this.messages.push({ text: "Sorry, I'm having trouble connecting right now.", isUser: false });
            } finally {
                this.isLoading = false;
                this.$nextTick(() => {
                    const chatContainer = document.getElementById('chat-messages');
                    chatContainer.scrollTop = chatContainer.scrollHeight;
                });
            }
        }
    }));
    Alpine.data('portfolioProjects', () => ({
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
    }));
});

Alpine.start();
