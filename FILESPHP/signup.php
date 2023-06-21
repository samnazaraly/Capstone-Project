<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../FILESCSS/signup.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="logo">
                <img src="MDAI_LOGO.png" alt="logo">
            </div>
            <!-- Add other nav-bar items if necessary -->
        </div>
    </header>

    <main>
        <section class="signup-section">
            <h1>Please register below</h1>

            <!-- process-signup.php is where all the data being submitted will be processed
            post method = if we are saving data to the server -->

            <!-- we use the novalidate attribute to disable HTML auto validation and do the validation ourselves -->
            <form action="process-signup.php" method="post" novalidate>
                <!-- input for name -->
                <div>
                    <label for="name">Name</label> 
                    <input type="text" id="name" name="name">
                </div>

                <!-- input for email -->
                <div>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                </div>

                <!-- input for password -->
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>

                <!-- input for password confirmation -->
                <div>
                    <label for="password_confirmation">Password confirmation</label>
                    <input type="password" id="password_confirmation" name="password_confirmation">
                </div>

                <button>Sign up</button>
                <button><a href="login.php">Log in</a></button>
            </form>

            <!-- add link to return to homepage -->
            <p><a href="home.php">Return to homepage</a></p>
        </section>
    </main>

    <footer>
        <!-- Your Footer Content -->
    </footer>
</body>
</html>
