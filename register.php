<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <h1>Social Network Register</h1>
        <h1 id="hContent"></h1>
        <h2 id="hContent2"></h2>

        <div class="form">
            <form action="registerok.php" method="post" />
                <input type="text" name="username" placeholder="Username" required />
                <input type="text" name="user_email" placeholder="Email" required />
                <input type="password" name="user_password" placeholder="Password" required />
                <input type="submit" value="Register" />
                <br /> <br />
                <a href="login.php">Sign Up</a>
                <a href="https://www.facebook.com/">Facebook</a>
            </form>
        </div>

        <script src="script.js"></script>
    </body>
</html>