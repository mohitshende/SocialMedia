<?php
    
    include "../backend/login.php";
    
    ?>

    <!DOCTYPE html>
    <html>

    <head>
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

    </html>