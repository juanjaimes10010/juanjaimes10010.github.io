<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Juan Jaimes | Admin</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/message.css">
</head>

<body>
  <header>
    <div class="container">
      <a href="index.html" id="brand">Juan Jaimes</a>
      <nav>
        <ul>
          <!-- <li><a href="#">Home</a></li> -->
          <!-- <li><a href="About.html">About</a></li>
            <li><a href="Pricing.html">Pricing</a></li>
            <li><a href="Contact.html">Contact</a></li> -->
          <li id="menu">
            <div></div>
            <div></div>
            <div></div>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="messages">
    <div class="container">
      <h2>Messages</h2>
      <table>
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Message</th>
        </tr>
        <tr>
          <td><?php echo $name; ?></td>
          <td><?php echo $phone; ?></td>
          <td><?php echo $message; ?></td>
        </tr>
        <tr>
          <td>Centro comercial Moctezuma</td>
          <td>Francisco Chang</td>
          <td>Mexico</td>
        </tr>
        <tr>
          <td>Ernst Handel</td>
          <td>Roland Mendel</td>
          <td>Austria</td>
        </tr>
        <tr>
          <td>Island Trading</td>
          <td>Helen Bennett</td>
          <td>UK</td>
        </tr>
        <tr>
          <td>Laughing Bacchus Winecellars</td>
          <td>Yoshi Tannamuri</td>
          <td>Canada</td>
        </tr>
        <tr>
          <td>Magazzini Alimentari Riuniti</td>
          <td>Giovanni Rovelli</td>
          <td>Italy</td>
        </tr>
      </table>
    </div>
  </section>
</body>

</html>