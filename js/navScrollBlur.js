let navBarShade = document.getElementById('navBarShade');

window.addEventListener('scroll', function () {
	let nowScrollPos = window.scrollY;

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
