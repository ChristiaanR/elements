<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light dark">
  <?php include 'components/favicon.php'; ?>
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link
    href="https://fonts.bunny.net/css?family=anybody:200,200i,300,300i,400,400i,500,500i,700,700i|manrope:200,400,700"
    rel="stylesheet" />
  <!-- via develop@chr.nl -->
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/custom-props.css">
  <link rel="stylesheet" href="./css/text.css">
  <link rel="stylesheet" href="./css/layout.css">
  <link rel="stylesheet" href="./css/buttons.css">
  <link rel="stylesheet" href="./css/theme.css">

  <script src="https://kit.fontawesome.com/5a43375756.js"
    crossorigin="anonymous"></script>

  <title>Web elementen</title>
</head>

<body>
  <a href="#main" class="btn skip">Naar main</a>
  <div class="body-wrapper">
    <main id="main">
      <?php include 'components/nav.php'; ?>
      <?php include 'components/cards.php'; ?>
      <?php include 'components/colors.php'; ?>
    </main>
  </div>

  <div>
    <details>
      <summary>Details</summary>
      Something small enough to escape casual notice.
    </details>
  </div>

</body>

</html>