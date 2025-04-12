<!DOCTYPE html>
<html>
<head>
  <title>Menu | Beans&Brew</title>
 
</head>
<body style="margin: 0;
  padding: 0;background-color: #e7d6c2; font-family: 'Playfair Display', serif;">
  
  <header style="display: flex; align-items: center; justify-content: space-between; padding: 10px 30px;">
    <div style="display: flex; align-items: center;">
      <img src="images/image-removebg.png" alt="Beans&Brew Logo" width="50" style="margin-right: 15px;">
      <h1 style="margin: 0; font-size: 1.8rem;">Beans&Brew</h1>
    </div>
    <nav class="nav-links">
      <a href="index.php" style="text-decoration: none; font-size: larger; color: black; padding: 10px;">Home</a>
      <a href="menu.php" style="text-decoration: none; font-size: larger; color: black; padding: 10px;">Menu</a>
      <a href="contact.php" style="text-decoration: none; font-size: larger; color: black; padding: 10px;">Contact Us</a>
      <a href="admin.php" style="text-decoration: none; font-size: larger; color: black; padding: 10px;">Admin</a>
    </nav>
  </header>
  <!-- Menu Section -->
  <main style="padding: 40px 20px; text-align: center;">
    <h2 style="margin-bottom: 40px; font-size: 2rem;">Our Menu</h2>

    <!-- Section: Hot Coffee -->
    <section style="margin-bottom: 50px;">
      <h3 style="font-size: 1.5rem; margin-bottom: 20px;">Hot Coffee</h3>
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
        <!-- Items -->
        <!-- Repeatable block -->
        <!-- HOT COFFEE ITEM -->
        <!-- Espresso -->
        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/hot expreso.png" alt="Espresso" class="item-image" data-img="images/hot expreso.png" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Espresso</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="espresso-size" value="Small" > Small</label><br>
            <label><input type="radio" name="espresso-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="espresso-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>


        <!-- Repeat for other hot coffee -->
        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/cappi.jpeg" alt="cappiciono" class="item-image" data-img="images/cappi.jpeg" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Cappuccino</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="cappuccino-size" value="Small" > Small</label><br>
            <label><input type="radio" name="cappuccino-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="cappuccino-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>

        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/spanish-latte.jpeg" alt="spanish latte" class="item-image" data-img="images/spanish-latte.jpeg"  style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">

          <h4>Spanish Latte</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="latte-size" value="Small" > Small</label><br>
            <label><input type="radio" name="latte-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="latte-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>

        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/americano.jpeg" alt="Americano" class="item-image" data-img="images/americano.jpeg"  style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Americano</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="americano-size" value="Small" > Small</label><br>
            <label><input type="radio" name="americano-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="americano-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>

        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/hot chocolate.png" alt="hot chocolate" class="item-image" data-img="images/hot chocolate.png"  style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Hot Chocolate</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="hotchocolate-size" value="Small" > Small</label><br>
            <label><input type="radio" name="hotchocolate-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="hotchocolate-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>

        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/hot mocha 2.png" alt="hot mocha" class="item-image" data-img="images/hot mocha 2.png"  style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Hot Mocha</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="hotmocha-size" value="Small" > Small</label><br>
            <label><input type="radio" name="hotmocha-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="hotmocha-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>
      </div>
    </section>

    <!-- Section: Cold Coffee -->
    <section style="margin-bottom: 50px;">
      <h3 style="font-size: 1.5rem; margin-bottom: 20px;">Cold Coffee</h3>
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">

        <!-- Cold items, same layout -->
        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/charcoal latte.png" alt="charcoal latte" class="item-image" data-img="images/charcoal latte.png" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Charcoal Latte</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="charcoallatte-size" value="Small" > Small</label><br>
            <label><input type="radio" name="charcoallatte-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="charcoallatte-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>

        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/cold latte.png" alt="cold latte" class="item-image" data-img="images/cold latte.png" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Cold Latte</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="coldlatte-size" value="Small" > Small</label><br>
            <label><input type="radio" name="coldlatte-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="coldlatte-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>
        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/iced expresso.png" alt="iced expresso" class="item-image" data-img="images/iced expresso.png"  style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Iced Expresso</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="icedexpresso-size" value="Small" > Small</label><br>
            <label><input type="radio" name="icedexpresso-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="icedexpresso-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>
        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/iced mocca.png" alt="iced mocha" class="item-image" data-img="images/iced mocca.png"  style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Iced Mocha</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="icedmocha-size"  value="Small" > Small</label><br>
            <label><input type="radio" name="icedmocha-size"  value="Medium"> Medium</label><br>
            <label><input type="radio" name="icedmocha-size"  value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>
        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/pumpkin.png" alt="pumpkin latte" class="item-image" data-img="images/pumpkin.png" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Pumpkin Latte</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="pumpkinlatte-size" value="Small" > Small</label><br>
            <label><input type="radio" name="pumpkinlatte-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="pumpkinlatte-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>
        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/salted caramel.png" alt="salted caramel" class="item-image" data-img="images/salted caramel.png" style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Salted Caramel</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="saltedcaramel-size" value="Small" > Small</label><br>
            <label><input type="radio" name="saltedcaramel-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="saltedcaramel-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>

        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/spanish latte.png" alt="spanish latte" class="item-image" data-img="images/spanish latte.png"  style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Spanish Latte</h4>
          <div style="text-align: left; margin-bottom: 10px;">
            <label><input type="radio" name="spanishlatte-size" value="Small" > Small</label><br>
            <label><input type="radio" name="spanishlatte-size" value="Medium"> Medium</label><br>
            <label><input type="radio" name="spanishlatte-size" value="Large" > Large</label>
          </div>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>
      </div>
    </section>

    <!-- Section: Snacks (no size) -->
    <section style="margin-bottom: 50px;">
      <h3 style="font-size: 1.5rem; margin-bottom: 20px;">Snacks</h3>
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/crossiant.png" alt="crossiant" class="item-image" data-img="images/crossiant.png"  style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Crossiant</h4>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>
        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/lotus.png" alt="lotus" class="item-image" data-img="images/lotus.png"  style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Lotus Cake</h4>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>
        <div style="background-color: #f5eee0; padding: 20px; width: 220px; border-radius: 10px;">
          <img src="images/red velvet.png" alt="red velvet" class="item-image" data-img="images/red velvet.png"  style="width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
          <h4>Red Velvet Cake</h4>
          <button class="add-to-cart" style="padding: 8px 16px; background-color: transparent; color: black; font-weight: bold; border: 1px solid black; border-radius: 6px; cursor: pointer;">Add to Cart</button>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer style="background-color: #d6c2a1; text-align: center; padding: 15px; font-size: 0.9rem;">
    © 2025 Beans&Brew. All rights reserved.
  </footer>
<!-- Cart Panel -->
<div id="cartPanel" style="
  position: fixed;
  top: 0;
  right: -400px;
  width: 350px;
  height: 100%;
  background-color: #f5eee0;
  box-shadow: -4px 0 10px rgba(0,0,0,0.2);
  padding: 20px;
  overflow-y: auto;
  transition: right 0.3s ease;
  z-index: 1000;
">
  <h3 style="text-align: center;">🛒 Your Cart</h3>
  <div id="cartItems"></div>
  <hr>
  <p><strong>Total: Rs-<span id="cartTotal">0</span></strong></p>
  <button onclick="toggleCart()" style="margin-top: 10px; padding: 10px 20px; border: 1px solid black; background: transparent; color: black; border-radius: 8px; cursor: pointer;">Add More</button>
  <button onclick="checkout()" style="margin-top: 10px; padding: 10px 20px; border: 1px solid black; background: black; color: white; border-radius: 8px; cursor: pointer;">Checkout</button>
</div>
<script>
  let cart = [];
  
  function toggleCart() {
    const panel = document.getElementById("cartPanel");
    panel.style.right = panel.style.right === "0px" ? "-400px" : "0px";
  }
  
  function updateCartDisplay() {
    const cartItemsDiv = document.getElementById("cartItems");
    const cartTotalSpan = document.getElementById("cartTotal");
    cartItemsDiv.innerHTML = "";
    let total = 0;
  
    cart.forEach((item, index) => {
      const itemTotal = item.price * item.quantity;
      total += itemTotal;
  
      cartItemsDiv.innerHTML += `
  <div style="margin-bottom: 15px; border-bottom: 1px solid #ccc; padding-bottom: 10px;">
    <img src="${item.image}" alt="${item.name}" style="width: 100px; border-radius: 8px; margin-bottom: 5px;"><br>
<strong>${item.name}</strong>${item.size ? ` (${item.size})` : ""}<br>
    Rs-${item.price} x 
    <button onclick="changeQuantity(${index}, -1)">-</button>
    ${item.quantity}
    <button onclick="changeQuantity(${index}, 1)">+</button>
    <br><button onclick="removeItem(${index})" style="color: red; background: none; border: none; cursor: pointer;">Remove</button>
  </div>
`;

    });
  
    cartTotalSpan.innerText = total;
  }
  
  function changeQuantity(index, delta) {
    cart[index].quantity += delta;
    if (cart[index].quantity < 1) cart[index].quantity = 1;
    updateCartDisplay();
  }
  
  function removeItem(index) {
    cart.splice(index, 1);
    updateCartDisplay();
  }
  
  function checkout() {
  localStorage.setItem("cart", JSON.stringify(cart));
  window.location.href = "checkout.php";
}

  
document.querySelectorAll(".add-to-cart").forEach(btn => {
  btn.addEventListener("click", function() {
    const card = btn.closest("div");
    const name = card.querySelector("h4").innerText.trim();
    const sizeRadio = card.querySelector("input[type='radio']:checked");
    const hasSize = card.querySelector("input[type='radio']");
    const size = hasSize ? (sizeRadio ? sizeRadio.value : "Medium") : null;
    const image = card.querySelector(".item-image")?.getAttribute("data-img") || "";

    // Pricing based on size
    let price = 350;
    if (size && size.toLowerCase() === "small") price = 250;
    else if (size && size.toLowerCase() === "large") price = 500;

    const existing = cart.find(i => i.name === name && i.size === size);
    if (existing) {
      existing.quantity += 1;
    } else {
      cart.push({ name, price, size, quantity: 1, image });
    }

    updateCartDisplay();
    toggleCart();
  });
});
</script>

</body>
</html>
