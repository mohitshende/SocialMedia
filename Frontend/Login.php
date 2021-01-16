<?php
    
    include "../backend/login.php";
    
    ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="Styles/Login.css" />
</head>

<body>

    <div class="outer-box">
        <form method="post">
            <div class="inner-box">
                <h1>LOGIN</h1>

                <input type="text" placeholder="Email" name="email" />

                <input type="password" placeholder="Password" name="password" />
                <br />

                <label> <input type="checkbox" /> Remember me </label>

                <br />

                <button type="submit" class="btn" name="button">Login</button>
                <div class="txt">Or login with</div>
                <div class="smbtn">
                    <div id="customBtn">
                        <span class="icon"></span>
                        <span class="buttonText">Facebook</span>
                    </div>
                    <div id="customBtn2">
                        <span class="icon2"></span>
                        <span class="buttonText2">Google</span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>

</html>