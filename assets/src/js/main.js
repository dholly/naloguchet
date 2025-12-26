import General from './_general';

const App = {
	/**
	 * App.init
	 */
	init() {
		// General scripts
		function initGeneral() {
			return new General();
		}
		initGeneral();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});

// --------------- ACCORDION --------------- //

const accordionItemHeaders = document.querySelectorAll(".accordion__header")

accordionItemHeaders.forEach(accordionItemHeader => {
	accordionItemHeader.addEventListener("click", event => {
		accordionItemHeader.classList.toggle("active");

		const accordionItemBody = accordionItemHeader.nextElementSibling;

		if(accordionItemHeader.classList.contains("active")) {
			accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
		}
		else {
			accordionItemBody.style.maxHeight = 0;
		}
	})
})

// --------------- SIDEBAR --------------- //

document.addEventListener('DOMContentLoaded', function() {

    const navbar = document.querySelector(".menu__body");
    const openBtn = document.querySelector("#open-sidebar");
    const closeBtn = document.querySelector("#close-sidebar");
	const overlay = document.querySelector("#sidebar-overlay");

    function openSidebar() {
        navbar.classList.add("show");
    }

    function closeSidebar() {
        navbar.classList.remove("show");
    }

    if (openBtn) {
        openBtn.addEventListener('click', openSidebar);
    }
    
    if (closeBtn) {
        closeBtn.addEventListener('click', closeSidebar);
    }

    if (overlay) {
        overlay.addEventListener('click', closeSidebar);
    }
});

// --------------- MAIN PAGE / REVIEWS + TEAM / MOBILE SLIDER --------------- //

  document.addEventListener('DOMContentLoaded', () => {

    // Слайдер с обзорами
    const scrollContainer = document.getElementById('reviewsScrollArea');
    const nextBtn = document.querySelector('.next-btn');
    const prevBtn = document.querySelector('.prev-btn');

    if (scrollContainer && nextBtn && prevBtn) {
      const getScrollAmount = () => {
        const card = scrollContainer.querySelector('.reviews__tile');
        return card ? card.offsetWidth + 28 : 300; 
      };

      nextBtn.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
      });

      prevBtn.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
      });
    }

    // --- Cлайдер КОМАНДЫ ---
    const teamContainer = document.getElementById('teamScrollArea');
    const teamNextBtn = document.querySelector('.team-next-btn');
    const teamPrevBtn = document.querySelector('.team-prev-btn');

    if (teamContainer && teamNextBtn && teamPrevBtn) {
      const getTeamScrollAmount = () => {
        const card = teamContainer.querySelector('.team-card');
        return card ? card.offsetWidth + 20 : 300; 
      };

      teamNextBtn.addEventListener('click', () => {
        teamContainer.scrollBy({ left: getTeamScrollAmount(), behavior: 'smooth' });
      });

      teamPrevBtn.addEventListener('click', () => {
        teamContainer.scrollBy({ left: -getTeamScrollAmount(), behavior: 'smooth' });
      });
    }

});

// --------------- OTZIVI PAGE --------------- //

document.addEventListener('DOMContentLoaded', function() {

    const btns = document.querySelectorAll('.otzivi-tiles__btn');
    const contents = document.querySelectorAll('.otzivi-tiles__content');

    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            btns.forEach(b => b.classList.remove('active-switch'));
            btn.classList.add('active-switch');

            contents.forEach(c => c.classList.remove('active-tiles'));
            
            const targetId = btn.getAttribute('data-target');
            document.getElementById(targetId).classList.add('active-tiles');
        });
    });

    // --- ПОКАЗАТЬ ЕЩЕ ---
    const showMoreBtns = document.querySelectorAll('.otzivi-tiles__show-more-btn');

    showMoreBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const parentContent = this.closest('.otzivi-tiles__content');
            const grid = parentContent.querySelector('.otzivi-tiles__grid');            
            grid.classList.add('show-all');
            this.style.display = 'none';
        });
    });
});

// --------------- EXPAND BUTTON --------------- //

document.addEventListener('DOMContentLoaded', function() {
    const expandBtn = document.getElementById('seo-expand-btn');
    const textWrapper = document.getElementById('seo-text-wrapper');
    const btnSpan = expandBtn.querySelector('span');

    if (expandBtn && textWrapper) {
        expandBtn.addEventListener('click', function() {
            textWrapper.classList.toggle('open');
            expandBtn.classList.toggle('active');

            if (textWrapper.classList.contains('open')) {
                btnSpan.textContent = 'Свернуть';
            } else {
                btnSpan.textContent = 'Развернуть';
            }
        });
    }
});

// --------------- SWIPER --------------- //

document.addEventListener('DOMContentLoaded', function() {
    
    if (document.querySelector('.related-slider')) {
        const relatedSwiper = new Swiper('.related-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: false, 
            navigation: {
                nextEl: '.related-nav-next',
                prevEl: '.related-nav-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            }
        });
    }

});