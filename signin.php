<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Train2Connect</title>
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

            <!-- Sign-in header -->
            <h1>Join Train2Connect</h1>

            <!-- Sign-in form -->
            <form class="signin-form" action="createProfile.php" method="get">
                <!-- Username field -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Create a username" required>
                </div>

                <!-- Email field -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <!-- Password field -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a password" required>
                    <small class="password-hint">Must be at least 8 characters</small>
                </div>

                <!-- Submit button -->
                <button href="login.php" type="submit" class="signin-button">Create Account</button>
            </form>
            <!-- Log-in redirect -->
            <div class="alternate-action with-button">
            <p>Already have an account? <a href="login.php">Log in</a></p>
            </div>