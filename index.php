<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="login-box">

            <div class="login-name">
                <h1>Form</h1>
                <div class="underline-name"></div>
            </div>

            <form action="dashboard.php" method="post">

                <div class="input-box">
                    <div class="inputs">
                        <input type="text" placeholder="Enter your Details" name="details"  autofocus>
                        <div class="underline-input"></div>
                    </div>

                    <div class="inputs">
                        <input type="text" placeholder="Your Skills" name="skills" >
                        <div class="underline-input"></div>
                    </div>
                    <div class="inputs">
                        <input type="url" placeholder="Task - 1" name="task1" >
                        <!-- <label style="color: gray;">https://github.com/SHYAMRUPARELIYA07/Web_programming_php"</label>                        -->
                        <div class="underline-input"></div>
                    </div>
                    <div class="inputs">
                        <input type="url" placeholder="Task - 2" name="task2" >
                        <div class="underline-input"></div>
                    </div>
                    <div class="inputs">
                        <input type="url" placeholder="Task - 3" name="task3" >
                        <div class="underline-input"></div>
                    </div>
                    <div class="inputs">
                        <input type="url" placeholder="Task - 4" name="task4" >
                        <div class="underline-input"></div>
                    </div>
                    <div class="inputs">
                        <input type="url" placeholder="Task - 5" name="task5" >
                        <div class="underline-input"></div>
                    </div>
                    <div class="inputs">
                        <input type="url" placeholder="Module - 1" name="module1" >
                        <div class="underline-input"></div>
                    </div>
                    <div class="inputs">
                        <input type="url" placeholder="Module - 2" name="module2" >
                        <div class="underline-input"></div>
                    </div>
                    <div class="submit-button">
                       <a href=""> <input type="submit" value="Continue"></a>
                    </div>
                </div>
                
            </form>

            <!-- <div class="text">
                or connect with Social Media
            </div> -->

            <!-- <div class="twitter-btn">
                <button class="btn"><i class='bx bxl-twitter' ></i>
                    Sign in with Twitter</button>
            </div>

            <div class="facebook-btn">
                <button class="btn"><i class='bx bxl-facebook'></i>
                    Sign in with Facebook</button>
            </div> -->
        </div>
    </div>
</body>
</html>
