window.addEventListener("DOMContentLoaded", init);

      function init() {
        document.querySelectorAll(".button-open").forEach((buttonOpen) => {
          buttonOpen.addEventListener("click", (event) => {
            const contentId = event.target.dataset.content;
            // View Transitions APIを呼び出す
            document.startViewTransition(() => {
              // 遷移後のDOM構造を指定
              console.log(document.querySelector("#view-index"));
                document.querySelector("#view-index").hidden = true;
              document.querySelector(".location-contr").hidden = true;
              document.querySelector(".container1").hidden = true;
              document.querySelector(".title").hidden = true;
              document.querySelectorAll(".view-detail").forEach((element) => {
                element.hidden = element.dataset.content !== contentId;
              });
            });
          });
        });
        document.querySelectorAll(".button-close").forEach((buttonClose) => {
          buttonClose.addEventListener("click", () => {
            // View Transitions APIを呼び出す
            document.startViewTransition(() => {
              // 遷移後のDOM構造を指定
            document.querySelector("#view-index").hidden = false;
              document.querySelector(".location-contr").hidden = false;
              document.querySelector(".container1").hidden = false;
              document.querySelector(".h4").hidden = false;
              document.querySelectorAll(".view-detail").forEach((element) => {
                element.hidden = true;
              });
            });
          });
        });
      }
