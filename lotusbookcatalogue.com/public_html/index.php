<?php
session_start();
include("book.php");
include("author.php");
include("genre.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Book Catalogue</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<?php include("pagetop.inc.php"); ?>
		<header>
			<?php include("header.inc.php"); ?>
		</header>
			<main>
                <?php
                if (isset($_REQUEST['content'])) {
                    include($_REQUEST['content'] . ".inc.php");
                } else {
                    include("main.inc.php");
                }
                ?>
			<nav>
                <?php include("nav.inc.php"); ?>
			</nav>
			<aside>
                <?php include("aside.inc.php"); ?>
			</aside>
		</main>
<?php include("pagebottom.inc.php"); ?>

<footer class="site-footer">
    <?php include("footer.inc.php"); ?>
</footer>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>

</body>

</html>
