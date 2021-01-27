<?php
$json = file_get_contents('js/database.json');
$json_decoded = json_decode($json,TRUE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HUBCEL FILM || TEMPAT STREAMING FILM TERBARU 2021</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="HUBCEL FILM - Kumpulan Link Nonton Streaming Film Movie Indonesia Thailand India Jepang TV Series Season Barat Drama Korea Drakor Cdrama China Sub Indo Gratis Bioskop Keren Terbaru Terlengkap Online CGV Cinema XXI LK 21 Situs Indoxxi Pengganti Indoxx1 Box Office Rebahin Pusat Juragan Serial Layar Kaca Lebar" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://raw.githubusercontent.com/MSI0072/One-Page-Web/main/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7762JVW572"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7762JVW572');
</script>
</head>	
<body>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Upadate</th>
								<th class="column2">No</th>
								<th class="column3">Name</th>
								<th class="column4">Server 1</th>
								<th class="column5">Server 2</th>
								<th class="column6">Status</th>
							</tr>
						</thead>
						<tbody>
						<?php
    						foreach($json_decoded as $result){
        				?>
        					<tr>
            					<td class="column1"><?php echo $result['column1']; ?></td>
            					<td class="column2"><?php echo $result['column2']; ?></td>
            					<td class="column3"><?php echo $result['column3']; ?></td>
								<td class="column4"><?php echo $result['column4']; ?></td>
								<td class="column5"><?php echo $result['column5']; ?></td>
								<td class="column6"><?php echo $result['column6']; ?></td>
        					</tr>
						<?php   
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<script type="text/javascript" src="https://duit.cc/safelink.js?id=95130"></script>
	<script type="text/javascript">	protected_links = "facebook.com,twitter.com,instagram.com,ouo.io"; auto_safelink(); </script>
</body>
</html>
