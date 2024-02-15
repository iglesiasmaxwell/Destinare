let topButton = document.getElementById('topButton');

topButton.addEventListener('click', () => {
	window.scrollTo({ top: 0 });
});

window.addEventListener('DOMContentLoaded', () => {
	let nowScrollPos = window.scrollY;

	if (nowScrollPos === 0) {
		topButton.classList.add('opacity-0');
		topButton.classList.add('invisible');
	} else {
		topButton.classList.remove('opacity-0');
		topButton.classList.remove('invisible');
	}
});

window.addEventListener('scroll', () => {
	let nowScrollPos = window.scrollY;

	/* hide button when scrollY is 0 */
	if (nowScrollPos === 0) {
		topButton.classList.add('opacity-0');
		topButton.classList.add('invisible');
	} else {
		topButton.classList.remove('opacity-0');
		topButton.classList.remove('invisible');
	}
});
