<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("modules/header.php") ?>
</head>

<body>

<?php
include("modules/menu.php");
include("modules/carousel.php");
?>

<div id="body-container" class="container marketing">
    <?php
		switch($_GET["p"]){
			case "result":
				include("modules/result/result.php");
				break;
			case "news":
                include("modules/news/news.php");
				break;
			case "contact":
                include("modules/contact/contact.php");
				break;
			default:
				include("modules/home/body_container.php");
				break;
		}
	?>
</div>

<?php include("modules/footer.php") ?>

</body>
</html>
