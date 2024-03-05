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


const servicespaSlider = new Swiper('.servicespa-slider', {
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

window.initializeCarousel = servicespaSlider;



const servicesciSlider = new Swiper('.servicesci-slider', {
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

window.initializeCarousel = servicesciSlider;



const servicespbtlSlider = new Swiper('.servicespbtl-slider', {
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

window.initializeCarousel = servicespbtlSlider;

const servicesrpSlider = new Swiper('.servicesrp-slider', {
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

window.initializeCarousel = servicesrpSlider;

const servicescdSlider = new Swiper('.servicescd-slider', {
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

window.initializeCarousel = servicescdSlider;


const servicesdiSlider = new Swiper('.servicesdi-slider', {
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

window.initializeCarousel = servicesdiSlider;
