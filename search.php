<!DOCTYPE html>
<html>
<head>
  <title>Search results</title>
  <meta charset="utf-8">
	<!-- demo -->
	<link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" media="screen">
    <link rel="stylesheet" href="css/style.css" media="screen">
	<!-- end demo -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.0.js"></script>
	<script src="search/search.js"></script>
<!--[if IE 8]>
    <link rel="stylesheet" href="css/ie.css" />
  <![endif]-->
  <script>    
    $(document).ready(function() {	
			
      /*Language switcher*/

      $('#lang_icon').toggle(function(){
        $('#lang_icon > i').find('i').removeClass('icon-angle-down').addClass('icon-angle-up');
        $('#lang_list').slideDown(200);
      }, function(){
        $('#lang_list').slideUp(200);
        $('#lang_icon > i').find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
      })

      $('#lang_list li').click(function(){
        $('#lang_list').slideUp(200);
        $('#lang_icon > i').find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
      })
      $(document).click(function() { 
        $('#lang_list').slideUp(200);
        $('#lang_icon > i').find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
       }); 
      $('#lang_icon').click(function(e){ 
          e.stopPropagation(); 
      });

    })  
  </script>    
</head>
<body>  

<!-- header
================================================== -->
<header class="header">
  <div class="container">
  <div class="row">
  <article class="span4"><a class="brand" href="http://templatemonster.com" target="_blank"></a></article>
 <article class="span6">
 <h1> HTML Template Documentation</h1>
  </article> 
  <article class="span2">
    <div class="languages pull-right">
      <!-- <span class="lang_label">Language: </span> --><div id="lang_icon"><b>En</b><i class="icon-angle-down"></i></div>
      <ul id="lang_list">
        <li class="active"><a href="index.html"><span>English </span><img src="img/flags/gb.png" height="14" width="22" alt="en"></a></li>
        <li><a href="index_es.html"><span>Español </span><img src="img/flags/es.png" height="14" width="22" alt="es"></a></li>
        <li><a href="index_de.html"><span>Deutsch </span><img src="img/flags/de.png" height="14" width="22" alt="de"></a></li>
        <li><a href="index_ru.html"><span>Русский </span><img src="img/flags/ru.png" height="14" width="22" alt="ru"></a></li>
      </ul>
    </div>
  </article>   
  </div>    
  </div>
</header>
<div id="content"> 
<div class="bg-content-top">
<div class="container">

<!-- Docs nav
    ================================================== -->
    <div class="row">
      
<div class="span12">

<!-- box-content
================================================== -->
<div class="box-content">
<!-- block-started
================================================== -->
<section class="block-started"  id="introduction">
  <h2>Search engine demo</h2>
	<article>
        <a href="index.html" class="button">Back to main page</a>
        <form id="search" action="search.php" method="GET"  accept-charset="utf-8">
           <input type="text" name="s" />
           <a onclick="document.getElementById('search').submit()">Search</a>
        </form>
        <h3>Search results:</h3>
        <div id="search-results"></div>	
    </article>   
  
</section>

</div>
</div>
</div>

  </div>
  </div>
  </div>
   <!-- Footer
    ================================================== -->
    <footer>
      <div class="container">        
       Bootstrap Documentation<br>
      &copy; 2013 Template Monster
      </div>
    </footer>

  <div id="back-top">
    <a href="#"><i class="icon-double-angle-up"></i></a>
  </div>
</body>  
</html>