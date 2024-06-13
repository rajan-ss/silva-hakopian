/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

const accordionHeader = document.querySelectorAll(".accordion-header");
accordionHeader.forEach((header) => {
	header.addEventListener("click", function() {
		const accordionContent = header.parentElement.querySelector(".accordion-content");
		let accordionMaxHeight = accordionContent.style.maxHeight;

		// Condition handling
		if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
			accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32}px`;
			accordionContent.classList.add("bg-white");
			header.parentElement.classList.add("active");
		} else {
			accordionContent.style.maxHeight = `0px`;
			header.parentElement.classList.remove("active");
		}
	});
});

	const swiper = new Swiper('.image-slider', {
		// Optional parameters
		spaceBetween: 62,
		slidesPerView: "auto",
		loop: true,
		centeredSlides: true,
		speed: 3000,
		autoplay: {
			delay: 1,
			disableOnInteraction: false,
		},
		loopedSlides: 4,
		allowTouchMove: false,
		disableOnInteraction: true,
	});
