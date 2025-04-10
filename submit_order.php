<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = new mysqli("localhost", "root", "", "coffee_shop");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $name = $_POST["customer_name"];
  $phone = $_POST["phone"];
  $order_data = json_decode($_POST["order_data"], true);

  foreach ($order_data as $item) {
    $stmt = $conn->prepare("INSERT INTO orders (customer_name, phone, item_name, size, quantity) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $phone, $item["name"], $item["size"], $item["quantity"]);
    $stmt->execute();
    $stmt->close();
  }

  $conn->close();
  echo "<h2 style='text-align:center;'>✅ Order placed successfully! Redirecting to homepage...</h2>";
echo "<script>
  setTimeout(function() {
    window.location.href = 'home page.php';
  }, 2000);
</script>";

}
?>
