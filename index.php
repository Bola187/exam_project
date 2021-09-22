<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/Normalize.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <div class="menu">
        <div class="log">
            <div class="in">
                <div class="first">
                    <form action="question.php" method="post">
                        <input type="submit" value="Log in" class="ss">
                    </form>
                </div>
                <ul>
                    <div class="go">
                    <li><a href="https://www.facebook.com/" class="fab fa-facebook" target="_blank"></a></li>
                    <li><a href="https://twitter.com/" class="fab fa-twitter" target="_blank"></a></li>
                    <li><a href="https://google.com/" class="fab fa-google" target="_blank"></a></li>
                    </div>
                </ul>
            </div>
            <div class="continer">
                <div class="inputs">
                    <form action="question.php" method="post">
                        <div class="do">
                        <label name="username">Username</label>
                        <input type="text" autofocus placeholder="Enter Username" required name="username">
                        <br>
                        <label>Email</label>
                        <input type="email" placeholder="name@g.com" required name="email">
                        <br>
                        <label>Password</label>
                        <input type="password" placeholder="Enter Password" required minlength="2" maxlength="8" name="password">
                        </div>
                        <div class="done">
                            <input id="ag" type="radio" name="agree" value="I agree to the conditons" required>
                            <label for="ag">I agree to the conditons</label>
                        </div>
                        <div class="sav">
                            <input type="submit" value="Log in" class="su">
                            <input type="reset" value="Reset" class="res"> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>