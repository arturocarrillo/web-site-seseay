  <!DOCTYPE html>
<html lang="es-MX" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <link rel="canonical" href="http://www.seseay.gob.mx">
    <link rel="shortlink" href="http://seseay.gob.mx">
    <meta name="description" content="La Secretaría Ejecutiva del Sistema Estatal Anticorrupción de Yucatán (SESEAY), somos un organismo público descentralizado, no sectorizado, con personalidad jurídica y patrimonio propio, autonomía técnica y de gestión funge como órgano de apoyo técnico del comité coordinador">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recomendaciones</title>
	<link rel="apple-touch-icon" sizes="57x57" href="./img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="./img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="./img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="./img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="./img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="./img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="./img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="./img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
	<link rel="manifest" href="./img/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="./img/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<link rel="canonical" href="http://seseay.org.mx/recommendation.php">
	<link rel="shortlink" href="http://seseay.org.mx/recommendation.php">
	<link rel="stylesheet" type="text/css" href="./css/style_icon.css">
	<link rel="stylesheet" type="text/css" href="./css/scroll-top.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/style-footer.css">
	<script src="./js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script> 
	<script src="./js/script4.js" type="text/javascript" charset="utf-8"></script> 
	<script src="./js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
	<script>
		$(document).ready(function () {
    		$('.up').click(function(){
        		$('body,html').animate({
           	 		scrollTop: '0px'
        		}, 1000);
    		});
    		$(window).scroll(function(){
        		if( $(this).scrollTop() > 0 ){
            		$('.up').slideDown(600);
        		}else {
            		$('.up').slideUp(600);
        		}
    		});
    		/*hacia abajo*/
     		$('.ir-abajo').click(function(){
         		$('body,html').animate({
           	  		scrollTop: '1000px'
         		}, 1000);
     		});
		});
	</script>
</head>
<body>
	<div class="up">
    	<span class="ir-arriba icon-arrow-up2">
    	</span>
	</div>
	<?php include'./header.php';?>
	<section class="w-100 mt-9 mb-9 flex justify-content-center">
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-12 mt-2 mb-2">
			<div class="w-100 mt-5 mb-5 start">
				<h2 class="title text-blue_1">Recomendaciones</h2>
			</div>
			<div class="w-100 mt-5 mb-5 start">
				<div class="w-100 mt-2 mb-2 flex ">
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 m-auto rounded border border-shadow p-3">
						<div class="w-100 mt-2 flex">
							<div class="w-100 flex">
								<div class="col-xl-4 p-2 flex">
									<h2 class="title-md text-blue_1">Número:</h2>
								</div>
								<div class="col-xl-4 p-2 flex">
									<h2 class="title-md text-blue_1">Año:</h2>
								</div>
								<div class="col-xl-4 p-2 flex">
									<a href="#" class="m-auto btn bg-blue_1 blue">Descargar PDF</a>
								</div>
								<h2 class="col-xl-12 mt-2 flex title-md text-blue_1">Asunto</h2>
								<p class="col-xl-12 mt-2 flex paragraph-md text-blue_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae magni atque natus reiciendis repellendus perferendis vitae commodi explicabo quasi earum fugiat dolorum consectetur veniam vel distinctio, numquam iste, praesentium ducimus!</p>
								<h2 class="col-xl-12 mt-2 flex title-md text-blue_1">Autoridad</h2>
								<p class="col-xl-12 mt-2 flex paragraph-md text-blue_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus similique sequi id vitae ut, error natus reprehenderit magnam sed reiciendis assumenda, ea quasi corporis, ad blanditiis cumque excepturi fugiat eaque.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include'./footer.php';?>
</body>
</html>