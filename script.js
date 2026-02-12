document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок
    lucide.createIcons();

    // 2. Глобальные переменные
    const header = document.querySelector('.header');
    const burger = document.querySelector('.burger');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');
    
    // 3. Мобильное меню (Burger)
    const toggleMenu = () => {
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 4. Скролл-эффекты для Хедера
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(5, 6, 8, 0.95)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(255, 255, 255, 0.03)';
        }
    });

    // 5. Native Reveal Animation (Замена AOS)
    const revealElements = document.querySelectorAll('[data-reveal]');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    revealElements.forEach((el, index) => {
        el.style.transitionDelay = `${(index % 4) * 0.1}s`; // Небольшая задержка для сетки
        revealObserver.observe(el);
    });

    // 6. Canvas Background (Particles)
    const canvas = document.getElementById('hero-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let particles = [];
        const resize = () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        };
        window.addEventListener('resize', resize);
        resize();

        class Particle {
            constructor() { this.reset(); }
            reset() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 0.5;
                this.speedX = (Math.random() - 0.5) * 0.4;
                this.speedY = (Math.random() - 0.5) * 0.4;
                this.opacity = Math.random() * 0.5;
            }
            update() {
                this.x += this.speedX; this.y += this.speedY;
                if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) this.reset();
            }
            draw() {
                ctx.fillStyle = `rgba(0, 242, 255, ${this.opacity})`;
                ctx.beginPath(); ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2); ctx.fill();
            }
        }
        for (let i = 0; i < 60; i++) particles.push(new Particle());
        const animate = () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => { p.update(); p.draw(); });
            requestAnimationFrame(animate);
        };
        animate();
    }

    // 7. Glow Effect for Cards
    const cards = document.querySelectorAll('.feature-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            card.style.setProperty('--x', `${e.clientX - rect.left}px`);
            card.style.setProperty('--y', `${e.clientY - rect.top}px`);
        });
    });

    // 8. FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        item.querySelector('.faq-item__trigger').addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            faqItems.forEach(i => { i.classList.remove('active'); i.querySelector('.faq-item__content').style.maxHeight = null; });
            if (!isActive) {
                item.classList.add('active');
                item.querySelector('.faq-item__content').style.maxHeight = item.querySelector('.faq-item__content').scrollHeight + "px";
            }
        });
    });

    // 9. Contact Form Logic
    const form = document.getElementById('main-form');
    if (form) {
        const phoneInput = document.getElementById('phone');
        const captchaLabel = document.getElementById('captcha-question');
        let a = Math.floor(Math.random() * 10), b = Math.floor(Math.random() * 10);
        captchaLabel.textContent = `${a} + ${b}`;
        
        phoneInput.addEventListener('input', (e) => e.target.value = e.target.value.replace(/[^\d+]/g, ''));

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const ans = document.getElementById('captcha-answer').value;
            if (parseInt(ans) !== (a + b)) return alert('Неверная капча');
            
            const btn = form.querySelector('.btn--submit');
            btn.textContent = 'Отправка...';
            setTimeout(() => {
                document.getElementById('form-success').classList.add('active');
                form.reset();
                btn.textContent = 'Начать сейчас';
            }, 1500);
        });
    }

    // 10. Cookie Popup
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieBtn = document.getElementById('cookie-accept');
    if (!localStorage.getItem('cookie_accepted')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2000);
    }
    cookieBtn.addEventListener('click', () => {
        localStorage.setItem('cookie_accepted', 'true');
        cookiePopup.classList.remove('active');
    });
});

// Глобальная функция закрытия успеха
window.closeSuccess = () => document.getElementById('form-success').classList.remove('active');