<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/main-style.css">
</head>
<body>
    <header></header>
    <main id="chatMain">
        <section id="chatSection">
            <!-- voorbeeld chat (wordt meteen verwijderd) -->
            <div class="chatBubble" id="templateMSG">
                <img src="img/placeholders/profile1.png">
                <div class="chatContent">
                    <h3 class="chatName">Jan koekepan</h3>
                    <p class="chatText">
                    </p>
                </div>
            </div>
        </section>
        <form id="chatInput">
            <textarea id="textInput" rows="1"></textarea>
            <input type="submit" id="sendButton" value="-->">
        </form>
    </main>
    <?php
    include_once("templates/footer.php");
    ?> 
    <script src="lib/chatTest.js" defer></script>
</body>
</html>