// Open and Close Navbar Menu
const navbarMenu = document.getElementById("menu");
const burgerMenu = document.getElementById("burger");
const bgOverlay = document.querySelector(".overlay");

if (burgerMenu && bgOverlay) {
   burgerMenu.addEventListener("click", () => {
      navbarMenu.classList.add("is-active");
      bgOverlay.classList.toggle("is-active");
   });

   bgOverlay.addEventListener("click", () => {
      navbarMenu.classList.remove("is-active");
      bgOverlay.classList.toggle("is-active");
   });
}

// Close Navbar Menu on Links Click
document.querySelectorAll(".menu-link").forEach((link) => {
   link.addEventListener("click", () => {
      navbarMenu.classList.remove("is-active");
      bgOverlay.classList.remove("is-active");
   });
});

const options = document.querySelectorAll('.options');
const picks = document.querySelectorAll('.option-pick');
const product = document.querySelectorAll('.image-option');

function changeSize() {
    options.forEach(option => option.classList.remove('active'));
    this.classList.add('active');
}

function changeColor() {
    let primary = this.getAttribute('primary');
    let secondary = this.getAttribute('secondary');
    let color = this.getAttribute('color');
    let sneakerColor = document.querySelector(`.image-option[color="${color}"]`);

    picks.forEach(p => p.classList.remove('active'));
    this.classList.add('active');

    document.documentElement.style.setProperty('--primary', primary);
    document.documentElement.style.setProperty('--secondary', secondary);

    product.forEach(s => s.classList.remove('shows'));
    sneakerColor.classList.add('shows')
}

options.forEach(option => option.addEventListener('click', changeSize));
picks.forEach(p => p.addEventListener('click', changeColor));  

function addtocart() {
   const element = document.getElementById("not-available");

   element.style.opacity = "1";
   setTimeout(function() {
      element.style.opacity = "0";
    }, 5000);
}

const availableQuantity = document.getElementById("availableQuantity").value;
const plusButton = document.querySelector('.quantity-content .plus');
const minusButton = document.querySelector('.quantity-content .minus');
const quantity = document.querySelector('.quantity-content .quantity');

plusButton.addEventListener('click', () => {
   const currentQuantity = parseInt(quantity.textContent, 10);
   if (currentQuantity == availableQuantity) {
      plusButton.disabled = true;
   } else {
      quantity.textContent = currentQuantity + 1;
   }
});

minusButton.addEventListener('click', () => {
   const currentQuantity = parseInt(quantity.textContent, 10);
   if (currentQuantity > 1) {
      quantity.textContent = currentQuantity - 1;
   } 
   if(currentQuantity === 1) {
      minusButton.disabled = true;
   }
});


