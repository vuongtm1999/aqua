<?php 
	$dm='http://localhost/aqua/api/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="<?php echo $dm; ?>"/>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?version=<?php echo time(); ?>" />
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
		integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="public/js/jquery.js"></script>
	<script src="owlcarousel/owl.carousel-2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>

	<title>Aqua</title>
</head>

<body style="background-image: url(public/demo/bg_foot.png);" class="bg_foot bg-primary">
	<div class="container-fluid">
		<?php 
		if(@$_GET['p']){
			$p=$_GET['p'];
			require "page/header.php";
			require "page/".$p.".php";
			require "page/footer.php";
		} else{
			require "page/header.php";
			require "page/trangchu.php";
			require "page/footer.php";
		}
		?>

	</div>
</body>

</html>
<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>