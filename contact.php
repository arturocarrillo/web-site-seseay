<!DOCTYPE html>
<html lang="es-MX" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
  <!-- essential -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="language" content="spanish">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <!-- essential -->
  <link rel="canonical" href="http://www.seay.org.mx/contac.php">
  <link rel="shortlink" href="http://seay.org.mx/contac.php">
  <meta name="description" content="Secretaría, Ejecutiva,Sistema, Estatal, Anticorrupción, Yucatán, SESEAY">
  <meta name="keywords" content="Secretaría, Ejecutiva,Sistema, Estatal, Anticorrupción, Yucatán, SESEAY">
  <meta name="author" content="Secretaría Ejecutiva">
    <!-- verified your ownership with google -->
  <meta name="google-site-verification" content="GlbZMatmm_8TK0bVts2nVIhDcP-gPbnH5xluJN47RzM">
  <title>Contacto</title>
  <!-- Open Graph -->
  <meta property="og:url" content="http://www.seay.org.mx/contac.php">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Secretaría Ejecutiva del Sistema Estatal Anticorrupción de Yucatán">
  <meta property="og:description" content="Secretaría, Ejecutiva,Sistema, Estatal, Anticorrupción, Yucatán, SESEAY">
  <meta property="og:image" content="https://indra.hosting-mexico.net:2083/cpsess7660515856/frontend/paper_lantern/filemanager/showfile.html?file=logo-header-3.png&fileop=&dir=%2Fhome%2Fseayorgm%2Fpublic_html%2Fimg&dirop=&charset=&file_charset=&baseurl=&basedir=">
  <!-- icon page & mobile apple -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
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
  <!-- fonts & icons -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./css/style_icon.css">
  <!-- styles site -->
  <link rel="stylesheet" type="text/css" href="./css/scroll-top.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/style-contact.css">
  <link rel="stylesheet" type="text/css" href="./css/style-footer.css">
  <script src="./js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="./js/validation_contact.js" type="text/javascript" charset="utf-8"></script>
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
	<section class="w-100 flex justify-content-center mt-11 mb-9">
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-12">
			<div class="w-100 mt-5 mb-5 flex">
				<h2 class="title text-blue_1 flex">Contáctanos</h2>
			</div>
			<div class="w-100 mt-5 mb-5 flex">
				<dv class="col-xl-8 col-lg-8 col-md-8 col-xs-12 containerForm m-auto flex">
			     <form class="cont_form flex m-auto" action="./validation_contact.php" method="post"  onsubmit="return validateFormContact();" accept-charset="utf-8" enctype="multipart/form-data">
        				<div class="form-row around">
         					<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 mt-3 mb-3 p-2">
         						<label for="firstName">Nombre(s)</label>
           					<input type="text" id="firstName"  class="form-control validate"  name="firstName" placeholder="" value="" data-length="30" >
           					<label id="first_error" for="first_error" class="first_error">Caracteres no validos</label>
           					<label id="first_none"  for="first_none" class="first_none">El campo esta vacío</label>
          				</div>
          				<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 mt-3 mb-3 p-2">
          					<label for="lastName">Apellido(s)</label>
            					<input type="text" id="lastName"  class="form-control validate"  name="lastName" placeholder="" value="" data-length="30" >
            					<label id="last_error" for="last_error" class="last_error">Caracteres no validos</label>
            					<label id="last_none"  for="last_none" class="last_none">El campo esta vacío</label>
          				</div>
          				<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 mt-3 mb-3 p-2">
          					<label for="phone">Teléfono</label>
            					<input type="tel" id="phone" class="form-control validate"  name="phone" placeholder="" value="" data-length="10" >
            					<label id="phone_error" for="phone_error" class="phone_error">El campo solo admite números</label>
            					<label id="phone_none"  for="phone_none" class="phone_none">El campo esta vacío</label>

          				</div>
          				<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 mt-3 mb-3 p-2">
          					<label for="email">Correo</label>
            					<input type="email" id="email" class="form-control validate"  name="email" placeholder="" value="" data-length="35" >
            					<label id="email_none"  for="email_none" class="email_none">El campo esta vacío</label>
            					<label id="email_error" for="email_error" class="email_error">correo invalido</label>
          				</div>
      					<div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 mt-3 mb-3 p-2 ">
      						<label for="textarea2">Platícanos más, escribe tus comentarios.</label>
      						<textarea class="form-control validate" rows="6" name="messenger" id="messenger" data-length="150" onpaste="contChar();" onkeyup="contChar();"></textarea>
      						<label class="mt-2" id="res_char" for="res_char" class="res_char">0</label>
      						<label id="messenger_error" for="messenger_error" class="messenger_error">Caracteres no validos</label>
      						<label id="messenger_none"  for="messenger_none" class="messenger_none">El campo esta vacío</label>
      					</div>
        				<div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-xs-12 flex">
        						<button  id="" name="send" class="w100 btn bg-blue_1 green" type="submit">Enviar</button>
        				</div>
        		    </div>
			     </form>
		    </dv>
			</div>
			</div>
		</div>
	</section>
	<?php include'./footer.php';?>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>
</html>