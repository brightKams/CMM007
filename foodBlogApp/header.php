<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./assets/styles/styles.css" type="text/css">
    <title>TASTE9ja DESERTS</title>

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body>

<?php 

    echo ' <header class="header-wrapper sticky-top container-fluid d-flex p-2">
    <nav class="navbar navbar-expand-lg container-fluid  justify-content-between bg-body-white shadow">
        <div class="container-fluid nav-navigations ">
            <a class="navbar-brand" href="index.php">
                <p class="logo d-flex align-items-center justify-content-center m-auto p-2 text-center">Taste 9ja
                </p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-2 mx-2">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item px-2 mx-2 ">
                        <a class="nav-link" href="#">Get Inspired</a>
                    </li>
                    <li class="nav-item px-2 mx-2 ">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li> -->
                </ul>
            </div>
        </div>


        <div class="userProfile-access-wrapper px-3 d-flex align-items-center justify-content-between">
            <div class="search border rounded-4">
                <input type="search" class="userSearch rounded-3 p-2" name="userSearch" id="userSearch">

            </div>

            <button type="search"
                class="btn  user-searchBtn bg-none rounded-5 py-2 d-flex justify-content-center align-items-center mx-2 text-black"
                name="signupBtn"> <span class="material-symbols-outlined fs-1">
                    search
                </span>
            </button>

            <div class="userAvatar-wrapper border">
                <img src="./assets/images/avatarPlaceholder.png" class="user-avatar" alt="user-avatar" width="100%" height="100%">
            </div>

            <div class="logout-wrapper">
                <a
                    class="btn user-btn bg-dark rounded-5 p-1 mx-2 text-white d-flex align-items-center justify-content-center"
                    name="loginBtn" onclick="window.location.href = \'logout.php\'"><span
                        class="material-symbols-outlined p-1">
                        logout
                    </span> Logout</a>

            </div>
        </div>

    </nav>

</header> ' ;

exit;
 
        
        
?>
    
</body>
</html>