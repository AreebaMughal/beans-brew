<?php
$conn = new mysqli("localhost", "root", "", "coffee_shop");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM orders ORDER BY order_time DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin | Beans&Brew</title>
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
  <h2 style="text-align: center;">📋 Admin Panel - All Orders</h2>

  <table border="1" cellpadding="10" cellspacing="0" style="margin: 0 auto; background: white; border-collapse: collapse;">
    <tr style="background-color: #d6c2a1;">
      <th>ID</th>
      <th>Customer Name</th>
      <th>Phone</th>
      <th>Item</th>
      <th>Size</th>
      <th>Quantity</th>
      <th>Order Time</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["customer_name"]; ?></td>
      <td><?php echo $row["phone"]; ?></td>
      <td><?php echo $row["item_name"]; ?></td>
      <td><?php echo $row["size"]; ?></td>
      <td><?php echo $row["quantity"]; ?></td>
      <td><?php echo $row["order_time"]; ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
<?php $conn->close(); ?>
