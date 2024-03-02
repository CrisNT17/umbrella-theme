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


const homeSlider = new Swiper('.home-slider', {
	slidesPerView: 1,
	spaceBetween: 0,
	loop: true,
	loopedSlides: 1,
	autoplay: {
		delay: 3500,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	 },
})

window.initializeCarousel = homeSlider;
