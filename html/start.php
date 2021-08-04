<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Home Page</title>
    <link rel="stylesheet" href="../css/start.css">
</head>
<body>

    <h2>Chat Messages</h2>
    <div class="anyclass">
        <div class="container">
            <img src="pic.jpg" alt="Avatar" style="width:100%;">
            <p>Hello. How are you today?</p>
            <span class="time-right">11:00</span>
        </div>
    </div>
    <form class="form"> 
        <input type="text" name="room" id="text" class="input" placeholder="Entered Your message">
        <button class="btn" id="true" name="btn">Send</button>
    </form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $("#true").click(function() {
        var clientmsg = $("#text").val();
        $.post("room.php", {
                text: clientmsg,
                name: '<?php echo $name?>'
            },
            function(data, status){
                document.getElementsByClassName('anyclass')[0].innerHtml = data;
            });
        $("#text").val("");
        return false;
    });
    </script>
</html>