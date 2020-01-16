<!DOCTYPE html>
<html lang="en">

<head>
  <title>Virginia State University</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'meta/page-specific-meta.php';?><!-- Page or Application custom meta -->

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

    <?php include 'style/site-specific-style.php';?><!-- Define variables etc. for use in main.less -->

      <link rel="stylesheet/less" type="text/css" href="style/main.less" /><!-- Static VSU Global branding style -->

        <?php include 'style/page-specific-style.php';?><!-- Page or Application custom style -->

</head>

<body class="d-flex flex-column h-100" ng-app="main" ng-controller="mainCtrl">

<header>
  <?php include 'header/default-header.php';?>
</header>

<main role="main">
  <?php include 'body/default-main.php';?>
</main>

<footer class="footer mt-auto py-3">
  <?php include 'footer/default-footer.php';?>
</footer>
   
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script type="text/javascript" src="scripts/js/main.js"></script>

    <?php include 'scripts/page-specific-scripts.php';?><!-- Page or Application custom scripts -->

  <!-- FOR DEVELOPMENT PURPOSES ONLY -> compiles less to css at the DOM -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.10.3/less.min.js"></script>
  <!-- FOR DEVELOPMENT PURPOSES ONLY -> compiles less to css at the DOM -->

</body>

</html>