<!DOCTYPE html>
<html lang="ptBR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miguel B.</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
  <?php
  include('components/side-bar.php');
  $page = $_GET['page'];
  $id = $_GET['id'];
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if ($page == 'notice') {
    if (file_exists('pages/notice-' . $id . '.php')) {
      include('pages/notice-' . $id . '.php');
    } else {
      include('pages/error.php');
    }
  } elseif ($page == 'home' or $page == '') {
    include('pages/home.php');
  } elseif ($page == 'about'){
    include('pages/about.php');
  } elseif($page == 'support'){
    include('pages/support.php');
  }
  ?>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="carrousel.js"></script>
<script>
  AOS.init();
  feather.replace()
</script>

</html>