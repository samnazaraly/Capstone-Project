<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<!--specify post method-->
<form action ="process-login.php" method="post" novalidate>
        <!--login-->
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
    </div>

         <!--input for password-->
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>

    <button>Log in</button>

</form>

 <!-- add link to return to homepage-->
 <p><a href="home.php">Return to homepage</p>
    
    
</body>
</html>
