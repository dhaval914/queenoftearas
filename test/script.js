const sliderContainer = document.querySelector('.slider-container');
const slides = document.querySelectorAll('.slide');

let currentSlide = 0;

function showSlide(n) {
  slides.forEach((slide) => {
    slide.style.display = 'none';
  });
  slides[n].style.display = 'block';
}

showSlide(currentSlide);

setInterval(() => {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}, 5000); // Change the interval time as needed
  
  
  // function addToCart(event) {
  //   event.preventDefault();
  //   var productName = event.target.getAttribute("data-product");
  //   var message = "Login required to add " + productName + " to cart.";
  //   var messageDiv = document.getElementById("message");
  //   messageDiv.innerHTML = message;
  //   messageDiv.style.display = "block";
  //   // Redirect to login/register page
  //   window.location.href = "login.html";
  // }

  // var cartButtons = document.getElementsByClassName("cart-btn");
  // for (var i = 0; i < cartButtons.length; i++) {
  //   cartButtons[i].addEventListener("click", addToCart);
  // }

  // document.addEventListener("DOMContentLoaded",function(){
  //   var box =document.getElementById(box);
  //   box.addEventListenera("click",function(){
  //     window.location.href="product.html";
  //   })
  // })


  // function searchItems() {
  //   var searchTerm = document.getElementById("search").value.toLowerCase(); // Get the search term and convert to lowercase for case-insensitive search

  //   // Get all the items to be searched (products and home remedies)
  //   var allItems = document.querySelectorAll('.remedy h2, .products .content h3');
    
  //   // Loop through each item and check if it contains the search term
  //   allItems.forEach(function(item) {
  //     var itemName = item.textContent.toLowerCase(); // Get the text content of the item and convert to lowercase
  //     var itemParent = item.closest('.box, .remedy'); // Get the parent element of the item

  //     // If the item contains the search term, display it; otherwise, hide it
  //     if (itemName.includes(searchTerm)) {
  //       itemParent.style.display = "block";
  //     } else {
  //       itemParent.style.display = "none";
  //     }
  //   });
  // }

