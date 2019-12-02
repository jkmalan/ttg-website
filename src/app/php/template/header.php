<head>

    <!-- App options and compatibility settings -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- App title -->
    <title><?php echo $page_title; ?></title>
    <base href="<?php echo BASE_URL; ?>"

    <!-- Google Tag Manager -->
    <script>
        window.dataLayer = window.dataLayer || [];

        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l !== 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N8CTNZ3');
    </script>
    <!-- End Google Tag Manager -->

    <link rel="icon" type="image/x-icon" href="/app/img/favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="/app/css/styles.css">

    <script src="/app/js/scripts.js"></script>

</head>
