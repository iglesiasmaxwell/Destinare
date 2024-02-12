/**
 * DECLARED IN darkModeIcons.js
 * let toggleLightPref = document.getElementById('lightModePref');
 * let toggleDarkPref = document.getElementById('darkModePref');
 * let toggleSystemPref = document.getElementById('systemModePref');
 */

// LIGHT
let themeLightIcon = document.getElementById('themeLightIcon');
let themeLightText = document.getElementById('themeLightText');
// DARK
let themeDarkIcon = document.getElementById('themeDarkIcon');
let themeDarkText = document.getElementById('themeDarkText');
// SYSTEM
let themeSystemIcon = document.getElementById('themeSystemIcon');
let themeSystemText = document.getElementById('themeSystemText');

function activeMode() {
	if (localStorage.getItem('themeMode') == 'light') {
		themeLightIcon.classList.add('!text-gray-500');
		themeLightIcon.classList.add('dark:!text-zinc-400');
		themeLightText.classList.add('!text-gray-800/80');
		themeLightText.classList.add('dark:!text-zinc-50/80');
	} else {
		themeLightIcon.classList.remove('!text-gray-500');
		themeLightIcon.classList.remove('dark:!text-zinc-400');
		themeLightText.classList.remove('!text-gray-800/80');
		themeLightText.classList.remove('dark:!text-zinc-50/80');
	}

	if (localStorage.getItem('themeMode') == 'dark') {
		themeDarkIcon.classList.add('!text-gray-500');
		themeDarkIcon.classList.add('dark:!text-zinc-400');
		themeDarkText.classList.add('!text-gray-800/80');
		themeDarkText.classList.add('dark:!text-zinc-50/80');
	} else {
		themeDarkIcon.classList.remove('!text-gray-500');
		themeDarkIcon.classList.remove('dark:!text-zinc-400');
		themeDarkText.classList.remove('!text-gray-800/80');
		themeDarkText.classList.remove('dark:!text-zinc-50/80');
	}

	if (!('themeMode' in localStorage)) {
		themeSystemIcon.classList.add('!text-gray-500');
		themeSystemIcon.classList.add('dark:!text-zinc-400');
		themeSystemText.classList.add('!text-gray-800/80');
		themeSystemText.classList.add('dark:!text-zinc-50/80');
	} else {
		themeSystemIcon.classList.remove('!text-gray-500');
		themeSystemIcon.classList.remove('dark:!text-zinc-400');
		themeSystemText.classList.remove('!text-gray-800/80');
		themeSystemText.classList.remove('dark:!text-zinc-50/80');
	}
}
activeMode();

toggleLightPref.addEventListener('click', function () {
	document.documentElement.classList.remove('dark');
	localStorage.setItem('themeMode', 'light');
	activeMode();
});
toggleDarkPref.addEventListener('click', function () {
	document.documentElement.classList.add('dark');
	localStorage.setItem('themeMode', 'dark');
	activeMode();
});
toggleSystemPref.addEventListener('click', function () {
	if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
		document.documentElement.classList.add('dark');
	} else {
		document.documentElement.classList.remove('dark');
	}
	localStorage.removeItem('themeMode');
	activeMode();
});

let prefModeToggle = document.getElementById('prefModeToggle');
/**
 * DECLARED IN darkModeIcons.js
 * let prefModeToggleIcon = document.getElementById('prefModeToggleIcon');
 */
let prefModeDropdown = document.getElementById('prefModeDropdown');

document.addEventListener('click', (event) => {
	if (event.target == prefModeToggle || event.target == prefModeToggleIcon) {
		if (prefModeDropdown.classList.contains('opacity-0') || prefModeDropdown.classList.contains('invisible')) {
			prefModeDropdown.classList.remove('opacity-0');
			prefModeDropdown.classList.remove('invisible');
		} else {
			prefModeDropdown.classList.add('opacity-0');
			prefModeDropdown.classList.add('invisible');
		}
	} else {
		prefModeDropdown.classList.add('opacity-0');
		prefModeDropdown.classList.add('invisible');
	}
});
