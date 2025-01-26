$(document).ready(function () {
	let searchBtn = document.getElementById("searchBtn");
	let mSearchBtn = document.getElementById("mSearchBtn");
	let closeSearch = document.getElementById("closeSearch");

	let closeMenu = document.getElementById("closeMenu");

	let gridBtn = document.getElementById("mGridBtn");

	let gridView = document.getElementById("gridView");
	let mobileSearchView = document.getElementById("mobileSearch");
	let menuBtn = document.getElementById("menuBtn");

	let mobileSearchField = document.getElementById("mTextField");

	mSearchBtn.onclick = function () {
		if (mobileSearchView.classList.contains('hidden')) {
			mobileSearchView.classList.toggle('hidden')
			setTimeout(() => {
				mobileSearchView.classList.toggle("-translate-y-full");
			}, 300)
		} else {
			mobileSearchView.classList.toggle("-translate-y-full");
			setTimeout(() => {
				mobileSearchView.classList.toggle('hidden')
			}, 300)
		}
	};

	gridBtn.onclick = function () {
		gridView.classList.toggle("-translate-x-full");
	};

	menuBtn.onclick = function () {
		gridView.classList.toggle("-translate-x-full");
	};

	searchBtn.onclick = function () {
		if (mobileSearchView.classList.contains('hidden')) {
			mobileSearchView.classList.toggle('hidden')
			setTimeout(() => {
				mobileSearchView.classList.toggle("-translate-y-full");
			}, 300)
		} else {
			mobileSearchView.classList.toggle("-translate-y-full");
			setTimeout(() => {
				mobileSearchView.classList.toggle('hidden')
			}, 300)
		}
	};

	closeSearch.onclick = function () {
		mobileSearchView.classList.add("-translate-y-full");
		setTimeout(() => {
			mobileSearchView.classList.add('hidden')
		}, 300)
	};

	closeMenu.onclick = function () {
		gridView.classList.add("-translate-x-full");
	};
});
