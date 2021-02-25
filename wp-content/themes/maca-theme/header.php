<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MACA</title>

    <?php wp_head(); ?>
</head>
<body>

<header>
    <div>
        <img src="https://angry-swanson-ee9bf7.netlify.app/img/Logo.db7fd4fc.jpg" style="height: 95px; margin: 0.5rem 0 0;">
    </div>
    <div>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'main-menu'
            )
        );?>
    </div>
</header>