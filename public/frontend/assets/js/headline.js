let headlineWrapper = document.getElementById("lgHeadline");
let titleHeadline = document.getElementById("titleHeadline");

function headlineID(img, title, href) {
	headlineWrapper.style.backgroundImage = img;
	headlineWrapper.setAttribute("href", href);
	titleHeadline.innerHTML = title;
}
