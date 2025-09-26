<?php include_once('config.php'); ?>
<?php
// Defaults
$metaTitle = isset($metaTitle) ? $metaTitle : "Grow2Design - Growth Through Design Excellence";
$metaDescription = isset($metaDescription) ? $metaDescription : "Transform your business with data-driven digital marketing and design excellence. Global reach, personal touch, measurable results.";
$metaKeywords = isset($metaKeywords) ? $metaKeywords : "digital marketing, design agency, marketing strategies, business growth";
$metaFavicon = isset($metaFavicon) ? $metaFavicon : "../public/logo.png";
$metaCanonical = isset($metaCanonical) ? $metaCanonical : "https://www.grow2design.com/" . $_SERVER['REQUEST_URI'];
$metaOGTitle = isset($metaOGTitle) ? $metaOGTitle : $metaTitle;
$metaOGDescription = isset($metaOGDescription) ? $metaOGDescription : $metaDescription;
$metaOGImage = isset($metaOGImage) ? $metaOGImage : "../public/logo.png";
$metaOGUrl = isset($metaOGUrl) ? $metaOGUrl : $metaCanonical;
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Karan Kumar (LinkedIn: https://www.linkedin.com/in/karan-kumar-a798b020b)">
    <title><?php echo $metaTitle; ?></title>
    <meta name="description" content="<?php echo $metaDescription; ?>" />
    <meta name="keywords" content="<?php echo $metaKeywords; ?>" />
    <link rel="canonical" href="<?php echo $metaCanonical; ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $metaOGTitle; ?>" />
    <meta property="og:description" content="<?php echo $metaOGDescription; ?>" />
    <meta property="og:image" content="<?php echo $metaOGImage; ?>" />
    <meta property="og:url" content="<?php echo $metaOGUrl; ?>" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $metaOGTitle; ?>" />
    <meta name="twitter:description" content="<?php echo $metaOGDescription; ?>" />
    <meta name="twitter:image" content="<?php echo $metaOGImage; ?>" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $metaFavicon; ?>" />

    <!-- Styles -->
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <!-- <script type="module" src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fgrow2desig9849back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.8"></script> -->

    <!-- Structured data (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Grow2Design Agency",
      "url": "<?php echo $metaCanonical; ?>",
      "logo": "<?php echo $metaFavicon; ?>",
      "sameAs": [
        "https://www.facebook.com/YourPage",
        "https://www.twitter.com/YourProfile",
        "https://www.linkedin.com/company/YourCompany"
      ]
    }
    </script>
</head>
