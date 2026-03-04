<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Culinary Cove - <?php echo $page_title; ?></title>
    <link rel="stylesheet" href="../styles/home.css">

    <?php if (isset($page_css)) : ?>
        <link rel="stylesheet" href="../<?php echo $page_css; ?>">
    <?php endif; ?>

    <style>
        #header-main {
            background: url('../assets/img/<?php echo $header_background_image; ?>');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 40vh;
            color: white;
        }
    </style>

</head>

<body>
    <header id="header-main">
        <div id="head-line">
            <h1>Culinary Cove</h1>
            <h2>Your Sanctuary for exceptional flavors</h2>
        </div>

        <nav id="navbar">
            <ul>
                <li>
                    <a href="our-mission.php">Our Mission</a>
                </li>
                <li>
                    <a href="ingredients.php">Ingredients</a>
                </li>
                <li>
                    <a href="menu.php">Our Menu</a>
                </li>

            </ul>
        </nav>
        </div>

    </header>