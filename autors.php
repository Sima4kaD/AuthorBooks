<?
require_once("includes/functions.php");

$aid = (isset($_GET['aid'])) ? $_GET['aid'] : 0 ;

if(($_GET['fio'])!==null)
{
	
	$fio=addslashes(strip_tags($_GET['fio']));
	
	if($aid!=0)
	{			
		$q = mysql_query("UPDATE `autors` SET `fio` = '$fio' WHERE `autors`.`aid` = '$aid'")or die(mysql_error());		
	}		
	else
	{
		mysql_query("INSERT INTO autors (`aid`, `fio`) VALUES ('$aid', '$fio')") or die (mysql_error());	
	}
}

if(($_GET['delete'])!==null)
{	
	if(is_numeric($_GET['delete'])){
		$aid = $_GET['delete'];	
		$q=mysql_query("DELETE FROM `autors` WHERE `aid` = $aid") or die (mysql_error());
	}
	else
	{ 
		goto end;
	}
}
end:
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
	.table td{min-width:33%; text-align="left"}
	.table th{text-align:center}
	.table tr{text-align:center}
	.tbooks td{min-width:25%}
	</style>
  
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Авторы<span class="lite">Книг</span></a>
      <!--logo end-->

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
              <header class="panel-heading">
                Авторы
              </header>
              <table class="table table-striped table-advance table-hover">
                <tbody>
				<tr>
                    <th><i class="icon_profile"></i>ФИО</th>
                    <th><i class="icon_documents_alt"></i>Книг</th>
                    <th><i class="icon_cogs"></i>Действие</th>
                  </tr>
                  
                  <?
				 echo readAutors();
				  ?>                  
                </tbody>
              </table>
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