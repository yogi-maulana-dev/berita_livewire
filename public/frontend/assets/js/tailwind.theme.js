var lightBtn = document.getElementById("lightBtn");
var darkBtn = document.getElementById("darkBtn");
var mediaBtn = document.getElementById("mediaBtn");

function checkTheme() {
	if (localStorage.getItem("tailwindTheme") == "light") {
		setActiveBtn("lightBtn");
	} else if (localStorage.getItem("tailwindTheme") == "dark") {
		setActiveBtn("darkBtn");
	} else {
		setActiveBtn("mediaBtn");
	}
}

function setActiveBtn(btn) {
	lightBtn.style.display = "none";
	darkBtn.style.display = "none";
	mediaBtn.style.display = "none";
	document.body.classList.remove("dark", "light");
	switch (btn) {
		case "lightBtn":
			lightBtn.style.display = "block";
			document.body.classList.add("light");
			localStorage.tailwindTheme = "light";
			break;
		case "darkBtn":
			darkBtn.style.display = "block";
			document.body.classList.add("dark");
			localStorage.tailwindTheme = "dark";
			break;
		default:
			mediaBtn.style.display = "block";
			localStorage.removeItem("tailwindTheme");
			if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
				document.body.classList.add("dark");
			} else {
				document.body.classList.remove("dark");
			}
			break;
	}
}

document.addEventListener("DOMContentLoaded", checkTheme());
mediaBtn.onclick = function () {
	setActiveBtn("lightBtn");
};
lightBtn.onclick = function () {
	setActiveBtn("darkBtn");
};
darkBtn.onclick = function () {
	setActiveBtn("mediaBtn");
};
