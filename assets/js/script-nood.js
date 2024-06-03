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

  let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.products-container .product').forEach(product =>{
  product.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = product.getAttribute('data-name');
    previewBox.forEach(preview =>{
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.fa-times').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});