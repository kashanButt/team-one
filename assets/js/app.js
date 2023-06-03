const hamburger = document.querySelector(".hamburger");
const navigation = document.querySelector(".list");

hamburger.addEventListener("click", function () {
  navigation.classList.toggle("display-none");
});

const header = document.querySelector("header");
var position = header.offsetTop;

window.addEventListener("scroll", () => {
  if (window.pageYOffset > position) {
    header.classList.add("sticky");
    header.style.top="0";
  } else {
    header.classList.remove("sticky");
  }
});
