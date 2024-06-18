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

// javascript/script.js
var ss;
(function ($) {
	ss = {
		init: function () {
			this.nav();
			this.form();
			this.misc();
			this.togglers();
			this.slider();
			this.gallery();
		},
		ie: function () {
			try {
				if (
					/MSIE (\d+\.\d+);/.test(navigator.userAgent) ||
					!!navigator.userAgent.match(/Trident.*rv\:11\./)
				) {
					$('body').addClass('ie-user');
					return true;
				}
			} catch (err) {
				console.log(err);
			}
			return false;
		},
		nav: function () {
			$('.navbar-toggler').on('click', function () {
				$(this).toggleClass('collapsed');
				$('.navbar-collapse').toggleClass('show');
			});
			$('.navbar-nav .menu-item-has-children .caret').on(
				'click',
				function () {
					$(this).next('.dropdown-menu').slideToggle();
				}
			);

			var winWidth = jQuery(window).width();
			jQuery(' a.js-has-smooth-scroll[href*="#"]:not([href="#"])').click(
				function () {
					if (
						location.pathname.replace(/^\//, '') ==
						this.pathname.replace(/^\//, '') &&
						location.hostname == this.hostname
					) {
						var target = jQuery(this.hash);
						target = target.length
							? target
							: jQuery('[name=' + this.hash.slice(1) + ']');
						if (target.length) {
							jQuery('html, body').animate(
								{
									scrollTop: target.offset().top - ($('.site-header').innerHeight()),
								},
								1e3
							);
							return false;
						}
					}
				}
			);
		},
		form: function () {
			try {
				$('.input-text.qty').each(function () {
					var elm = $(this);
					$(
						'<span class="qty-des"><i class="icon-angle-left"></i></span>'
					).insertBefore($(this));
					$(
						'<span class="qty-ins"><i class="icon-angle-right"></i></span>'
					).insertAfter($(this));
					elm.prev('.qty-des').on('click', function () {
						var val = parseInt(elm.val());
						if (val > 1) {
							elm.val(val - 1);
						}
					});
					elm.next('.qty-ins').on('click', function () {
						var val = parseInt(elm.val());
						elm.val(val + 1);
					});
				});
			} catch (err) {
				console.log(err);
			}
		},
		misc: function () {
			try {
				// Function to handle the sticky header
				function handleStickyHeader() {
					var scroll = $(window).scrollTop();
					var header = $('.site-header');
					if (scroll >= 30) {
						header.addClass('stickyHeader');
					} else {
						header.removeClass('stickyHeader');
					}
				}
				function siteContentOffset() {
					var header = $('.site-header');
					var banner = $('.site-content');
					var headerHeight = header.innerHeight();
					banner.css('margin-top', headerHeight + 'px');
				}

				// Initial calls
				siteContentOffset();
				handleStickyHeader();

				// Call the function when the window is scrolled
				$(window).scroll(handleStickyHeader);

				// Call the function when the window is resized
				$(window).resize(function () {
					handleStickyHeader();
					siteContentOffset();
					// Delayed call to handle any layout changes after resize
					setTimeout(function () {
						handleStickyHeader();
						siteContentOffset();
						$('.clsFix').removeClass('.clsFix');
					}, 1000);
				});

				//match-height
				$('[data-fix="height"]').matchHeight();

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

			} catch (err) {
				console.log(err);
			}
		},
		togglers: function () {

			// Faq accordion
			$(document).on('click', '.toggleFaqBtn', function (e) {
				e.stopPropagation(); // Prevents the event from bubbling up the DOM tree

				var clickedToggleBtn = $(this); // Refers to the specific button that was clicked

				$('.toggleFaqBtn').not(clickedToggleBtn).removeClass('active'); // Removes 'active' class from other buttons
				$('.toggleFaqBtn').not(clickedToggleBtn).parent('.item').removeClass('active'); // Removes 'active' class from other parent elements
				$('.toggleFaqBtn').not(clickedToggleBtn).siblings('.toggleBlock').slideUp(); // Hides other toggleBlock elements

				clickedToggleBtn.toggleClass('active'); // Toggles 'active' class on the clicked button
				clickedToggleBtn.parent('.item').toggleClass('active'); // Toggles 'active' class on the parent element
				clickedToggleBtn.siblings('.toggleBlock').slideToggle(); // Toggles visibility of the sibling toggleBlock element
			});

			// Footer toggleBtn
			$('.toggleBtn').click(function () {
				$('.toggleBtn')
					.not(this)
					.siblings('.toggleBlock')
					.slideUp();
				$(this).toggleClass('active');
				$('.toggleBtn').not(this).removeClass('active');
				$(this).siblings('.toggleBlock').slideToggle();
			});
			//custom tab
			$(".tab-btn").click(function () {
				// Remove 'active' class from all tab btns
				$(".tab-btn").removeClass("active");

				// Add 'active' class to the clicked tab btn
				$(this).addClass("active");

				// Hide all tab content panes
				$(".tab-item").addClass("hidden");

				// Get the target tab content based on data-target attribute
				var targetId = $(this).attr("data-target");
				$(targetId).removeClass("hidden");
			});

			// Custom tab and dropdown on mobile
			const customTabWrapper = document.querySelector('.ss-custom-tab');
			const dropbtn = document.querySelector('.dropBtn');
			const dropdownContent = document.querySelector('.tabNav');

			if (customTabWrapper) {
				// Function to update drop button text
				function updateDropButtonText(text) {
					dropbtn.textContent = text;
				}

				// Function to handle tab click
				function handleTabClick(e) {
					// Check if the clicked element is a navigation item
					if (e.target.classList.contains("nav-item")) {
						e.preventDefault(); // Prevent default link behavior
						const itemTarget = e.target.getAttribute("href").replace("#", "");
						const tabPane = document.getElementById(itemTarget); // Get the target tab pane

						if (tabPane) {
							// Remove 'active' class from all navigation items and hide all tab panes
							document.querySelectorAll('.nav-item').forEach(navItem => navItem.classList.remove('active'));
							document.querySelectorAll('.tabPane').forEach(tabPane => tabPane.classList.add('hidden'));

							// Add 'active' class to the clicked navigation item and show the corresponding tab pane
							e.target.classList.add('active');
							tabPane.classList.remove('hidden');

							// Update drop button text
							updateDropButtonText(e.target.textContent);

							// Toggle dropdown visibility (only if dropdown is visible on mobile)
							if (!dropdownContent.classList.contains('hidden')) {
								dropdownContent.classList.add('hidden');
								dropbtn.classList.remove('active');
							}
						}
					}
				}

				// Add event listener to handle tab navigation
				customTabWrapper.addEventListener('click', handleTabClick);

				// Add event listener to toggle dropdown visibility
				dropbtn.addEventListener('click', () => {
					dropdownContent.classList.toggle('hidden');
					dropbtn.classList.toggle('active');
				});

				// Update drop button text initially
				const initialActiveNavItem = document.querySelector('.ss-custom-tab .nav-item.active');
				if (initialActiveNavItem) {
					updateDropButtonText(initialActiveNavItem.textContent);
				}
			}
		},
		slider: function () {
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
		},
		gallery: function () {
			try {
				$('.fancybox').fancybox({
					openEffect: 'none',
					closeEffect: 'none',
				});
			} catch (err) {
				console.log(err);
			}
			// try {
			//     var fix = function () {
			//         var t = $(".woocommerce-product-gallery__trigger"), h = t.next(".flex-viewport").outerHeight() - 16;
			//         t.height(h);
			//     };
			//     $(window).bind("load resize", fix);
			//     $(".woocommerce-product-gallery .flex-control-nav li").on("click", function () {
			//         setTimeout(fix, 500);
			//     });
			// } catch (err) {
			//     console.log(err);
			// }
		},
	};
	$(function () {
		ss.init();
	});
})(jQuery);

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

