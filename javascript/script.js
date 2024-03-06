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
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
})

const customersSlider = new Swiper('.customers-slider', {
	slidesPerView: 4,
	spaceBetween: 40,
	loop: true,
	loopedSlides: 1,
	autoplay: {
		delay: 3500,
	},
	breakpoints: {
		1024: {
			slidesPerView: 4,
			spaceBetween: 30,
		},
		767: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
		425: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
})

const aboutUsSlider = new Swiper('.about-us-slider', {
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

const ourValuesSlider = new Swiper('.our-values-slider', {
	slidesPerView: 1,
	spaceBetween: 0,
	loop: true,
	loopedSlides: 1,
	autoplay: {
		delay: 3500,
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
})

const awardsSlider = new Swiper('.awards-slider', {
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

const testimonialsSlider = new Swiper('.testimonials-slider', {
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

const serviceRightSlider = new Swiper('.service-right-slider', {
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

const serviceLeftSlider = new Swiper('.service-right-slider', {
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

// const servicespaSlider = new Swiper('.servicespa-slider', {
// 	slidesPerView: 1,
// 	spaceBetween: 0,
// 	loop: true,
// 	loopedSlides: 1,
// 	autoplay: {
// 		delay: 3500,
// 	},
// 	navigation: {
// 		nextEl: '.swiper-button-next',
// 		prevEl: '.swiper-button-prev',
// 	 },
// })

// const servicesciSlider = new Swiper('.servicesci-slider', {
// 	slidesPerView: 1,
// 	spaceBetween: 0,
// 	loop: true,
// 	loopedSlides: 1,
// 	autoplay: {
// 		delay: 3500,
// 	},
// 	navigation: {
// 		nextEl: '.swiper-button-next',
// 		prevEl: '.swiper-button-prev',
// 	 },
// })

// const servicespbtlSlider = new Swiper('.servicespbtl-slider', {
// 	slidesPerView: 1,
// 	spaceBetween: 0,
// 	loop: true,
// 	loopedSlides: 1,
// 	autoplay: {
// 		delay: 3500,
// 	},
// 	navigation: {
// 		nextEl: '.swiper-button-next',
// 		prevEl: '.swiper-button-prev',
// 	 },
// })

// const servicesrpSlider = new Swiper('.servicesrp-slider', {
// 	slidesPerView: 1,
// 	spaceBetween: 0,
// 	loop: true,
// 	loopedSlides: 1,
// 	autoplay: {
// 		delay: 3500,
// 	},
// 	navigation: {
// 		nextEl: '.swiper-button-next',
// 		prevEl: '.swiper-button-prev',
// 	 },
// })

// const servicescdSlider = new Swiper('.servicescd-slider', {
// 	slidesPerView: 1,
// 	spaceBetween: 0,
// 	loop: true,
// 	loopedSlides: 1,
// 	autoplay: {
// 		delay: 3500,
// 	},
// 	navigation: {
// 		nextEl: '.swiper-button-next',
// 		prevEl: '.swiper-button-prev',
// 	 },
// })

// const servicesdiSlider = new Swiper('.servicesdi-slider', {
// 	slidesPerView: 1,
// 	spaceBetween: 0,
// 	loop: true,
// 	loopedSlides: 1,
// 	autoplay: {
// 		delay: 3500,
// 	},
// 	navigation: {
// 		nextEl: '.swiper-button-next',
// 		prevEl: '.swiper-button-prev',
// 	 },
// })

window.initializeCarousel = homeSlider;
window.initializeCarousel = customersSlider;
window.initializeCarousel = aboutUsSlider;
window.initializeCarousel = ourValuesSlider;
window.initializeCarousel = awardsSlider;
window.initializeCarousel = testimonialsSlider;
window.initializeCarousel = serviceRightSlider;
window.initializeCarousel = serviceLeftSlider;
// window.initializeCarousel = servicespaSlider;
// window.initializeCarousel = servicesciSlider;
// window.initializeCarousel = servicespbtlSlider;
// window.initializeCarousel = servicesrpSlider;
// window.initializeCarousel = servicescdSlider;
// window.initializeCarousel = servicesdiSlider;
