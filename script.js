let menuBtn = document.getElementById("menu");
let list = document.querySelectorAll("nav ul li");
let links = document.getElementById("links");
let toggle = false;
console.log(links.style);

menuBtn.addEventListener("click", function () {
  if (toggle == false) {
    links.style.display = "flex";
    toggle = true;
  } else if (toggle == true) {
    links.style.display = "none";
    toggle = false;
  }
});

list.forEach((e) => {
  if (window.innerWidth <= 832) {
    e.addEventListener("click", function () {
      if (toggle == false) {
        links.style.display = "flex";
        toggle = true;
      } else if (toggle == true) {
        links.style.display = "none";
        toggle = false;
      }
    });
  }
});

// document.querySelectorAll("nav ul li").onclick = function () {
//   if (window.innerWidth <= 832) {
//     list.forEach((e) => {
//       e.addEventListener("click", function () {
//         list.forEach((e) => {
//           e.style.display = "none";
//         });
//         links.style.position = "relative";
//         links.style.flexDirection = "row";
//         links.style.top = "auto";
//         links.style.left = "auto";
//         links.style.width = "auto";
//         links.style.backgroundColor = "none";
//         toggle = false;
//       });
//     });
//   }
// };
