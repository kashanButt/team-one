const hamburger = document.querySelector(".hamburger");
const navigation = document.querySelector(".list");

hamburger.addEventListener("click", function () {
  navigation.classList.toggle("display-none");
});
// const slider = document.querySelector(".music-page");
// slider.style.backgroundImage = "url(../assets/images/home-img-01.webp)";
// slider.style.backgroundPosition = "center";

var curIndex = 0,
  imgDuration = 3000,
  slider = document.querySelector(".music-page"),
  slides = slider.childNodes; //get a hook on all child elements, this is live so anything we add will get listed
imgArray = [
  "http://localhost/projects/team-one/assets/images/home-img-01.webp",
  "http://localhost/projects/team-one/assets/images/home-img-02.webp",
  "http://localhost/projects/team-one/assets/images/home-img-03.webp",
];

//
// Dynamically add each image frame into the dom;
//
function buildSlideShow(arr) {
  for (i = 0; i < arr.length; i++) {
    var img = document.createElement("img");
    img.src = arr[i];
    slider.appendChild(img);
  }
  // note the slides reference will now contain the images so we can access them
}
function slideShow() {
  function fadeIn(e) {
    e.className = "fadeIn";
  }

  function fadeOut(e) {
    e.className = "";
  }

  fadeOut(slides[curIndex]);
  curIndex++;
  if (curIndex === slides.length) {
    curIndex = 0;
  }

  fadeIn(slides[curIndex]);

  setTimeout(function () {
    slideShow();
  }, imgDuration);
}
buildSlideShow(imgArray);
slideShow();
