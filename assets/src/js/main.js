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

// -------- ACCORDION 1 --------------- //

const accordionItemHeaders = document.querySelectorAll(".services-accordion__header")

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