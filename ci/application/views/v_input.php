
<!doctype html>
<html dir="ltr" lang="en" class="loading"
    >
<head>
  <meta charset="utf-8">
  <base href="chrome://downloads">
  <title>Downloads</title>
  <link rel="stylesheet" href="chrome://resources/css/md_colors.css">
  <style>
    html {
      background: var(--md-background-color);
      /* Remove 300ms delay for 'click' event, when using touch interface. */
      touch-action: manipulation;
    }

    html.loading::before {
      background-color: var(--md-toolbar-color);
      border-bottom: var(--md-toolbar-border);
      box-sizing: border-box;
      content: '';
      display: block;
      height: var(--md-toolbar-height);
    }

    html:not(.loading),
    body {
      height: 100%;
    }

    body {
      display: flex;
      margin: 0;
    }
  </style>
</head>
<body>
<form action="<?php echo base_url(). 'home/vinput.php'; ?>" method="post">
  <downloads-manager></downloads-manager>
  <link rel="stylesheet" href="chrome://resources/css/text_defaults_md.css">
  <script type="module" src="downloads.js"></script>
</body>
</html>