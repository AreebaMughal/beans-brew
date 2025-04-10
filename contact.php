<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $conn = new mysqli("localhost", "root", "", "coffee_shop");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $message);
  $stmt->execute();
  $stmt->close();
  $conn->close();

  echo "<h3 style='text-align:center;'>✅ Thank you! Your message has been sent.</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact Us | Beans&Brew</title>
</head>
<body style="margin: 0;
  padding: 0;background-color: #e7d6c2; font-family: 'Playfair Display', serif;">
  
  <header style="display: flex; align-items: center; justify-content: space-between; padding: 10px 30px;">
    <div style="display: flex; align-items: center;">
      <img src="images/image-removebg.png" alt="Beans&Brew Logo" width="50" style="margin-right: 15px;">
      <h1 style="margin: 0; font-size: 1.8rem;">Beans&Brew</h1>
    </div>
    <nav class="nav-links">
      <a href="homepage.php" style="text-decoration: none; font-size: larger; color: black; padding: 10px;">Home</a>
      <a href="menu.php" style="text-decoration: none; font-size: larger; color: black; padding: 10px;">Menu</a>
      <a href="contact.php" style="text-decoration: none; font-size: larger; color: black; padding: 10px;">Contact Us</a>
      <a href="admin.php" style="text-decoration: none; font-size: larger; color: black; padding: 10px;">Admin</a>
    </nav>
  </header>
  <h2 style="text-align: center;">📬 Contact Us</h2>

  <form method="POST" action="contact.php" style="max-width: 600px; margin: 0 auto; background-color: #f5eee0; padding: 20px; border-radius: 10px;">
    <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 10px; margin-bottom: 10px;"><br>
    <input type="email" name="email" placeholder="Your Email" required style="width: 100%; padding: 10px; margin-bottom: 10px;"><br>
    <textarea name="message" placeholder="Your Message" rows="5" required style="width: 100%; padding: 10px; margin-bottom: 10px;"></textarea><br>
    <button type="submit" style="padding: 10px 20px; background-color: black; color: white; border: none; border-radius: 6px; cursor: pointer;">Send Message</button>
  </form>
</body>
</html>
