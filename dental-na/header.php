<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# website:http://ogp.me/ns/website#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">

    <title>
        <?php
            if (is_front_page() || is_home()) {
                bloginfo('name');
            } else {
                wp_title('|', true, 'right');
                bloginfo('name');
            }
        ?>
    </title>

	<!-- ▶ URL normalization -->
    <link rel="canonical" href="<?php
        echo esc_url('https://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]);
        $url = $_SERVER["QUERY_STRING"];
        if ($url != null) {
            echo '?';
            echo esc_url($_SERVER["QUERY_STRING"]);
        }
    ?>">

    <!-- ▶ Disable automatic phone number detection -->
    <meta name="format-detection" content="telephone=no">

    <!-- ▶ Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" sizes="32x32">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">

    <!-- ▶ CSS -->
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <!-- ▶ Google material icon -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- ▶ Disable caching -->
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Expires" content="0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>