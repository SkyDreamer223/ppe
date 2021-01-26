document.addEventListener("DOMContentLoaded", ()=>{
    console.log("loaded")
    let navbar = document.getElementById("navbar")

    let list = navbar.getElementsByTagName("li");

    for (let i = 0; i < list.length; i++) {
        list[i].addEventListener("click", function() {
          let current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace("active", "");
          this.className += "active";
        })
    };
})