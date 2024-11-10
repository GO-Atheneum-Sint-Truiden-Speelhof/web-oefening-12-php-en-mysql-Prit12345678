<!DOCTYPE html>
<html lang="en">

<?php  include("includes/head.php")?>

<script>

	function akkoord(){
		location.href = 'begin.php'
	}
	function nietakkoord(){
		location.href = 'https://www.google.com'
	}

</script>
<body>
	<div class="container">
	<div class="jumbotron">
            <h1 class="display-4">Fotowedstrijd</h1>
        </div>
		<div class="row">
			<div class="col tegel knoppen">
				<button onclick="akkoord()" class="btn-secondary btn-lg" type="button">Akkoord</button>
				<button onclick="nietakkoord()" class="btn-secondary btn-lg" type="button">Niet akkoord</button>
			</div>
		</div>
	</div>
</body>
</html>


