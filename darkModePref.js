// Check preferred mode of user on first page reloaded
if (
	localStorage.themeMode === 'dark' ||
	(!('themeMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
) {
	document.documentElement.classList.add('dark');
} else {
	document.documentElement.classList.remove('dark');
}

// Listening for user changes of preferred mode
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
	if (localStorage.themeMode === 'dark' || (!('themeMode' in localStorage) && event.matches)) {
		document.documentElement.classList.add('dark');
	} else {
		document.documentElement.classList.remove('dark');
	}
});
