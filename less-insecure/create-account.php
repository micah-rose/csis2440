<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Less of an Insecurity</title>
        <link type="text/css" rel="stylesheet" href="/less-insecure/css/less-insecure.css" />
        <script src="js/less-insecure.js"></script>
    </head>
    <body>
        <form method="post">
            <input id="username" oninput="validateStuff(this);" type="text" placeholder="Username">
            <input id="password" oninput="validateStuff(this);" type="text" placeholder="Password">
            <input id="v-password" oninput="validateStuff(this);" type="text" placeholder="Verify Password">
            <input id="secret-code" oninput="validateStuff(this);" type="text" placeholder="Secret Code">
            <input name= 'submit' type="submit" value="Create Account">
            <input type="reset"> 
        </form>
        <p id="phone"></p>
        <p id="email"></p>
    </body>
</html>