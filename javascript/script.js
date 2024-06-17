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
	header.addEventListener("click", function () {
		const accordionContent = header.parentElement.querySelector(".accordion-content");
		const accordionMaxHeight = accordionContent.style.maxHeight;

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
	spaceBetween: 50,
	slidesPerView: 3,
	autoplay: {
		delay: 3000,
	},
	loop: true,
	loopedSlides: 4,

	breakpoints: {
		768: {
			slidesPerView: 4,
		},
		1024: {
			slidesPerView: 7,
			spaceBetween: 62,
		},
	},
});

//Tabs
const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach((tab) => {
	tab.addEventListener('click', () => {
		const target = document.querySelector(tab.dataset.tabTarget)
		tabContents.forEach((tab) => {
			tab.classList.add('hidden')
		})
		tabs.forEach((tab) => {
			if (tab.classList.contains('selected')) {
				tab.classList.remove('selected')
			}
		})
		target.classList.remove('hidden')
		tab.classList.add('selected')
	})
});

//Video Play Button
const playVideo = document.getElementById('play-video')
const video = document.getElementById('video')
const videoOverlay = document.getElementById('video-overlay')
playVideo.addEventListener('click', () => {
	video.play()
	console.log(videoOverlay)
	videoOverlay.classList.add('hidden')
	// console.log(videoOverlay.parentElement)
	videoOverlay.parentElement.classList.add('before:opacity-0')
});

// New script for stick footer
function stickyFooter() {
	let stickyFooter = $('.sticky-footer');
	let stickyFooterHeight = stickyFooter.innerHeight();
	let siteFooter = $('.site-footer');
	siteFooter.css('margin-bottom', stickyFooterHeight);
}
stickyFooter();

let debounceTimeout;
$(window).on('resize', function () {
	clearTimeout(debounceTimeout);
	debounceTimeout = setTimeout(function () {
	stickyFooter();
	}, 250);
});

/* smooth scroll*/
var winWidth = $(window).width()
$(' a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
	if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
		var target = $(this.hash)
		target = target.length ? target : $("[name=" + this.hash.slice(1) + "]")
		if (target.length) {
			if (winWidth > 991) {
				$("html, body").animate(
					{
						scrollTop: target.offset().top -200,
					},
					1000
				)
			} else {
				$("html, body").animate(
					{
						scrollTop: target.offset().top,
					},
					1000
				)
			}
			return false
		}
	}
});
