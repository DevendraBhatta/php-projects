<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Culinary Cove - <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="../styles/home.css">

    <?php if (isset($page_css)) : ?>
        <link rel="stylesheet" href="../<?php echo $page_css; ?>">
    <?php endif; ?>

</head>

<body>
    <!-- Header Starts Here -->
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

            </ul>
        </nav>
        </div>

    </header>