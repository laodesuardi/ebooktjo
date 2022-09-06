// const box = document.querySelector(".box-alert");
// const tombol = document.querySelector(".tombol-close");

// tombol.addEventListener("click", function () {
//     box.classList.add("none");
// });

const box = document.querySelector("#box-alert");
const tombol = document.querySelector("#tombol-close");

tombol.addEventListener("click", sembunyi);
function sembunyi() {
    box.classList.add("hidden");
}
