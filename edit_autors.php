<?
require_once("includes/functions.php");
$aid = (isset($_GET['edit'])) ? $_GET['edit'] : 0 ;

?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
	<style>
	.table td{min-width:33%}
	.table th{text-align:center}
	.table tr{text-align:center}
	.tbooks td{min-width:25%}
	</style>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Book <span class="lite">Shop</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <?
	   include("includes/aside.php");
	  ?>
    </aside>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
	
		
			<div class="modal-content">
				<div class="modal-header">
					
						<h4 class="modal-title">Изменить запись "<?=$aid?>" из таблицы "Авторы"</h4>
				</div>
				<form name="autors" action="autors.php" method="get">
					<div class="modal-body">
						<input class="form-control m-bot15" type="text" placeholder="Имя автора" name="fio" value="<?=getAutor($aid)?>">
						<input type="hidden" value="<?=$aid?>" name="aid">
					</div>					
					<div class="modal-footer">
						<button data-dismiss="modal" class="btn btn-default" type="button" onclick="history.back()">Вернуться</button>
						<button data-dismiss="modal" class="btn btn-success" type="submit">Сохранить и вернуться</button>
					</div>			
				</form>
			 </div>
		
	
			  
			</section>
          </div>
        </div>
		
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
  <script type="text/javascript"> 
	
  </script>
  
  
	
</body>

</html>


