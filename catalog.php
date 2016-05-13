<?php

$pageTitle = "Full Catalog";
$section = null;

//changes the pageTitle when you click on the different nav options
//goes with "Full Catalog" default when Books, Movies, or Music aren't selected
//even if you edit the URL

if (isset($_GET["cat"])) {
  if ($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
  } else if ($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  } else if ($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}

include("includes/header.php"); ?>

<div class="section page">
  <h1><?php echo $pageTitle; ?></h1>
</div>

<?php include("includes/footer.php"); ?>
