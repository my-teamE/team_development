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
      document.addEventListener("DOMContentLoaded", function() {
          var scrollButtons = document.querySelectorAll(".btsearh");

              scrollButtons.forEach(function(button) {
              button.addEventListener("click", function() {
                  var target = button.getAttribute("data-target");
                  var targetElement = document.getElementById(target);

                  if (targetElement) {
                      targetElement.scrollIntoView({ behavior: "smooth" });
                      }
                  });
      });

      });
