<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>find a sport partner</title>
  <link rel="stylesheet" href="style/main-style.css">
</head>
<body class="swipe-style">

<section class="card-container" id="cardContainer"></section>

<script>
  let currentIndex = 0;
  let profiles = [];

  async function loadProfiles() {
    const res = await fetch('load_profiles.php');
    profiles = await res.json();
    showProfile(currentIndex);
  }

  function showProfile(index) {
    const container = document.getElementById('cardContainer');
    container.innerHTML = '';
    if (index >= profiles.length) {
      container.innerHTML = '<p>Geen profielen meer!</p>';
      return;
    }

    const profile = profiles[index];
    const card = document.createElement('article');
    card.className = 'card';
    card.innerHTML = `
      <img src="${profile.image}" alt="${profile.name}" />
      <article class="profile-details">
        <h3>${profile.name}, ${profile.age}</h3>
        <p>${profile.city} – ${profile.sport}</p>
      </article>
      <div class="buttons">
        <button class="no" onclick="swipeLeft()">X</button>
        <button class="yes" onclick="swipeRight()">✓</button>
      </div>
    `;
    container.appendChild(card);
  }

  function swipeLeft() {
    currentIndex++;
    showProfile(currentIndex);
  }

  function swipeRight() {
    currentIndex++;
    showProfile(currentIndex);
  }

  loadProfiles();
</script>

<?php include_once("templates/footer.php"); ?> 

</body>
</html>
