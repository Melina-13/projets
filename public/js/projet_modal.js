 
  const buttons = document.querySelectorAll("button.learn-more");


  buttons.forEach(button => {
    button.addEventListener("click", function(event) {
      event.preventDefault();
      const modalId = button.getAttribute("data-modal");
      const modal = document.getElementById(modalId);
      modal.style.display = "block";

     
      const closeBtn = modal.querySelector(".close");

      closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
      });

    
      window.addEventListener("click", function(event) {
        if (event.target === modal) {
          modal.style.display = "none";
        }
      });
    });
  });

