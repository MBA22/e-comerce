<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantillabase.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.slidertron-1.1.js"></script>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin título</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="css/estiloprincipal.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/menu.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Share:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:400,300,700' rel='stylesheet' type='text/css'>

<?php include("includes/google.php"); ?>
</head>

<body>

<div class="container">
  <div class="header"><!-- InstanceBeginEditable name="ParteSuperior" -->
  <?php include("includes/cabecera.php"); ?>
  <div class="clearfloat"></div>
  <?php include("includes/menu.php"); ?>
  <!-- InstanceEndEditable --></div>
  <div class="sidebar1"><!-- InstanceBeginEditable name="ContenidoIzq" -->
  <h1>Ropa para Caballero</h1>
  <h2>Pantalones de Vestir</h2>
  <div class="banner">
    <div id="slider">
    <div class="viewer">
       <div class="reel">
          <div class="slide"><img src="images/img_paCaballero/pa1.jpg" alt="" height="260" width="160" /></div>
          <div class="slide"><img src="images/img_paCaballero/pa2.jpg" alt="" height="260" width="160" /></div>
          <div class="slide"><img src="images/img_paCaballero/pa3.jpg" alt="" height="262" width="160" /></div>
        <div class="slide"><img src="images/img_paCaballero/pa4.jpg" alt="" height="260" width="160" /></div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
$('#slider').slidertron({
viewerSelector: '.viewer',
reelSelector: '.viewer .reel',
slidesSelector: '.viewer .reel .slide',
advanceDelay: 4000,
speed: 'slow'
});
</script>
</div>


</div>
  <div class="content"><!-- InstanceBeginEditable name="ParteDerecha" -->
    <h1>Camisas</h1>
    <p>A completar</p>
    <div class="banner">
    <div id="slider">
    <div class="viewer">
       <div class="reel">
          <div class="slide"><img src="images/img_paCaballero/pa1.jpg" alt="" height="260" width="160" /></div>
          <div class="slide"><img src="images/img_paCaballero/pa2.jpg" alt="" height="260" width="160" /></div>
          <div class="slide"><img src="images/img_paCaballero/pa3.jpg" alt="" height="262" width="160" /></div>
        <div class="slide"><img src="images/img_paCaballero/pa4.jpg" alt="" height="260" width="160" /></div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
$('#slider').slidertron({
viewerSelector: '.viewer',
reelSelector: '.viewer .reel',
slidesSelector: '.viewer .reel .slide',
advanceDelay: 4000,
speed: 'slow'
});
</script>
</div>
    <!-- end .content -->
  <!-- InstanceEndEditable --></div>
  <div class="footer">
  <?php include("includes/pie.php"); ?></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
