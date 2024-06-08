const navBtn = document.querySelector('.nav__btn')
const navOverlay = document.querySelector('.nav__overlay')
const menu = document.querySelector('.nav__navbar')
const navLinks = document.querySelectorAll('.nav__link')
const btns = document.querySelectorAll('.suggested__btn')
const tabsBtn = document.querySelectorAll('.tabs__btn')
const tabsContent = document.querySelectorAll('.tabs__content')
const stripeLabel = document.querySelector('.p-FieldLabel')

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
	loop: true,
	spaceBetween: 30,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
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

btns.forEach(btn => {
	btn.addEventListener('click', () => {
		// console.log(btn.id)
		document.querySelector('.active').classList.remove('active')
		btn.classList.add('active')

		checkProducts()
	})

	const products = document.querySelectorAll('.suggested__box')

	function checkProducts() {
		products.forEach(product => {
			if (btn.id === product.id) {
				console.log('to samo id')
				product.classList.add('active')
			} else {
				console.log('inne id')
				product.classList.remove('active')
			}
		})
	}
})

const pizzas = document.querySelectorAll('#pizza.suggested__box')

function activePizzas() {
	pizzas.forEach(pizza => {
		pizza.classList.add('active')
	})
}

activePizzas()

tabsBtn.forEach(btn => {
	btn.addEventListener('click', () => {
		btn.nextElementSibling.classList.toggle('active')
	})
})
