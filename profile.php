<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/main-style.css">
</head>
<body>
    <header class="headerProfile">
        <nav>
            <a href="index.php"><img src="lib/icons/arrow_back.svg" alt="pijl naar links"></a>
        </nav>
        <h1>Profile</h1>
        <p>Edit profile</p>
    </header>

    <main id="mainProfile">
        <section class="profileContainer">
          <article class="profileImage">
            <img src="img/profielfoto.jpg" alt="Profile picture">
          </article>

          <article>
            <h2 class="profileName">Michael Johnson</h2>
            <address class="profileLocation">New York</address>
            <p class="profileSports">
                <span class="visually-hidden">Favorite sports:</span>
                Running, Tennis, Cycling
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

        <section class="evenementSign">
          <a href="#">sign up for evenement</a>
        </section>
    </main>

    <?php
    include_once("templates/footer.php");
    ?> 
</body>
</html>