function cartcount() {
  let countElement = document.getElementById('cartcount');
  let count = parseInt(countElement.innerHTML);
  count += 1;
  countElement.innerHTML = count;
}

// Define an array to store items in the cart
let cartItems = [];

// Function to add items to the cart
function addToCart(itemName, price, image) {
  // Check if the item is already in the cart
  let found = false;
  cartItems.forEach((item) => {
    if (item.name === itemName) {
      // If found, increase the quantity
      item.quantity++;
      found = true;
    }
  });

  // If the item is not found, add it to the cart
  if (!found) {
    cartItems.push({ name: itemName, price: price, quantity: 1, image: image });
  }

  // Update the cart count displayed in the icon
  updateCartCount();

  // Update the cart modal content
  updateCartModal();
}

// Function to update the cart count displayed in the icon
function updateCartCount() {
  document.getElementById("cartcount").innerText = cartItems.reduce((total, item) => total + item.quantity, 0);
}

// Function to update the cart modal content
function updateCartModal() {
  let modalContent = document.getElementById("cartItems");
  let totalAmount = 0;

  // Clear previous content
  modalContent.innerHTML = "";

  // Create an object to store items by name
  let itemsByName = {};

  // Group items by name
  cartItems.forEach((item) => {
    if (!itemsByName[item.name]) {
      itemsByName[item.name] = { ...item };
    } else {
      itemsByName[item.name].quantity += item.quantity;
    }
  });

  // Add items to the modal content and calculate the total amount
  for (const itemName in itemsByName) {
    const item = itemsByName[itemName];
    let itemDiv = document.createElement("div");
    itemDiv.classList.add("cart-item");
    itemDiv.innerHTML = `
      <img src="${item.image}" class="cart-item-image">
      <div class="cart-item-details">
        <p>${item.name}</p>
        <p>Quantity: ${item.quantity}</p>
        <p>Price: ₹${item.price * item.quantity}</p>
      </div>
    `;
    modalContent.appendChild(itemDiv);
    totalAmount += item.price * item.quantity;
  }

  // Display the total amount
  document.getElementById("cartTotal").innerText = totalAmount.toFixed(2);
}

// Function to open the cart modal
function openCartModal() {
  let modal = document.getElementById("cartModal");
  updateCartModal();
  modal.style.display = "block";
}

// Function to close the cart modal
function closeCartModal() {
  let modal = document.getElementById("cartModal");
  modal.style.display = "none";
}

// Function to handle checkout
function checkout() {
  // Add your checkout logic here
  alert("Checkout button clicked. Implement your checkout logic here.");
}

function addToCart(itemName, price, image) {
  // Check if the item is already in the cart
  let found = false;
  cartItems.forEach((item) => {
    if (item.name === itemName) {
      // If found, increase the quantity
      item.quantity++;
      found = true;
    }
  });

  // If the item is not found, add it to the cart
  if (!found) {
    cartItems.push({ name: itemName, price: price, quantity: 1, image: image });
  }

  // Update the cart count displayed in the icon
  updateCartCount();

  // Update the cart modal content
  updateCartModal();
}
