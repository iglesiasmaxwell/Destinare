window.addEventListener('DOMContentLoaded', () => {
	new scrollGallery('scrollGallery-all');
	new scrollGallery('scrollGallery-stay');
	new scrollGallery('scrollGallery-eat');
	new scrollGallery('scrollGallery-do');
});

class scrollGallery {
	constructor(scrollGalleryID) {
		/* Container */
		this.scrollGalleryCon = document.getElementById(scrollGalleryID + '-Con');
		this.scrollGallery = document.getElementById(scrollGalleryID);

		/* Button */
		this.slideLeft = this.scrollGalleryCon.getElementsByClassName('slide-left')[0];
		this.slideRight = this.scrollGalleryCon.getElementsByClassName('slide-right')[0];

		/* Button Icon */
		this.slideLeftIcon = this.slideLeft.getElementsByClassName('ti-chevron-compact-left')[0];
		this.slideRightIcon = this.slideRight.getElementsByClassName('ti-chevron-compact-right')[0];

		let slideAmount = 300;

		this.slide = (slideAmount) => {
			this.scrollGallery.scrollLeft += slideAmount;
		};

		/* Reset scrollLeft amount after reload */
		this.scrollGallery.scrollLeft = 0;

		/* Check if scroll gallery is not scrollable (fit in viewport) */
		if (this.scrollGallery.scrollWidth <= 1152 && this.scrollGallery.id == 'scrollGallery-all') {
			this.slideLeft.classList.add('hidden');
			this.slideRight.classList.add('hidden');
		} else if (this.scrollGallery.scrollWidth <= 912) {
			this.slideLeft.classList.add('hidden');
			this.slideRight.classList.add('hidden');
		} else {
			this.slideLeft.classList.add('bg-zinc-200/20');
			this.slideLeft.classList.add('dark:bg-gray-700/10');
			this.slideLeftIcon.classList.add('text-gray-400/85');
			this.slideLeftIcon.classList.add('dark:text-zinc-500');
			if (
				this.slideRight.classList.contains('bg-zinc-200/20') ||
				this.slideRight.classList.contains('dark:bg-gray-700/10') ||
				this.slideRightIcon.classList.remove('text-gray-400/85') ||
				this.slideRightIcon.classList.remove('dark:text-zinc-500')
			) {
				this.slideRight.classList.remove('bg-zinc-200/20');
				this.slideRight.classList.remove('dark:bg-gray-700/10');
				this.slideRightIcon.classList.remove('text-gray-400/85');
				this.slideRightIcon.classList.remove('dark:text-zinc-500');
			}
		}

		/* Left Button */
		this.slideLeft.addEventListener('click', () => {
			this.slide(-slideAmount);
		});
		/* Right Button */
		this.slideRight.addEventListener('click', () => {
			this.slide(slideAmount);
			console.log(this.scrollGallery.scrollWidth);
		});

		/**
		 * Check if scrollGallery starts or ends
		 */
		let lastScrollLeft = this.scrollGallery.scrollLeft;
		this.scrollGallery.addEventListener('scroll', () => {
			let nowScrollLeft = this.scrollGallery.scrollLeft;

			if (lastScrollLeft > nowScrollLeft) {
				this.slideRight.classList.remove('bg-zinc-200/20');
				this.slideRight.classList.remove('dark:bg-gray-700/10');
				this.slideRightIcon.classList.remove('text-gray-400/85');
				this.slideRightIcon.classList.remove('dark:text-zinc-500');
				if (this.scrollGallery.scrollLeft <= slideAmount) {
					this.slideLeft.classList.add('bg-zinc-200/20');
					this.slideLeft.classList.add('dark:bg-gray-700/10');
					this.slideLeftIcon.classList.add('text-gray-400/85');
					this.slideLeftIcon.classList.add('dark:text-zinc-500');
				}
			} else if (lastScrollLeft < nowScrollLeft) {
				this.slideRight.classList.remove('bg-zinc-200/20');
				this.slideRight.classList.remove('dark:bg-gray-700/10');
				this.slideRightIcon.classList.remove('text-gray-400/85');
				this.slideRightIcon.classList.remove('dark:text-zinc-500');
				if (this.scrollGallery.scrollLeft > 0) {
					this.slideLeft.classList.remove('bg-zinc-200/20');
					this.slideLeft.classList.remove('dark:bg-gray-700/10');
					this.slideLeftIcon.classList.remove('text-gray-400/85');
					this.slideLeftIcon.classList.remove('dark:text-zinc-500');
					if (
						this.scrollGallery.scrollLeft + this.scrollGallery.offsetWidth >
						this.scrollGallery.scrollWidth - slideAmount
					) {
						this.slideRight.classList.add('bg-zinc-200/20');
						this.slideRight.classList.add('dark:bg-gray-700/10');
						this.slideRightIcon.classList.add('text-gray-400/85');
						this.slideRightIcon.classList.add('dark:text-zinc-500');
					}
				}
			}
			lastScrollLeft = nowScrollLeft;
		});
	}
}
