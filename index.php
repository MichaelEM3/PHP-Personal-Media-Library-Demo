<!--The include (or require) statement takes all the text/code/markup that exists
in the specified file and copies it into the file that uses the include statement.

Including files is very useful when you want to include
the same PHP, HTML, or text on multiple pages of a website. -->

<?php
include("includes/data.php");
include("includes/functions.php");

$pageTitle = "Personal Media Library";
$section = null;

include("includes/header.php"); ?>

		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

				<ul class="items">
					<!--using a foreeach loop to print all the catalog array items to the page -->
					<!--$item is a variable name we created just for this loop -->
					<?php
					$random = array_rand($catalog, 4);
					foreach($random as $id) {
						echo get_item_html($id, $catalog[$id]);
					}
					?>
				</ul>

			</div>

		</div>

<?php include("includes/footer.php"); ?>
