// const navbar = document.getElementById('navBar');

// let lastScrollTop = 0;
// addEventListener('scroll', () => {
// 	// Current scroll position
// 	const scrollTop = window.scrollY || document.documentElement.scrollTop;

// 	// check scroll direction
// 	const distance = scrollTop - lastScrollTop;
// 	const currentTop = parseInt(getComputedStyle(navbar).top.split('px'));

// 	// Clamp value between -80 and 0
// 	let amount = Math.max(
// 		Math.min(
// 			currentTop +
// 				(distance < 0
// 					? Math.abs(distance) // scrolling up
// 					: -Math.abs(distance)) * // scrolling down
// 					40, // (1)
// 			0
// 		),
// 		-80
// 	);

// 	console.log(amount, currentTop, Math.abs(distance));

// 	navbar.style.top = `${amount}px`;

// 	lastScrollTop = scrollTop;
// });

let navBar = document.getElementById('navBar');

let lastScrollpos = window.scrollY;

window.addEventListener('scroll', () => {
	let nowScrollPos = window.scrollY;

	/* Hide navBar on scroll */
	if (lastScrollpos > nowScrollPos) {
		navBar.style.top = '0';
	} else if (nowScrollPos > 95) {
		navBar.style.top = '-65px';
	}
	lastScrollpos = nowScrollPos;
});
