<?php
require_once "auth/login.php";
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Google Account - Php</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        a {
            box-shadow: 0 2px 4px #dbd9d9;
            padding: 8px;
            margin-top: 100px;
            display: flex;


            align-items: center;
            justify-content: center;
            border-radius: 50%;
            width: 30px;
            cursor: pointer;
        }

        a img {
            width: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <?php
            if ($login_button == '') {
                echo '<div class="card-header">Welcome User</div><div class="card-body">';
                echo '<img src="' . $_SESSION["user_image"] . '" class="rounded-circle container"/>';
                echo '<h3><b>Name :</b> ' . $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'] . '</h3>';
                echo '<h3><b>Email :</b> ' . $_SESSION['user_email_address'] . '</h3>';
                echo '<h3><a href="logout.php">Logout</h3></div>';
            } else {
                echo '<div align="center">' . $login_button . '</div>';
            }
            ?>
        </div>
    </div>

    <script>
        let btn = document.querySelector('a#btn');

        btn.onclick = () => {
            window.open(
                `${btn.dataset.url}`,
                "Google Auth",
                "height=550,width=480,left=450,top=40"
            );
        }
    </script>
</body>

</html>