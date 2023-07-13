<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="confirm.css">
    <title>Confirmation</title>
</head>
<body>
    <div class="container">
        <button type="submit" class="btn" onclick="openPopup()">Submit</button>
        <div class="popup" id="popup">
            <img src="tick.png">
            <h2>Thank You!</h2>
            <p>Your details has been successfully submitted</p>
            <button type="button"><a href="home2.php">OK</a></button>
        </div>
    </div>
    <script>
        let popup = document.getElementById("popup");

        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }
    </script>
</body>
</html>