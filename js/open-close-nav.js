function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
              document.getElementById("menu-button").style.visibility = "hidden";
              setTimeout(func, 350);
              function func() {
                document.getElementById("closebtn").style.visibility = "visible";
                return;
              }
              
          }

          function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
              document.getElementById("closebtn").style.visibility = "hidden";
              setTimeout(func, 200);
              function func() {
                document.getElementById("menu-button").style.visibility = "visible";
                return;
              }
              
          }