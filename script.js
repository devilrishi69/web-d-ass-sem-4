// Simple script to handle section animations and form interactions
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, observerOptions);

    // Watch all sections for reveal animation
    document.querySelectorAll('section').forEach(section => {
        section.classList.add('hidden');
        observer.observe(section);
    });

    // Handle Login (Mock)
    const loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            // If not actually processing PHP, we'll just redirect to portfolio
            const action = loginForm.getAttribute('action');
            if (action === 'portfolio.html' || !action.endsWith('.php')) {
                e.preventDefault();
                window.location.href = 'portfolio.html';
            }
        });
    }
});
