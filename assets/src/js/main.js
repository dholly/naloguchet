// ─────────────────────────────────────
// app.js
// ─────────────────────────────────────

import General from './_general';

// ═══════════════════════════════════════
// Constants
// ═══════════════════════════════════════

const BREAKPOINTS = {
  tablet: 835,
  menu: 1072,
};

const GAPS = {
  reviews: 28,
  team: 20,
};

// ═══════════════════════════════════════
// Utils
// ═══════════════════════════════════════

const $ = (selector, context = document) => context.querySelector(selector);
const $$ = (selector, context = document) => [...context.querySelectorAll(selector)];
const isMenuMobile = () => window.innerWidth <= BREAKPOINTS.menu;

// ═══════════════════════════════════════
// Modules
// ═══════════════════════════════════════

// ─────────────────────────────────────
// Accordion (grid-анимация, без max-height)
// ─────────────────────────────────────

function initAccordion() {
  document.addEventListener('click', (e) => {
    const header = e.target.closest('.accordion__header');
    if (!header) return;

    // Закрыть остальные (убери этот блок, если нужно несколько открытых)
    $$('.accordion__header.active').forEach(h => {
      if (h !== header) h.classList.remove('active');
    });

    header.classList.toggle('active');
  });
}

// ─────────────────────────────────────
// Sidebar
// ─────────────────────────────────────

function initSidebar() {
  const navbar = $('.menu__body');
  if (!navbar) return;

  const open = () => navbar.classList.add('show');
  const close = () => navbar.classList.remove('show');

  $('#open-sidebar')?.addEventListener('click', open);
  $('#close-sidebar')?.addEventListener('click', close);
  $('#sidebar-overlay')?.addEventListener('click', close);
}

// ─────────────────────────────────────
// Scroll Slider (универсальный)
// ─────────────────────────────────────

function initScrollSlider(config) {
  const { containerId, cardSelector, nextSelector, prevSelector, gap = 20 } = config;

  const container = $(`#${containerId}`);
  const nextBtn = $(nextSelector);
  const prevBtn = $(prevSelector);

  if (!container || !nextBtn || !prevBtn) return;

  const getScrollAmount = () => {
    const card = $(cardSelector, container);
    return card ? card.offsetWidth + gap : 300;
  };

  nextBtn.addEventListener('click', () => {
    container.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
  });

  prevBtn.addEventListener('click', () => {
    container.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
  });
}

// ─────────────────────────────────────
// Tabs (Otzivi page)
// ─────────────────────────────────────

function initTabs() {
  const container = $('.otzivi-tiles');
  if (!container) return;

  container.addEventListener('click', (e) => {
    // Tab buttons
    const btn = e.target.closest('.otzivi-tiles__btn');
    if (btn) {
      const targetId = btn.dataset.target;
      if (!targetId) return;

      $$('.otzivi-tiles__btn', container).forEach(b => b.classList.remove('active-switch'));
      $$('.otzivi-tiles__content', container).forEach(c => c.classList.remove('active-tiles'));

      btn.classList.add('active-switch');
      $(`#${targetId}`)?.classList.add('active-tiles');
      return;
    }

    // "Показать ещё"
    const showMoreBtn = e.target.closest('.otzivi-tiles__show-more-btn');
    if (showMoreBtn) {
      const grid = showMoreBtn.closest('.otzivi-tiles__content')?.querySelector('.otzivi-tiles__grid');
      grid?.classList.add('show-all');
      showMoreBtn.hidden = true; // лучше чем style.display
    }
  });
}

// ─────────────────────────────────────
// SEO Expand
// ─────────────────────────────────────

function initSeoExpand() {
  const expandBtn = $('#seo-expand-btn');
  const textWrapper = $('#seo-text-wrapper');
  if (!expandBtn || !textWrapper) return;

  const btnSpan = $('span', expandBtn);

  expandBtn.addEventListener('click', () => {
    const isOpen = textWrapper.classList.toggle('open');
    expandBtn.classList.toggle('active');
    if (btnSpan) {
      btnSpan.textContent = isOpen ? 'Свернуть' : 'Развернуть';
    }
  });
}

// ─────────────────────────────────────
// Related Posts Swiper
// ─────────────────────────────────────

function initRelatedSwiper() {
  if (!$('.related-slider') || typeof Swiper === 'undefined') return;

  new Swiper('.related-slider', {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
      nextEl: '.related-nav-next',
      prevEl: '.related-nav-prev',
    },
    breakpoints: {
      640: { slidesPerView: 2, spaceBetween: 20 },
      992: { slidesPerView: 3, spaceBetween: 30 },
    },
  });
}

// ─────────────────────────────────────
// Blog Sidebar Close
// ─────────────────────────────────────

function initBlogSidebar() {
  const closeBtn = $('.expert-widget__close');
  const sidebar = $('.single-post__sidebar');
  if (!closeBtn || !sidebar) return;

  closeBtn.addEventListener('click', () => {
    sidebar.style.transition = 'opacity 0.3s ease';
    sidebar.style.opacity = '0';

    sidebar.addEventListener('transitionend', () => {
      sidebar.hidden = true;
    }, { once: true });
  });
}

// ─────────────────────────────────────
// Submenu
// ─────────────────────────────────────

function initSubMenu() {
  const subMenus = $$('.sub-menu');
  if (!subMenus.length) return;

  subMenus.forEach(subMenu => {
    const link = $(':scope > .menu__link', subMenu);
    if (!link) return;

    link.addEventListener('click', (e) => {
      if (!isMenuMobile()) return;
      e.preventDefault();
      if (!subMenu.classList.contains('active')) {
        e.preventDefault();
        subMenus.forEach(other => {
          if (other !== subMenu) other.classList.remove('active');
        });
        subMenu.classList.add('active');
      }
    });

    subMenu.addEventListener('mouseenter', () => {
      if (!isMenuMobile()) subMenu.classList.add('active');
    });

    subMenu.addEventListener('mouseleave', () => {
      if (!isMenuMobile()) subMenu.classList.remove('active');
    });
  });

  document.addEventListener('click', (e) => {
    if (!e.target.closest('.sub-menu') && isMenuMobile()) {
      subMenus.forEach(s => s.classList.remove('active'));
    }
  });

  // Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      $$('.sub-menu.active').forEach(s => s.classList.remove('active'));

      const menuBody = $('.menu__body');
      if (menuBody?.classList.contains('show')) {
        menuBody.classList.remove('show');
      }
    }
  });
}

// ─────────────────────────────────────
// Cookie Banner
// ─────────────────────────────────────

function initCookieBanner() {
  const banner = $('#cookie-banner');
  const acceptBtn = $('#cookie-accept');
  if (!banner) return;

  const STORAGE_KEY = 'cookie_accepted';

  if (!localStorage.getItem(STORAGE_KEY)) {
    setTimeout(() => banner.classList.add('is-visible'), 1000);
  }

  acceptBtn?.addEventListener('click', () => {
    banner.classList.remove('is-visible');
    localStorage.setItem(STORAGE_KEY, 'true');
  });
}

// ─────────────────────────────────────
// GLightbox
// ─────────────────────────────────────

function initLightbox() {
  if (typeof GLightbox === 'undefined' || !$('.glightbox')) return;

  GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
  });
}

// ═══════════════════════════════════════
// Init
// ═══════════════════════════════════════

document.addEventListener('DOMContentLoaded', () => {
  // General
  new General();

  // Core
  initAccordion();
  initSidebar();
  initSubMenu();
  initCookieBanner();
  initLightbox();

  // Sliders
  initScrollSlider({
    containerId: 'reviewsScrollArea',
    cardSelector: '.reviews__tile',
    nextSelector: '.next-btn',
    prevSelector: '.prev-btn',
    gap: GAPS.reviews,
  });

  initScrollSlider({
    containerId: 'teamScrollArea',
    cardSelector: '.team-card',
    nextSelector: '.team-next-btn',
    prevSelector: '.team-prev-btn',
    gap: GAPS.team,
  });

  initRelatedSwiper();

  // Page-specific
  initTabs();
  initSeoExpand();
  initBlogSidebar();
});


document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById('cities-modal');
  const openBtns = document.querySelectorAll('.js-open-cities-modal');
  const closeBtn = document.getElementById('close-cities-modal');
  const overlay = modal?.querySelector('.cities-modal__overlay');

  openBtns.forEach(btn => {
    btn.addEventListener('click', () => modal.classList.add('is-open'));
  });

  closeBtn?.addEventListener('click', () => modal.classList.remove('is-open'));
  overlay?.addEventListener('click', () => modal.classList.remove('is-open'));
});