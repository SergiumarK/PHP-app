// toggle-menu
const bar = document.getElementById("bar")
const nav = document.getElementById("navbar")
const close = document.getElementById("close")

if (bar) {
    bar.addEventListener("click", () => {
        nav.classList.add("active")
    })
} 
if (close) {
    close.addEventListener("click", () => {
        nav.classList.remove("active")
    })
} 

// single product imgage select

const mainImg = document.getElementById("MainImg");
const smallImgs = document.getElementsByClassName("small-img");

for (let i = 0; i < smallImgs.length; i++) {
    smallImgs[i].onclick = function () {
        mainImg.src = smallImgs[i].src;
    }
}
