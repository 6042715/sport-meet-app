<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['sports'])) {
        // Convert selected sports array to comma-separated string
        $selectedSports = implode(', ', $_POST['sports']);

        // Store it in session
        $_SESSION['profile']['sports'] = $selectedSports;

        // Redirect or continue to next step
      
    } 
    header('Location: swipe.php'); /* TODO: link to homepage */
    exit();
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
<body class="profile-header-body beepSport">
    
    <header class="profile-header">
        <a href="createProfile.php"><img src="lib/icons/arrow_back.svg" alt="" class="arrow_black"></a>
        <p class="small-header-create-profile">Create a Profile</p>
    </header>

    <main class="create-profile-container aaaaa">
        <h1 class="header-create-profile">Choose your sports</h1>
        <form class="sport-options" method="post"> 
            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="Running" />
                Running
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="Cycling" />
                Cycling
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="Tennis" />
                Tennis
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="Gym" />
                Gym
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="Swimming" />
                Swimming
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="Short-walks" />
                Short Walks
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="Basketball" />
                Basketball
            </label>

            <label class="sport-options_label">
                <input type="checkbox" name="sports[]" value="Ballet" />
                Ballet
            </label>
            <button type="submit" class="green-button">Continue</button>

        </form>
        


    </main>
</body>
</html>