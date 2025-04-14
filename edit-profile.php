<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['profile'] = [
        'name' => $_POST['fullName'],
        'location' => $_POST['location'],
        'sports' => $_POST['sports']
    ];
    
    if(isset($_FILES['profilePicture']) && $_FILES['profilePicture']['error'] == 0) {
        $_SESSION['profile']['image_updated'] = true;
    }
    
    header("Location: profile.php");
    exit();
}

$profile = [
    'name' => 'Michael Johnson',
    'location' => 'New York',
    'sports' => 'Running, Tennis, Cycling'
];

if (isset($_SESSION['profile'])) {
    $profile = $_SESSION['profile'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style/main-style.css">
    <style>
        .headerProfile {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background-color: white;
            border-bottom: 1px solid #eaeaea;
        }
        
        .headerProfile nav img {
            width: 24px;
            height: 24px;
        }
        
        .headerProfile h1 {
            font-size: 18px;
            font-weight: 600;
            margin: 0;
            font-family: sans-serif;
        }

        #mainEditProfile {
            padding: 16px;
            font-family: sans-serif;
        }

        .profileImageEdit {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 25px;
        }

        .profileImageEdit img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .profileImageEdit label {
            color: #3498db;
            cursor: pointer;
            margin-top: 8px;
        }

        .profileImageEdit input {
            display: none;
        }

        .formGroup {
            margin-bottom: 20px;
        }

        .formGroup label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            font-size: 14px;
            color: #444;
        }

        .formGroup input, 
        .formGroup textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }

        .formGroup textarea {
            height: 100px;
            resize: none;
        }

        .saveButton {
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 14px 0;
            width: 100%;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            margin-top: 10px;
        }

        .saveButton:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header class="headerProfile">
        <nav>
            <a href="profile.php"><img src="lib/icons/arrow_back.svg" alt="go back"></a>
        </nav>
        <h1>Edit Profile</h1>
        <button type="submit" form="editProfileForm" style="background:none; border:none; color:#3498db; font-size:14px; cursor:pointer;">Save</button>
    </header>

    <main id="mainEditProfile">
        <form id="editProfileForm" method="POST" enctype="multipart/form-data">
            <div class="profileImageEdit">
                <img src="img/profielfoto.jpg" alt="Profile picture" id="profilePreview">  
                <label for="profilePicture">Change photo</label>
                <input type="file" id="profilePicture" name="profilePicture" accept="image/*">
            </div>

            <div class="formGroup">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" value="<?php echo htmlspecialchars($profile['name']); ?>" required>
            </div>

            <div class="formGroup">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" value="<?php echo htmlspecialchars($profile['location']); ?>">
            </div>

            <div class="formGroup">
                <label for="sports">Favorite Sports (comma separated)</label>
                <textarea id="sports" name="sports"><?php echo htmlspecialchars($profile['sports']); ?></textarea>
            </div>

            <button type="submit" class="saveButton">Save Changes</button>
        </form>
    </main>

    <script>
        document.getElementById('profilePicture').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profilePreview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>