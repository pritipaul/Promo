<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about page</title>
    <link rel="stylesheet" href="../css/about.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $(".img1").click(function() {
            alert("The paragraph was clicked.");
        });
    });
    </script>
</head>

<body>
    <header class="header">
        <navbar class="nav">
            <img class="imgk" src="../picture/klo.jpg" alt="this is the picture">
            <h1 class="kk">sdhfjsdfsdhf</h1>
            <div class="bgo">
                <input type="search" name="search" class="search" placeholder="Search Here">
                <button name="btn" class="btn">Search</button>
            </div>
        </navbar>
        <section>
            <h1 class="head">Chat box and Only Chat here</h1>
            <a href="./entered.php"><button class="butn">Chat Start</button></a>
        </section>
    </header>

    <section>
        <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur in culpa, atque molestias
            minima laudantium quas, magnam excepturi optio fuga, consequuntur odit alias reiciendis repudiandae cum
            labore necessitatibus voluptates saepe Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
            assumenda pariatur asperiores expedita in eos ea, distinctio consequatur amet. Quos numquam officia delectus
            recusandae beatae? Perspiciatis enim repellendus nostrum deserunt! Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Vitae soluta omnis veritatis sed quidem deserunt nam ratione. Dolorem, porro velit fugiat
            eum officia reprehenderit ad ullam? Numquam consequatur tempora beatae. Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Vitae, aliquid aut. Recusandae aut laboriosam totam! Aliquam laboriosam saepe
            quae accusamus accusantium corrupti consequatur! Aspernatur excepturi cupiditate voluptatem nobis dicta
            magnam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, soluta, eveniet iste numquam
            exercitationem quos eos ullam voluptatem nostrum ratione blanditiis maiores! Sint qui enim dolorem saepe
            omnis quibusdam magni.</p>
        <div class="img">
            <img src="../picture/tom1.jpg" class="img1" alt="this is the picture" height="300px" width="300px">
            <img src="../picture/tom2.jpg" class="img1" alt="this is the picture" height="300px" width="300px">
            <img src="../picture/tom3.jpg" class="img1" alt="this is the picture" height="300px" width="300px">
        </div>
    </section>
    <section>
        <form class="com" action="<?php  echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            Entered your name:<input type="text" class="name" name="name1" value="" require>
            Writte Your Command:<textarea id="text" name="text" rows="6" cols="150"
                placeholder="write your Comments"></textarea>
            <button name="Command" class="btn1">Command Send</button>
            <button name="Cancle" class="btn2">Cancle</button>
        </form>
    </section>
    <div class="pop">
        <?php
           include "../php/server.php";     
           $selectquery = "SELECT * FROM `promo`.`com21`";
           $query = mysqli_query($con, $selectquery);
           
           
            while ($row = mysqli_fetch_array($query)) {
    ?>
        <h5 ><?php echo $row['name1'] ; ?></h5>
        <h5><?php echo $row['text'] ; ?></h5>
        <?php
            }
            ?>
    </div>
</body>

</html>

<?php


include "../php/server.php";

if (isset($_POST['Command'])) {

$name1 = $_POST['name1'];
$text = $_POST['text'];

$sql = "INSERT INTO `promo`.`com21` (`name1`, `text`) VALUES ('$name1', '$text')";
    
    if ($con->query($sql) == true) {
        // echo "successfully";
          }
    else{
        echo "You are Alredy Loging this portal!";
    }
    $con->close();

}
















?>