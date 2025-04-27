// function toggleTheme() {
//   document.getElementsByClassName("presentation").classList.toggle("dark");
// }
// console.log("yaya");

const button = document.getElementById("togglemode");
 button.addEventListener("click", () => {
   document.body.classList.toggle("nuit");
});
