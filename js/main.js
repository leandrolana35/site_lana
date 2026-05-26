(function () {
  'use strict';

  /* Header scroll shadow */
  const header = document.getElementById('header');
  if (header) {
    window.addEventListener('scroll', () => {
      header.classList.toggle('scrolled', window.scrollY > 10);
    }, { passive: true });
  }

  /* Mobile menu */
  const toggle = document.querySelector('.menu-toggle');
  const mobileMenu = document.querySelector('.mobile-menu');
  if (toggle && mobileMenu) {
    toggle.addEventListener('click', () => {
      const open = mobileMenu.classList.toggle('open');
      toggle.classList.toggle('open', open);
      toggle.setAttribute('aria-expanded', String(open));
    });
  }

  /* Scroll reveal */
  const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .fade-up');
  if ('IntersectionObserver' in window) {
    const obs = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
    }, { threshold: 0.12 });
    revealEls.forEach(el => obs.observe(el));
  } else {
    revealEls.forEach(el => el.classList.add('visible'));
  }

  /* Counter animation */
  function animateCounter(el) {
    const target = +el.dataset.count;
    const suffix = el.dataset.suffix || '';
    const duration = 1800;
    const start = performance.now();
    (function step(now) {
      const p = Math.min((now - start) / duration, 1);
      el.textContent = Math.round(p * target).toLocaleString('pt-BR') + suffix;
      if (p < 1) requestAnimationFrame(step);
    })(start);
  }

  if ('IntersectionObserver' in window) {
    const cObs = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) { animateCounter(e.target); cObs.unobserve(e.target); } });
    }, { threshold: 0.5 });
    document.querySelectorAll('[data-count]').forEach(el => cObs.observe(el));
  }

  /* Newsletter form (Mailchimp stub) */
  document.querySelectorAll('#mc-form, #footer-mc-form').forEach(form => {
    form.addEventListener('submit', e => {
      e.preventDefault();
      const msg = document.getElementById('mc-message');
      if (msg) { msg.textContent = '✅ Cadastro realizado! Obrigado.'; msg.style.color = '#2E7D32'; }
    });
  });

})();
