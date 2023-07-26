// document.addEventListener("DOMContentLoaded", function() {
//     var scrollButtons = document.querySelectorAll(".btsearh");

//     scrollButtons.forEach(function(button) {
//       button.addEventListener("click", function() {
//         var target = button.getAttribute("data-target");
//         var targetElement = document.getElementById(target);

//         if (targetElement) {
//           targetElement.scrollIntoView({ behavior: "smooth" });
//         }
//       });
//     });
//   });



document.addEventListener("DOMContentLoaded", function() {
  var searchInput = document.getElementById("searchbt");
  console.log(searchInput);
  const a= document.getElementById("a");
    a.hidden=true;
  searchInput.addEventListener('click', function() {
    a.hidden=false;
    var searchValue = document.getElementById("search").value.toLowerCase();
    var articles = document.querySelectorAll(".photo-list");
    console.log(searchValue);
    articles.forEach(function(article) {
      var articleTitle = article.querySelector(".title").textContent.toLowerCase();
      console.log(articleTitle);
      if (articleTitle.includes(searchValue)) {
       console.log("dung")
       a.hidden=true;
        article.style.display = "block";
      }else{
        console.log("tat")
          article.style.display = "none";
      }
    //   if (!articleTitle.includes(searchValue)) {
    //     document.getElementById("a");
    //     article.style.display = "none";
    //     const a= document.createElement("h2");
    //     a.textContent="khong co project tren"
    //     document.getElementById("a").append(a);
    //   }
    });
    const article= document.querySelectorAll(".photo-list");
        console.log(article)
        if(!article){
            console.log("null1")
            // a.hidden=false;
        }
  });
});

//知らせ
const showNotificationButton = document.getElementById("showNotificationButton");
const notificationContainer = document.getElementById("notification");
const closeButton = document.querySelector(".close-button");

showNotificationButton.addEventListener("click", function () {
notificationContainer.classList.remove("hidden", "animate__fadeOut");
notificationContainer.classList.add("animate__fadeIn");
});

closeButton.addEventListener("click", function () {
notificationContainer.classList.remove("animate__fadeIn");
notificationContainer.classList.add("animate__fadeOut");
setTimeout(() => {
    notificationContainer.classList.add("hidden");
}, 500);
});

//mail
// const mail = document.querySelector(".mail");
// const mail_open = document.querySelector(".mail-open");
// mail.hidden =false;
// mail_open.hidden=true;
// mail.addEventListener("click", function () {
//     mail.hidden =true;
//     mail_open.hidden=false;
// });

