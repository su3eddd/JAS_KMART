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

let list = document.querySelector('.slider .list');
let item = document.querySelectorAll('.slider .list .item');
let dots = document.querySelectorAll('.slider .dots li');
let prev = document.getElementById('prev');
let next = document.getElementById('next');

let active = 0;
let lengthItems = item.length - 1;

next.onclick = function(){
  if(active + 1 > lengthItems){
    active = 0;
  }else{
    active = active + 1;
  }
  reloadSlider();
}
prev.onclick = function(){
  if(active - 1 < 0){
    acctive = lengthItems;
  }else{
    active = active - 1;
  }
  reloadSlider();
}
let refreshSlider = setInterval(()=> {next.click()}, 3000);
function reloadSlider(){
  let checkLeft = item[active].offsetLeft;
  list.style.left = -checkLeft + 'px';

  let lastActiveDot = document.querySelector('.slider .dots li.active');
  lastActiveDot.classList.remove('active');
  dots[active].classList.add('active');
  clearInterval(refreshSlider);
  refreshSlider = setInterval(()=> {next.click()}, 3000);
}
dots.forEach((li, key) => {
  li.addEventListener('click', function(){
    active = key;
    reloadSlider();
  })
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