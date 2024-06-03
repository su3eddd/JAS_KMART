// JavaScript for dropdown functionality
document.addEventListener("DOMContentLoaded", function() {
    var dropdowns = document.querySelectorAll('.dropdown');
      dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('click', function() {
         this.querySelector('.dropdown-content').classList.toggle('show');
        });
      });
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName('dropdown-content');
      for (var i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      } 
    }
  }
  });
  let navbar = document.querySelector(".navbar");
  let searchBox = document.querySelector(".search-box .bx-search-alt");
  
  searchBox.addEventListener("click", ()=>{
      navbar.classList.toggle("showInput")
      if(navbar.classList.contains("showInput")){
          searchBox.classList.replace("bx-search-alt", "bx-x");
      }
      else{
          searchBox.classList.replace("bx-x", "bx-search-alt");
      }
  })

  let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slide");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}