<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Webpkj SBAdmin</title>
  <!-- Bootstrap core CSS-->
  <link href="<?= $public ?>templates/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?= $public ?>templates/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?= $public ?>templates/css/sb-admin.css" rel="stylesheet">
    
  <?php 
  import('jquery');
  import('pkj');
  import('bind2');
  ?>
</head>

<body class="bg-dark">
  <div class="container">
    <?= $content ?>
  </div>
  <!-- Bootstrap core JavaScript-->

  <script src="<?= $public ?>templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= $public ?>templates/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
