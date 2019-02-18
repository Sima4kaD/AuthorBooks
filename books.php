<?
require_once("includes/functions.php");
if(($_GET['delete'])!==null)
{
	
	if(is_numeric($_GET['delete'])){
		$bid = $_GET['delete'];
	
		$q=mysql_query("DELETE FROM `books` WHERE `bid` = $bid") or die (mysql_error());
	}
	else{ goto end;}
}

if(($_GET['bookname'])!==null)
{
	$bid = (is_numeric($_GET['bid'])) ? $_GET['bid'] : 0 ; 
	if (is_numeric( $_GET['cost'])) $cost = $_GET['cost'];		
	 
	else {
		echo "cost not numeric";
		goto end;
		
	}
	
	if (is_numeric( $_GET['aid'])) $aid =  $_GET['aid']; 
	
	else {
		echo "aid not numeric";
		goto end ;
		}
	
	$bookname=addslashes(strip_tags($_GET['bookname']));
	//echo $fio;
	if($bid!=0)
	{			//	UPDATE `autors` SET `fio` = 'Пупкин Иван Васильевичa' WHERE `autors`.`aid` = 1;
		$q = mysql_query("UPDATE `books` SET `bookname` = '$bookname', `aid`='$aid', `cost`='$cost' WHERE `bid` = '$bid'")or die(mysql_error());
		  echo 12;
	}		
	else
	{
		mysql_query("INSERT INTO `books` (`bid`, `aid`, `bookname`, `cost`) VALUES (0, '$aid', '$bookname', '$cost')") or die (mysql_error());
		 echo 17;
	}
}

/*if(($_GET['cost'])!==null){
	
	if($_GET['bid']!=0)//Редактируем книгу
	{
		$q=mysql_query("UPDATE `books` SET `aid`='$_GET["aid"]',`bookname`='',`cost` = '$cost' WHERE `books`.`cost` = '$cost'") or die (mysql_error());
		
		
		
	}
	else//Добавляем новую книгу
	{
		
		mysql_query("INSERT INTO books (cost, bookname) VALUES ($cost, $bookname)") or die (mysql_error());
	}
}*/
end:

//print_r($_GET);
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
	.table td{min-width:33%;}
	.table th{text-align:center}
	.table tr{text-align:center}
	.tbooks td{min-width:25%;}
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
                Книги
              </header>
			  <table class="table table-striped table-advance table-hover tbooks">
                <tbody>
                  <tr>
                    <th><i class="icon_genius"></i>Название</th>
                    <th><i class="icon_profile"></i>Автор</th>
                    <th><i class="icon_#"></i>Цена</th>
                    <th><i class="icon_cogs"></i>Действие</th>
                  </tr>
                  
                  <?
				  echo readBooks();
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


