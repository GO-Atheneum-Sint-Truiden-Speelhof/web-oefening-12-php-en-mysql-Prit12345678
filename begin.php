<!DOCTYPE html>
<html lang="nl">

<?php  include("includes/head.php")?>

<body>
	<div class="container">

		<?php 
	// menu toevoegen
		include("includes/nav.php");

	// controle
		if (!isset ($_GET['page']))
		 {
			include("includes/start.php");
		}
		else
		{
			$link = "includes/".$_GET['page'].".php";
			include($link);
		}
		// invoegen footer
		include("includes/footer.php")
		?>

	</div>
</body>

</html>