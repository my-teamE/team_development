
       //画像表示slider
    $(function() {
        $('.slider').slick({
        autoplay: true,
        dots: false,
        autoplaySpeed: 2000,
        arrows: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 4,
        });
    });

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
        //    console.log("dung")
        a.hidden=true;
            article.style.display = "block";
        }else{
            article.style.display = "none";
        }
        });
        const article= document.querySelectorAll(".photo-list");
            console.log(article)
            if(!article){
                console.log("null1")
                // a.hidden=false;
            }
    });
    });
        //気に入りの処理
        var heartIcon = document.querySelectorAll("#heartIcon");
        console.log(heartIcon);
        heartIcon.forEach(function(e){
            e.addEventListener("click", function() {
                if (e.style.color === "white" || e.style.color === "") {
                console.log("red");
                e.style.color = "red";
                } else {
                e.style.color = "white";
                }
            });
        })

//mail
// const mail = document.querySelector(".mail");
// const mail_open = document.querySelector(".mail-open");
// mail.hidden =false;
// mail_open.hidden=true;
// mail.addEventListener("click", function () {
//     mail.hidden =true;
//     mail_open.hidden=false;
// });

