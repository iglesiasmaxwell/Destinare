let prefModeToggleIcon = document.getElementById('prefModeToggleIcon');

function lightMode() {
	if (prefModeToggleIcon.classList.contains('ti-moon-filled')) {
		prefModeToggleIcon.classList.remove('ti-moon-filled');
	} else if (prefModeToggleIcon.classList.contains('ti-moon')) {
		prefModeToggleIcon.classList.remove('ti-moon');
	} else if (prefModeToggleIcon.classList.contains('ti-sun')) {
		prefModeToggleIcon.classList.remove('ti-sun');
	}
	prefModeToggleIcon.classList.add('ti-sun-filled');
}

function darkMode() {
	if (prefModeToggleIcon.classList.contains('ti-sun-filled')) {
		prefModeToggleIcon.classList.remove('ti-sun-filled');
	} else if (prefModeToggleIcon.classList.contains('ti-sun')) {
		prefModeToggleIcon.classList.remove('ti-sun');
	} else if (prefModeToggleIcon.classList.contains('ti-moon')) {
		prefModeToggleIcon.classList.remove('ti-moon');
	}
	prefModeToggleIcon.classList.add('ti-moon-filled');
}

function systemMode() {
	if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
		if (prefModeToggleIcon.classList.contains('ti-sun-filled')) {
			prefModeToggleIcon.classList.remove('ti-sun-filled');
		} else if (prefModeToggleIcon.classList.contains('ti-sun')) {
			prefModeToggleIcon.classList.remove('ti-sun');
		} else if (prefModeToggleIcon.classList.contains('ti-moon-filled')) {
			prefModeToggleIcon.classList.remove('ti-moon-filled');
		}
		prefModeToggleIcon.classList.add('ti-moon');
	} else {
		if (prefModeToggleIcon.classList.contains('ti-moon-filled')) {
			prefModeToggleIcon.classList.remove('ti-moon-filled');
		} else if (prefModeToggleIcon.classList.contains('ti-moon')) {
			prefModeToggleIcon.classList.remove('ti-moon');
		} else if (prefModeToggleIcon.classList.contains('ti-sun-filled')) {
			prefModeToggleIcon.classList.remove('ti-sun-filled');
		}
		prefModeToggleIcon.classList.add('ti-sun');
	}
}

/*
 * Check preferred mode of user on page reloaded
 */
if (!('themeMode' in localStorage)) {
	systemMode();
} else if (localStorage.getItem('themeMode') == 'light') {
	lightMode();
} else if (localStorage.getItem('themeMode') == 'dark') {
	darkMode();
}

/**
 * Listening for user changes of preferred mode
 */
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
	systemMode();
});

let toggleLightPref = document.getElementById('lightModePref');
let toggleDarkPref = document.getElementById('darkModePref');
let toggleSystemPref = document.getElementById('systemModePref');

toggleLightPref.addEventListener('click', () => {
	lightMode();
});
toggleDarkPref.addEventListener('click', () => {
	darkMode();
});
toggleSystemPref.addEventListener('click', () => {
	systemMode();
});
