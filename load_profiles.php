<?php
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
        "image" => "https://s1.r29static.com/bin/entry/311/0,0,2000,2400/720x864,85/2170607/image.webp"
    ],
    [
        "name" => "Noah",
        "age" => 31,
        "city" => "Eindhoven",
        "sport" => "Fietsen",
        "image" => "https://t3.ftcdn.net/jpg/02/17/44/98/360_F_217449874_RiBnrBbn3MI02ub8dUk6be2cKQzLSwkk.jpg"
    ],

];

header('Content-Type: application/json');
echo json_encode($profielen);
?>
