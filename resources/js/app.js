import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Dark Mode Logic
const themeToggleBtn = document.getElementById('theme-toggle');
const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
    document.documentElement.classList.add('dark');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
    document.documentElement.classList.remove('dark');
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
});

Alpine.start();
