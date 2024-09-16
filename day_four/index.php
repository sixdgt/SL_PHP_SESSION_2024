<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page Design</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section>
        <div class="right">
            <h1>Welcome Friend</h1>
            <p>To keep connected with us please login with your personal info</p>
            <button>Sign</button>
        </div>
        <div class="left">
            <div class="social">
                <h1>Create Account</h1>
                <div class="icon">
                    <span><i class="fa-brands fa-facebook"></i></span>
                    <span><i class="fa-brands fa-twitter"></i></span>
                    <span><i class="fa-brands fa-google"></i></span>
                </div>
                <p>or use your email for registration</p>
            </div>
            <div class="form">
                <form action="#">
                    <div class="input">
                        <div class="form-group">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="button">
                        <button id="signUp">Sign Up</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
</body>
</html>