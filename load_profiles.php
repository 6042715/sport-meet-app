<?php
// Lijst met sportprofielen
$profielen = [
    [
        "name" => "Alex",
        "age" => 29,
        "city" => "New York",
        "sport" => "Hardlopen",
        "image" => "https://t3.ftcdn.net/jpg/02/58/89/90/360_F_258899001_68CalsKTRk6PZQgWH9JhR4heBlncCko9.jpg"
    ],
    [
        "name" => "Emma",
        "age" => 26,
        "city" => "Amsterdam",
        "sport" => "Yoga",
        "image" => "https://img.freepik.com/free-photo/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair_285396-896.jpg?semt=ais_hybrid&w=740"
    ],
    [
        "name" => "Liam",
        "age" => 32,
        "city" => "Rotterdam",
        "sport" => "Tennis",
        "image" => "https://www.stylecraze.com/wp-content/uploads/2020/09/Best-Qualities-Of-A-Good-Man-That-Make-Him-Desirable_1200px.jpg.webp"
    ],
    [
        "name" => "Sophie",
        "age" => 24,
        "city" => "Utrecht",
        "sport" => "Pilates",
        "image" => "https://img.freepik.com/free-photo/young-woman-doing-yoga_23-2149180922.jpg"
    ],
    [
        "name" => "Noah",
        "age" => 31,
        "city" => "Eindhoven",
        "sport" => "Fietsen",
        "image" => "https://img.freepik.com/free-photo/young-man-bike-riding_1303-21073.jpg"
    ],
    [
        "name" => "Olivia",
        "age" => 27,
        "city" => "Groningen",
        "sport" => "Boksen",
        "image" => "https://img.freepik.com/free-photo/young-female-boxer-training-with-punching-bag-gym_23-2148702034.jpg"
    ],
    [
        "name" => "Lucas",
        "age" => 28,
        "city" => "Den Haag",
        "sport" => "Zwemmen",
        "image" => "https://img.freepik.com/free-photo/smiling-man-swimming-pool_23-2147898278.jpg"
    ],
    [
        "name" => "Mila",
        "age" => 30,
        "city" => "Nijmegen",
        "sport" => "Dansen",
        "image" => "https://img.freepik.com/free-photo/young-pretty-dancer-dancing_23-2147822376.jpg"
    ],
    [
        "name" => "Daan",
        "age" => 35,
        "city" => "Haarlem",
        "sport" => "Voetbal",
        "image" => "https://img.freepik.com/free-photo/handsome-football-player-posing_23-2147790584.jpg"
    ],
    [
        "name" => "Isabella",
        "age" => 25,
        "city" => "Tilburg",
        "sport" => "Hardlopen",
        "image" => "https://img.freepik.com/free-photo/young-fit-woman-doing-outdoor-running-training_23-2148975297.jpg"
    ]
];

// Geef de data terug als JSON
header('Content-Type: application/json');
echo json_encode($profielen);
?>
