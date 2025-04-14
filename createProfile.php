<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/main-style.css">
</head>
<body class="profile-header-body">
    <header class="profile-header">
        <a href="index.php"><img src="lib/icons/arrow_back.svg" alt="" class="arrow_black"></a>
        <p class="small-header-create-profile">Create a Profile</p>
    </header>

    <main class="create-profile-container create-profile-2">
        <h1 class="profile-header" id="who-are-you">Tell us who you are</h1>
        <!-- username email wachtwoord -->
        <form action="profile.php" class="create-profile" method="post">
            <div class="create-profile-input-wrap">
                <label for="firstName">First Name</label>
                <input class="form-control" type="text" name="firstName">
            </div>
            <div class="create-profile-input-wrap">
                <label for="lastName">Last Name</label>
                <input class="form-control" type="text" name="lastName">
            </div>
            <div class="create-profile-input-wrap">
                <label for="location">Location</label>
                <input class="form-control" type="text" name="location">
            </div>
            <div class="create-profile-input-wrap about-me">
                <label for="aboutme">About me</label>
                <textarea name="about" class="form-control" name="aboutme"></textarea>
            </div>

            <button type="submit" class="green-button">Continue</button>
        </form>

    </main>
</body>

</html>