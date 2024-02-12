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

let lastScrollpos = window.scrollY;
let navBar = document.getElementById('navBar');
let navBarShade = document.getElementById('navBarShade');
window.addEventListener('scroll', function () {
	/* Hide navBar on scroll */
	let nowScrollPos = window.scrollY;
	console.log(nowScrollPos);
	if (lastScrollpos > nowScrollPos) {
		navBar.style.top = '0';
	} else if (nowScrollPos > 95) {
		navBar.style.top = '-65px';
	}
	lastScrollpos = nowScrollPos;

	/* Transparent navBar when scrollY is 0 */
	if (nowScrollPos === 0) {
		navBarShade.classList.remove('backdrop-blur');
		navBarShade.classList.remove('bg-zinc-50/75');
		navBarShade.classList.remove('dark:bg-gray-900/75');
	} else {
		navBarShade.classList.add('backdrop-blur');
		navBarShade.classList.add('bg-zinc-50/75');
		navBarShade.classList.add('dark:bg-gray-900/75');
	}
});
