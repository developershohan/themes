<!doctype html>
<html <?php echo get_language_attributes() ?>>

<head>
    <meta charset=" <?php bloginfo('charset') ?> ">

    <?php if (is_singular() && pings_open(get_queried_object())): ?>
    <?php endif; ?>

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>