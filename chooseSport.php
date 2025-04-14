<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['sports'])) {
        // Convert selected sports array to comma-separated string
        $selectedSports = implode(', ', $_POST['sports']);

        // Store it in session
        $_SESSION['profile']['sports'] = $selectedSports;

        // Redirect or continue to next step
        header('Location: profile.php'); /* FIXME: link to homepage */
        exit();
    } 
}
?>

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
        <a href="createProfile.php"><img src="lib/icons/arrow_back.svg" alt="" class="arrow_black"></a>
        <p class="small-header-create-profile">Create a Profile</p>
    </header>

    <main class="create-profile-container">
        <h1 class="header-create-profile">Choose your sports</h1>
        <form class="sport-options" method="post" action="#">
            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="running" />
                Running
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="cycling" />
                Cycling
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="tennis" />
                Tennis
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="gym" />
                Gym
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="swimming" />
                Swimming
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="short-walks" />
                Short Walks
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="basketball" />
                Basketball
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="ballet" />
                Ballet
            </label>
            <button type="submit" class="green-button">Continue</button>

        </form>
        


    </main>
</body>
</html>