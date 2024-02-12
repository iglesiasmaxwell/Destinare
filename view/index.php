<?php
include_once('../api/fetchData.php');
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Home - Destinare</title>
	<!-- TAILWIND -->
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="../js/config/tailwindConfig.js"></script>
	<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<!-- FONTS FAMILIES -->
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet" />
	<!-- ICONS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
	<script src="https://kit.fontawesome.com/7a6da8ef9c.js" crossorigin="anonymous"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="../css/app.css" />
	<!-- JAVASCRIPT BEFORE -->
	<script src="../js/dark-mode/darkModePref.js"></script>
</head>

<body class="bg-zinc-50 dark:bg-gray-900 text-gray-800 dark:text-zinc-50 font-Outfit">
	<nav id="navBar" class="fixed top-0 w-full transparent transition-all duration-1000">
		<div id="navBarShade" class="h-16 w-full px-8 flex z-50 transparent transition-all duration-1000">
			<div class="flex justify-between w-full text-gray-800/80 dark:text-zinc-50/80 items-center">
				<div>
					<a href="index.html" class="font-medium text-gray-800 dark:text-zinc-50 text-2xl tracking-wide font-Pacifico select-none">Destinare</a>
				</div>
				<div class="flex justify-center space-x-12 font-Outfit select-none">
					<a href="#" class="font-semibold text-medium hover:text-black dark:hover:text-white transition ease-in duration-150">Home</a>
					<a href="#" class="font-semibold text-medium hover:text-black dark:hover:text-white transition ease-in duration-150">Essential</a>
					<a href="#" class="font-semibold text-medium hover:text-black dark:hover:text-white transition ease-in duration-150">Other</a>
				</div>
				<div class="flex justify-end space-x-4 items-center">
					<div>
						<button id="prefModeToggle" class="group/icon inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg dark:text-white" type="button">
							<i id="prefModeToggleIcon" class="text-xl ti text-gray-800/80 dark:text-zinc-50/80 group-hover/icon:text-black dark:group-hover/icon:text-white transition-all ease-in duration-200"></i>
						</button>
					</div>
					<a class="group/icon text-gray-800/80 dark:text-zinc-50/80" href="https://github.com/iglesiasmaxwell/destinare">
						<i class="fa-brands fa-github fa-fw fa-lg group-hover/icon:text-black dark:group-hover/icon:text-white transition ease-in duration-150"></i>
					</a>
					<div id="prefModeDropdown" class="absolute top-20 right-12 z-10 invisible opacity-0 bg-zinc-100/75 divide-y rounded-lg shadow w-32 dark:bg-gray-800/75 transition-opacity ease-in-out duration-200 select-none">
						<ul class="text-sm">
							<li id="lightModePref" class="group/icon px-2.5 py-2 hover:bg-zinc-200 dark:hover:bg-gray-700 rounded-t-lg hover:text-black dark:hover:text-white flex items-center space-x-3 transition cursor-pointer">
								<i id="themeLightIcon" class="group-hover/icon:!text-black dark:group-hover/icon:!text-white text-xl ti ti-sun-filled text-gray-400 dark:text-zinc-500"></i>
								<p id="themeLightText" class="group-hover/icon:!text-black dark:group-hover/icon:!text-white text-base font-Outfit text-gray-500/80 dark:text-zinc-400/80">
									Light
								</p>
							</li>
							<li id="darkModePref" class="group/icon px-2.5 py-2 hover:bg-zinc-200 dark:hover:bg-gray-700 rounded-lg hover:text-black dark:hover:text-white flex items-center space-x-3 transition cursor-pointer">
								<i id="themeDarkIcon" class="group-hover/icon:!text-black dark:group-hover/icon:!text-white text-xl ti ti-moon-filled text-gray-400 dark:text-zinc-500"></i>
								<p id="themeDarkText" class="group-hover/icon:!text-black dark:group-hover/icon:!text-white text-base font-Outfit text-gray-500/80 dark:text-zinc-400/80">
									Dark
								</p>
							</li>
							<li id="systemModePref" class="group/icon px-2.5 py-2 hover:bg-zinc-200 dark:hover:bg-gray-700 rounded-b-lg flex items-center space-x-3 transition cursor-pointer">
								<i id="themeSystemIcon" class="group-hover/icon:!text-black dark:group-hover/icon:!text-white text-xl ti ti-info-circle-filled text-gray-400 dark:text-zinc-500"></i>
								<p id="themeSystemText" class="group-hover/icon:!text-black dark:group-hover/icon:!text-white text-base font-Outfit text-gray-500/80 dark:text-zinc-400/80">
									System
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<hr class="border-gray-800/5 dark:border-zinc-50/5 z-20" />
	</nav>
	<section class="h-screen mt-24 mx-8">
		<h1 class="text-3xl font-JetbrainsMono font-semibold">
			<span class="font-Outfit text-4xl text-gray-600 dark:text-zinc-300 uppercase">Discover</span>
			<span><?= $provinceSelect ?></span>
		</h1>
	</section>
</body>
<!-- JAVASCRIPT AFTER -->
<script src="../js/dark-mode/darkModeIcons.js"></script>
<script src="../js/dark-mode/toggleDark.js"></script>
<script src="../js/navScroll.js"></script>

</html>