<!DOCTYPE html> 
<html>

<head>
  <?php 
    include 'header.html';
	$name = basename(__FILE__, '.php'); ;
  ?>
  <title>Timetable | European Athletics Team Championships 2nd League Stara Zagora 2015</title>
</head>

<body>
    <?php 
      include 'menu.html';
    ?>
	  <div id="content">
        <div class="content_item">
		  <h1>Timetable</h1>   
          <p style="margin-top:20px;">
          	<iframe src="pdf/ETCH2015_2nd_League_Timetable.pdf" width="95%" height="800px"><strong><a href="pdf/ETCH2015_2nd_League_Timetable.pdf" target="_blank">View HERE</a></strong></iframe>
          </p>
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
  </div><!--close main-->
  
    <?php 
      include 'footer.html';
    ?>


  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  
</body>
</html>
