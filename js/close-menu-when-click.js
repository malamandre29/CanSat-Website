// closes menu when the user clicks outside of it.
$(document).ready(function(){
      document.querySelector("body")
        .addEventListener("click", 
          function (event) {
            if(event.clientX > 250){
              closeNav();
            }
            console.log(event.clientX);
          }
          );
      });