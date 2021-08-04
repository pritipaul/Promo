<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entered Page of the Chat</title>
    <link rel="stylesheet" href="../css/entered.css">
</head>

<body>
    <header class="header">
        <navbar class="nav">
            <img class="imgk" src="../picture/klo.jpg" alt="this is the picture">
            <ul>
                <li>ChatBox Name Entered</li>
            </ul>
            <div class="bgo">
                <input type="search" name="search" class="search" placeholder="Search Here">
                <button name="btn" class="btn">Search</button>
            </div>
        </navbar>
    </header>
    <section class="sec">
        <h1 class="k">Entered Your Name</h1>
        <form action="../php/entered.php" method="POST" class="form">
            <input type="text" name="name" placeholder="Entered Your valid name" value="" required>
            <?php if (isset($name_error)) {?> <p>*<?php echo  $name_error ?></p> <?php }?>

            <input type="number" name="ph" placeholder="Entered your Phone Numner" value="" required>
            <?php if (isset($ph_error)) {?> <p>*<?php echo  $ph_error ?></p> <?php }?>


            <input type="email" name="email" placeholder="Enterd your email-id" value="" required>
            <?php if (isset($email_error)) {?> <p>*<?php echo  $email_error ?></p> <?php }?>

            <button name="button" class="bho">Submit</button>
        </form>
    </section>
</body>

</html>

<?php
error_reporting(0);
        $name = $_POST['name'];
        $ph = $_POST['ph'];
        $email = $_POST['email'];


// if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($name)) {
  $name_error = "Pleace entered username properly";
   
}
if (empty($ph)) {
  $ph_error = "Pleace entered username properly";
}
if (empty($email)) {
  $email_error = "Pleace entered username properly";
}

?>














?>