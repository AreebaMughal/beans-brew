<!DOCTYPE html>
<html>
<head>
  <title>Checkout | Beans&Brew</title>
</head>
<body style="margin: 0;
  padding: 0;background-color: #e7d6c2; font-family: 'Playfair Display', serif;">
  <h2 style="text-align: center;">🧾 Checkout</h2>
  <div id="cartSummary" style="max-width: 600px; margin: 0 auto; background-color: #f5eee0; padding: 20px; border-radius: 10px;">
    <h3>Your Order</h3>
    <div id="cartItems"></div>
    <p><strong>Total: Rs-<span id="totalAmount">0</span></strong></p>
  </div>

  <form method="POST" action="submit_order.php" style="max-width: 600px; margin: 20px auto; background-color: #f5eee0; padding: 20px; border-radius: 10px;">
    <h3>Your Details</h3>
    <input type="text" name="customer_name" placeholder="Your Name" required style="width: 100%; padding: 10px; margin-bottom: 10px;"><br>
    <input type="text" name="phone" placeholder="Phone Number" required style="width: 100%; padding: 10px; margin-bottom: 10px;"><br>
    <input type="hidden" name="order_data" id="orderData">
    <button type="submit" style="padding: 12px 20px; background-color: black; color: white; border: none; border-radius: 6px; cursor: pointer;">Place Order</button>
  </form>

  <script>
    const cart = JSON.parse(localStorage.getItem("cart") || "[]");
    let total = 0;
    const cartItemsDiv = document.getElementById("cartItems");

    cart.forEach(item => {
      const itemTotal = item.price * item.quantity;
      total += itemTotal;
      cartItemsDiv.innerHTML += `
        <div style="margin-bottom: 10px;">
          <img src="${item.image}" style="width: 80px; border-radius: 6px;"><br>
          ${item.name} (${item.size}) - Rs-${item.price} x ${item.quantity} = Rs-${itemTotal}
        </div>
      `;
    });

    document.getElementById("totalAmount").innerText = total;
    document.getElementById("orderData").value = JSON.stringify(cart);
  </script>
</body>
</html>
