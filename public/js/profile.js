const userIcon = document.querySelector(".menu");
const overlayMenu = document.querySelector(".overlay");

userIcon.addEventListener("click", function () {
overlayMenu.classList.toggle("hidden");
});

document.addEventListener("click", function (event) {
if (!userIcon.contains(event.target) && !overlayMenu.contains(event.target)) {
    overlayMenu.classList.add("hidden");
}
});

const edit=document.getElementById("editbt");
console.log(edit);
var profile_edit = document.querySelector(".profile-edit");
profile_edit.hidden=true;
edit.addEventListener('click', function() {
var profile = document.querySelector(".profile");
console.log(profile);
profile.hidden= true;
var profile_edit = document.querySelector(".profile-edit");
profile_edit.hidden=false;
});
