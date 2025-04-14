<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Train2connect</title>
    <link rel="stylesheet" href="style/main-style.css">
</head>
<body>
    <header>
        <!-- Header content can be added later -->
    </header>
    <main id="signin-screen">
        <div class="signin-container">
            <!-- Logo circle with icon -->
            <div class="logo">
                <span class="icon">⚡</span>
            </div>
            
            <!-- Login header -->
            <h1>Welcome Back</h1>
            
            <!-- Login form -->
            <form class="signin-form" action="#" method="post">
                <!-- Email/Username field -->
                <div class="form-group">
                    <label for="email">Email or Username</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email or username" required>
                </div>
                
                <!-- Password field -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <div class="password-options">
                        <a href="forgotPassword.php" class="forgot-password">Forgot password?</a>
                    </div>
                </div>
                
                <!-- Submit button -->
                <button type="submit" class="signin-button">Log In</button>
                
                <!-- Sign-up option -->
                <div class="alternate-action">
                    <p>Don't have an account? <a href="signin.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </main>
</body>
</html>