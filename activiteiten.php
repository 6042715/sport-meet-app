<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="style/main-style.css">
</head>

<body>
<header class="header-pad">
    <h1 class="title">Activities</h1>
  </header>

  <main>
    <section aria-label="Upcoming activities" class="activities-section">

      <article class="activity-card">
        <article class="activity-text">
          <h2>Hardlopersvereniging</h2>
          <p><time datetime="2025-04-23T18:00">Apr 23, 18:00</time></p>
          <p>Leiden</p>
        </article>
        <img src="img/hardlopers.jpg" alt="mensen die samen rennen" />

        <button class="activityButton">Meedoen</button>
      </article>

      <article class="activity-card">
        <article class="activity-text">
          <h2>Girls night: Golfen</h2>
          <p><time datetime="2025-04-26T21:00">Apr 26, 21:00</time></p>
          <p>Wassenaar</p>
        </article>
        <img src="img/girlsgolf.jpeg" alt="meiden die samen golfen" />

        <button class="activityButton">Meedoen</button>
      </article>

      <article class="activity-card">
        <article class="activity-text">
          <h2>Tennis Meetup</h2>
          <p><time datetime="2025-04-30T10:00">Apr 30, 10:00</time></p>
          <p>Roelofarendsveen</p>
        </article>
        <img src="img/tennisgroep.jpeg" alt="tennis groep" />

        <button class="activityButton">Meedoen</button>
      </article>

      

    </section>
  </main>
<?php
include_once("templates/footer.php");
?> 

</body>
</html>