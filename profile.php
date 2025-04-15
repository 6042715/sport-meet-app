<?php
session_start();

//fixes redirect of createProfile
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
  $_SESSION['profile'] = [
    'name' => $_POST['firstName'] . ' ' . $_POST['lastName'],
    'location' => $_POST['location'],
  ];

    header('Location: chooseSport.php');
    exit();
}


// Default profile data
$profile = [
    'name' => 'Michael Johnson',
    'location' => 'New York', 
    'sports' => 'Running, Tennis, Cycling',
    'image_updated' => false
];

// Override with session data if available
if (isset($_SESSION['profile'])) {
    $profile = array_merge($profile, $_SESSION['profile']);
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
<body class="profiles">
    <header class="headerProfile">
        <nav>
            <a href="swipe.php"><img src="lib/icons/arrow_back.svg" alt="pijl naar links"></a>
        </nav>
        <h1>Profile</h1>
        <a href="edit-profile.php" style="color: #3498db; font-size: 14px; text-decoration: none;">Edit profile</a>
    </header>

    <main id="mainProfile">
        <section class="profileContainer">
          <article class="profileImage">
            <img src="img/profielfoto.jpg" alt="Profile picture">
          </article>

          <article>
            <h2 class="profileName"><?php echo htmlspecialchars($profile['name']); ?></h2>
            <address class="profileLocation"><?php echo htmlspecialchars($profile['location']); ?></address>
            <p class="profileSports">
                <span class="visually-hidden">Favorite sports:</span>
                <?php echo htmlspecialchars($profile['sports']); ?>
            </p>
          </article>
        </section>

        <section class="doelenProfiel">
          <article>
            <h2>Goals</h2>
          </article>

          <article class="buttonGoals">
            <button>Get Fit <img id="pijlRechts" src="lib/icons/arrow_back.svg" alt=""></button>
          </article>
        </section>

        <section class="statsProfiel">
          <article>
            <h2>Your Statistics</h2>
          </article>

          <article class="activeProfiel">
            <p data-value="4">Connections</p>
            <p data-value="8">Active Days</p>
          </article>
        </section>

        <section class="statsProfiel">
          <article>
            <h2>Step counter</h2>
          </article>

          <article class="activeProfiel">
            <p>You have walked ... KM today</p>
          </article>
        </section>

        <section class="statsProfiel">
          <article>
            <h2>Recent sportevents</h2>
          </article>

          <article class="activeProfiel">
            <p>Look here for all your previous sportevents <img id="pijlRechts" src="lib/icons/arrow_back.svg" alt=""></p>
          </article>
        </section>

        <section class="evenementSign">
          <a href="#">Sign up for sportevents</a>
        </section>
    </main>

    <?php include_once("templates/footer.php"); ?> 
</body>
</html>