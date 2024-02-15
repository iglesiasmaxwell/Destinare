<?php
include_once '../api/fetchData.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth overflow-y-scroll overflow-x-hidden">

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
	<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- ICONS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
	<script src="https://kit.fontawesome.com/7a6da8ef9c.js" crossorigin="anonymous"></script>
	<!-- CSS -->
	<link rel="stylesheet" href="../css/app.css" />
	<!-- JAVASCRIPT BEFORE -->
	<script src="../js/dark-mode/darkModePref.js"></script>
</head>

<body class="bg-zinc-50 dark:bg-gray-900 text-gray-800 dark:text-zinc-50 font-Outfit">
	<nav id="navBar" class="fixed top-0 w-full transition-all duration-1000 z-50">
		<div id="navBarShade" class="h-16 w-full px-8 flex z-50 transition-all duration-1000">
			<div class="flex justify-between w-full text-gray-800/80 dark:text-zinc-50/80 items-center">
				<div>
					<a href="../view/index.php" class="font-medium text-gray-800 dark:text-zinc-50 text-2xl tracking-wide font-Pacifico select-none">Destinare</a>
				</div>
				<div class="flex justify-center space-x-12 font-Outfit select-none">
					<a href="#Discover" class="font-medium text-medium hover:text-black dark:hover:text-white transition ease-in duration-150">Discover</a>
					<a href="#Essential" class="font-medium text-medium hover:text-black dark:hover:text-white transition ease-in duration-150">Essential</a>
					<a href="#More" class="font-medium text-medium hover:text-black dark:hover:text-white transition ease-in duration-150">More</a>
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
					<div id="prefModeDropdown" class="absolute top-20 right-12 z-10 invisible opacity-0 bg-zinc-100/80 divide-y rounded-lg shadow w-32 dark:bg-gray-800/80 transition-opacity ease-in-out duration-200 select-none backdrop-blur">
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
	<header id="Discover" class="mt-24 mx-8">
		<h1 class="text-4xl font-JetbrainsMono font-semibold">
			<span class="font-Outfit text-gray-600 dark:text-zinc-300 uppercase select-none">Discover</span>
			<span><?= $eastKalimantanKey[0]; ?></span>
		</h1>

		<div class="grid w-full py-6 gap-6">
			<div id="scrollGallery-all-Con" class="group/more w-full h-fit bg-zinc-100/75 dark:bg-gray-800/50 px-3 py-4 rounded-lg relative shadow-md shadow-gray-300 dark:shadow-zinc-800">
				<p class="font-semibold font-Poppins text-xl mb-5 select-none">Explore</p>
				<p class="text-base font-Playfair font-medium w-56">The journeys and voyages for your true destination, begins.</p>
				<div class="flex float-right absolute top-4 right-4 gap-4 items-center">
					<button class="grid items-center slide-left w-10 h-10 rounded-full bg-zinc-200/50 dark:bg-gray-700/25 transition ease-in-out duration-100">
						<i class="ti ti-chevron-compact-left text-gray-800 dark:text-zinc-50 text-lg"></i>
					</button>
					<button class="grid items-center slide-right w-10 h-10 rounded-full bg-zinc-200/50 dark:bg-gray-700/25 transition ease-in-out duration-100">
						<i class="ti ti-chevron-compact-right text-gray-800 dark:text-zinc-50 text-lg"></i>
					</button>
				</div>
			</div>
			<div id="scrollGallery-all" class="snap-x snap-always snap-mandatory overflow-x-scroll pb-6 scroll-gallery scroll-smooth whitespace-nowrap">
				<div class="flex gap-3">
					<?php
					foreach ($eastKalimantanAll as $key => $array) {
					?>
						<div class="gallery snap-center flex-shrink-0">
							<a href="#">
								<?php if (empty($array['image-url']) || $array['image-url'] == '') : ?>
									<img class="select-none w-72 h-52 rounded-lg shadow-lg shadow-gray-300 dark:shadow-zinc-800 hover:brightness-110" src=<?= strval("../img/stock-image" . "(" . rand(1, 8) . ")" . ".jpg") ?> />
								<?php else : ?>
									<img class="select-none w-72 h-52 rounded-lg shadow-lg shadow-gray-300 dark:shadow-zinc-800 hover:brightness-110" src=<?= $array['image-url'] ?> />
								<?php endif; ?>
							</a>
							<div class="mt-1 mx-1 font-Outfit font-medium w-72">
								<p class="text-lg line-clamp-3 empty:hidden break-words whitespace-normal"><?= $key ?></p>
								<?php if (empty($array['tags']) || $array['tags'] == '') : ?>
									<p class="text-sm text-gray-600 dark:text-zinc-300 empty:hidden"><?= $array['city'] ?></p>
								<?php else : ?>
									<p class="text-sm text-gray-600 dark:text-zinc-300 line-clamp-3 break-words whitespace-normal"><?= $array['city'] ?> <i class="ti ti-point-filled text-xs"></i> <?= implode(', ', $array['tags']) ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</header>


	<section id="Essential" class="mt-12 mx-8">
		<h1 class="text-3xl font-JetbrainsMono font-semibold">
			<span class="font-Outfit text-gray-600 dark:text-zinc-300 uppercase select-none">Essential</span>
			<span><?= $eastKalimantanKey[0]; ?></span>
		</h1>

		<div class="flex w-full py-6 gap-6">
			<div id="scrollGallery-stay-Con" class="group/more w-52 min-w-52 h-52 bg-zinc-100/75 dark:bg-gray-800/50 p-3 rounded-lg relative shadow-md shadow-gray-300 dark:shadow-zinc-800">
				<p class="font-semibold font-Poppins text-xl mb-5 select-none">Stay</p>
				<p class="text-base font-Playfair font-medium">A mix of the charming, modern, and tried and true.</p>
				<div class="my-3">
					<a href="#" class="group-hover/more:opacity-100 opacity-0 group-hover/more:visible invisible font-Poppins text-sm underline underline-offset-2 transition-opacity duration-300 text-gray-600 dark:text-zinc-300 hover:text-black dark:hover:text-white">See all</a>
				</div>
				<div class="flex float-right absolute bottom-4 right-4 gap-4 items-center">
					<button class="grid items-center slide-left w-10 h-10 rounded-full bg-zinc-200/50 dark:bg-gray-700/25 transition ease-in-out duration-100">
						<i class="ti ti-chevron-compact-left text-gray-800 dark:text-zinc-50 text-lg"></i>
					</button>
					<button class="grid items-center slide-right w-10 h-10 rounded-full bg-zinc-200/50 dark:bg-gray-700/25 transition ease-in-out duration-100">
						<i class="ti ti-chevron-compact-right text-gray-800 dark:text-zinc-50 text-lg"></i>
					</button>
				</div>
			</div>
			<div id="scrollGallery-stay" class="snap-x snap-always snap-mandatory overflow-x-scroll pb-6 scroll-gallery scroll-smooth whitespace-nowrap">
				<div class="flex gap-3">
					<?php
					$count = 0;
					$limit = 8;
					foreach ($eastKalimantanStay as $key => $array) if ($count++ < $limit) {
					?>
						<div class="gallery snap-center flex-shrink-0">
							<a href="#">
								<?php if (empty($array['image-url']) || $array['image-url'] == '') : ?>
									<img class="select-none w-72 h-52 rounded-lg shadow-lg shadow-gray-300 dark:shadow-zinc-800 hover:brightness-110" src=<?= strval("../img/stock-image" . "(" . rand(1, 8) . ")" . ".jpg") ?> />
								<?php else : ?>
									<img class="select-none w-72 h-52 rounded-lg shadow-lg shadow-gray-300 dark:shadow-zinc-800 hover:brightness-110" src=<?= $array['image-url'] ?> />
								<?php endif; ?>
							</a>
							<div class="mt-1 mx-1 font-Outfit font-medium w-72">
								<p class="text-lg line-clamp-3 empty:hidden break-words whitespace-normal"><?= $key ?></p>
								<?php if (empty($array['tags']) || $array['tags'] == '') : ?>
									<p class="text-sm text-gray-600 dark:text-zinc-300 empty:hidden"><?= $array['city'] ?></p>
								<?php else : ?>
									<p class="text-sm text-gray-600 dark:text-zinc-300 line-clamp-3 break-words whitespace-normal"><?= $array['city'] ?> <i class="ti ti-point-filled text-xs"></i> <?= implode(', ', $array['tags']) ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>

		<div class="flex w-full py-6 gap-6">
			<div id="scrollGallery-eat-Con" class="group/more w-52 min-w-52 h-52 bg-zinc-100/75 dark:bg-gray-800/50 p-3 rounded-lg relative shadow-md shadow-gray-300 dark:shadow-zinc-800">
				<p class="font-semibold font-Poppins text-xl mb-5 select-none">Eat</p>
				<p class="text-base font-Playfair font-medium">Can't-miss spots to dine, drink, and feast.</p>
				<div class="my-3">
					<a href="#" class="group-hover/more:opacity-100 opacity-0 group-hover/more:visible invisible font-Poppins text-sm underline underline-offset-2 transition-opacity duration-300 text-gray-600 dark:text-zinc-300 hover:text-black dark:hover:text-white">See all</a>
				</div>
				<div class="flex float-right absolute bottom-4 right-4 gap-4 items-center">
					<button class="grid items-center slide-left w-10 h-10 rounded-full bg-zinc-200/50 dark:bg-gray-700/25 transition ease-in-out duration-100">
						<i class="ti ti-chevron-compact-left text-gray-800 dark:text-zinc-50 text-lg"></i>
					</button>
					<button class="grid items-center slide-right w-10 h-10 rounded-full bg-zinc-200/50 dark:bg-gray-700/25 transition ease-in-out duration-100">
						<i class="ti ti-chevron-compact-right text-gray-800 dark:text-zinc-50 text-lg"></i>
					</button>
				</div>
			</div>
			<div id="scrollGallery-eat" class="snap-x snap-always snap-mandatory overflow-x-scroll pb-6 scroll-gallery scroll-smooth whitespace-nowrap">
				<div class="flex gap-3">
					<?php
					$count = 0;
					$limit = 8;
					foreach ($eastKalimantanEat as $key => $array) if ($count++ < $limit) {
					?>
						<div class="gallery snap-center flex-shrink-0">
							<a href="#">
								<?php if (empty($array['image-url']) || $array['image-url'] == '') : ?>
									<img class="select-none w-72 h-52 rounded-lg shadow-lg shadow-gray-300 dark:shadow-zinc-800 hover:brightness-110" src=<?= strval("../img/stock-image" . "(" . rand(1, 8) . ")" . ".jpg") ?> />
								<?php else : ?>
									<img class="select-none w-72 h-52 rounded-lg shadow-lg shadow-gray-300 dark:shadow-zinc-800 hover:brightness-110" src=<?= $array['image-url'] ?> />
								<?php endif; ?>
							</a>
							<div class="mt-1 mx-1 font-Outfit font-medium w-72">
								<p class="text-lg line-clamp-3 empty:hidden break-words whitespace-normal"><?= $key ?></p>
								<?php if (empty($array['tags']) || $array['tags'] == '') : ?>
									<p class="text-sm text-gray-600 dark:text-zinc-300 empty:hidden"><?= $array['city'] ?></p>
								<?php else : ?>
									<p class="text-sm text-gray-600 dark:text-zinc-300 line-clamp-3 break-words whitespace-normal"><?= $array['city'] ?> <i class="ti ti-point-filled text-xs"></i> <?= implode(', ', $array['tags']) ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>

		<div class="flex w-full py-6 gap-6">
			<div id="scrollGallery-do-Con" class="group/more w-52 min-w-52 h-52 bg-zinc-100/75 dark:bg-gray-800/50 p-3 rounded-lg relative shadow-md shadow-gray-300 dark:shadow-zinc-800">
				<p class="font-semibold font-Poppins text-xl mb-5 select-none">Do</p>
				<p class="text-base font-Playfair font-medium">Places to see, ways to wander, and signature experiences.</p>
				<div class="my-3">
					<a href="#" class="group-hover/more:opacity-100 opacity-0 group-hover/more:visible invisible font-Poppins text-sm underline underline-offset-2 transition-opacity duration-300 text-gray-600 dark:text-zinc-300 hover:text-black dark:hover:text-white">See all</a>
				</div>
				<div class="flex float-right absolute bottom-4 right-4 gap-4 items-center">
					<button class="grid items-center slide-left w-10 h-10 rounded-full bg-zinc-200/50 dark:bg-gray-700/25 transition ease-in-out duration-100">
						<i class="ti ti-chevron-compact-left text-gray-800 dark:text-zinc-50 text-lg"></i>
					</button>
					<button class="grid items-center slide-right w-10 h-10 rounded-full bg-zinc-200/50 dark:bg-gray-700/25 transition ease-in-out duration-100">
						<i class="ti ti-chevron-compact-right text-gray-800 dark:text-zinc-50 text-lg"></i>
					</button>
				</div>
			</div>
			<div id="scrollGallery-do" class="snap-x snap-always snap-mandatory overflow-x-scroll pb-6 scroll-gallery scroll-smooth whitespace-nowrap">
				<div class="flex gap-3">
					<?php
					$count = 0;
					$limit = 8;
					foreach ($eastKalimantanDo as $key => $array) if ($count++ < $limit) {
					?>
						<div class="gallery snap-center flex-shrink-0">
							<a href="#">
								<?php if (empty($array['image-url']) || $array['image-url'] == '') : ?>
									<img class="select-none w-72 h-52 rounded-lg shadow-lg shadow-gray-300 dark:shadow-zinc-800 hover:brightness-110" src=<?= strval("../img/stock-image" . "(" . rand(1, 8) . ")" . ".jpg") ?> />
								<?php else : ?>
									<img class="select-none w-72 h-52 rounded-lg shadow-lg shadow-gray-300 dark:shadow-zinc-800 hover:brightness-110" src=<?= $array['image-url'] ?> />
								<?php endif; ?>
							</a>
							<div class="mt-1 mx-1 font-Outfit font-medium w-72">
								<p class="text-lg line-clamp-3 empty:hidden break-words whitespace-normal"><?= $key ?></p>
								<?php if (empty($array['tags']) || $array['tags'] == '') : ?>
									<p class="text-sm text-gray-600 dark:text-zinc-300 empty:hidden"><?= $array['city'] ?></p>
								<?php else : ?>
									<p class="text-sm text-gray-600 dark:text-zinc-300 line-clamp-3 break-words whitespace-normal"><?= $array['city'] ?> <i class="ti ti-point-filled text-xs"></i> <?= implode(', ', $array['tags']) ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>

	</section>
	<footer id="More" class="bg-zinc-100/75 dark:bg-gray-800/50 w-full py-6 px-20 relative">
		<div class="flex justify-between items-center">
			<div class="bg-zinc-50/80 dark:bg-gray-900/50 rounded-lg px-5 py-3 shadow dark:shadow-lg shadow-gray-300 dark:shadow-zinc-800">
				<p class="font-medium text-gray-800 dark:text-zinc-50 text-lg tracking-wide font-Pacifico select-none">Destinare</p>
				<p class="text-xs text-gray-800/80 dark:text-zinc-50/80 select-none">© 2024 Destinare All rights reserved.</p>
			</div>
			<p class="text-xs text-gray-800/35 dark:text-zinc-50/35 select-none">This website is only made for education purposes, and not for any monetary gain.</p>
			<div class="flex gap-6 justify-center items-center bg-zinc-50/80 dark:bg-gray-900/50 rounded-lg px-5 py-3 shadow dark:shadow-lg shadow-gray-300 dark:shadow-zinc-800">
				<a href="#" class="group/icon text-gray-800/80 dark:text-zinc-50/80">
					<i class="fa-brands fa-x-twitter fa-fw fa-lg group-hover/icon:text-black dark:group-hover/icon:text-white transition ease-in duration-150"></i>
				</a>
				<a href="#" class="group/icon text-gray-800/80 dark:text-zinc-50/80">
					<i class="fa-brands fa-instagram fa-fw fa-lg group-hover/icon:text-black dark:group-hover/icon:text-white transition ease-in duration-150"></i>
				</a>
			</div>
		</div>
	</footer>
	<div id="topButton" class="group/button fixed bottom-5 right-5 transition ease-in-out duration-300 cursor-pointer">
		<div class="grid justify-center items-center backdrop-blur bg-zinc-50/75 dark:bg-gray-900/75 hover:bg-zinc-100/75 hover:dark:bg-gray-800/75 w-12 h-12 rounded-full border border-gray-700/10 dark:border-zinc-400/10 shadow-md shadow-gray-300 dark:shadow-zinc-800">
			<i class="group-hover/button:translate-y-[-7.5px] ti ti-chevron-compact-up text-gray-800 dark:text-zinc-50 text-xl transition ease-in-out duration-1000"></i>
		</div>
	</div>
</body>
<!-- JAVASCRIPT AFTER -->
<script src="../js/dark-mode/darkModeIcons.js"></script>
<script src="../js/dark-mode/toggleDark.js"></script>
<script src="../js/scrollGalleryButton.js"></script>
<script src="../js/navScrollBlur.js"></script>
<script src="../js/goTop.js"></script>

</html>