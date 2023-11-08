const navBtn = document.querySelector('.nav__btn')
const navOverlay = document.querySelector('.nav__overlay')
const menu = document.querySelector('.nav__navbar')
const navLinks = document.querySelectorAll('.nav__link')

const handleNav = () => {
	menu.classList.toggle('active')
	navBtn.classList.toggle('active')
	navOverlay.classList.toggle('active')

	navLinks.forEach(navLink => {
		navLink.addEventListener('click', () => {
			menu.classList.remove('active')
			navBtn.classList.remove('active')
			navOverlay.classList.remove('active')
		})
	})

	navOverlay.addEventListener('click', () => {
		menu.classList.remove('active')
		navBtn.classList.remove('active')
		navOverlay.classList.remove('active')
	})
}

navBtn.addEventListener('click', handleNav)

var swiper = new Swiper('.header__swiper', {
	pagination: {
		el: '.header__pagination',
	},

	navigation: {
		nextEl: '.header__next',
		prevEl: '.header__prev',
	},
})

var swiperGallery = new Swiper('.gallery__swiper', {
	pagination: {
		el: '.gallery__pagination',
	},

	navigation: {
		nextEl: '.gallery__next',
		prevEl: '.gallery__prev',
	},
	breakpoints: {
		568: {
			slidesPerView: 2,
		},

		768: {
			slidesPerView: 2,
		},

		992: {
			slidesPerView: 3,
		},

		1230: {
			slidesPerView: 4,
		},
	},
	loop: true,
	centeredSlides: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
})
