<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# website:http://ogp.me/ns/website#">
    <?php if ( is_404() ) : ob_start(); endif; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
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

	<!-- ▶ URL正規化 -->
    <link rel="canonical" href="<?php
        echo esc_url('https://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]);
        $url = $_SERVER["QUERY_STRING"];
        if ($url != null) {
            echo '?';
            echo esc_url($_SERVER["QUERY_STRING"]);
        }
    ?>">

    <!-- ▶ CSS -->
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <!-- ▶ google material icon -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    <?php wp_head(); ?>
    <?php
    if ( is_404() ) {
        $head_html = ob_get_clean();
        $head_html = preg_replace(
            '/<title>.*?<\/title>/s',
            '<title>Page Not Found</title>',
            $head_html,
            1
        );
        $head_html = preg_replace('/<title>.*?<\/title>/s', '', $head_html);
        $head_html = '<title>Page Not Found</title>' . "\n" . $head_html;
        echo $head_html;
    }
    ?>
</head>

<body <?php body_class(); ?>>