<?php

//it's good practice to start with an empty array.
//101 is us assigning a key to the value of "Design Patterns", PHP lets you set keys yourself
//we're giving books keys in the 100s, movies keys in the 200s, music the 300s

$catalog = array();
$catalog[101] = "Design Patterns";
$catalog[201] = "Forrest Gump";
$catalog[301] = "Beethoven";

//Original way we created this array. See above for best practice.
// $catalog = array(
//   "Design Patterns",
//   "Forrest Gump",
//   "Beethoven"
// );

$catalog[102] = "Clean Code";
//tells PHP to add one new element to the array using whatever index is available next.
//PHP will assign an index of 3. Design Patterns = 0, remember.

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

<div class="section catalog page">

  <div class="wrapper">

    <h1><?php echo $pageTitle; ?></h1>

    <ul>
      <!--using a foreeach loop to print all the catalog array items to the page -->
      <!--$item is a variable name we created just for this loop -->
      <?php foreach($catalog as $item) {
        echo "<li>" . $item . "</li>";
      }
      ?>
      <!-- <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li> -->
      <!-- the PHP above accomplishes what these list tags intended. -->
    </ul>

  </div>

</div>

<?php include("includes/footer.php"); ?>
