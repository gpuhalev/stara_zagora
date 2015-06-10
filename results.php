<!DOCTYPE html> 
<html>

<head>
  <?php 
    include 'header.html';
	$name = basename(__FILE__, '.php'); ;
  ?>
  <title>Teams | European Athletics Team Championships 2nd League Stara Zagora 2015</title>
</head>

<body>
    <?php 
      include 'menu.html';
    ?>
	  <div id="content">
        <div class="content_item">
		  <h1>Teams</h1> 
						
						<div class="content_item">
                          <h3>Statistics Handbook</h3>
                          <p class="read_more" name="statisticsHandbook">Read more</p>
                          
                          <div class="hidden" name="statisticsHandbook">
                          	<iframe src="pdf/Statistics Handbook ETC 2015 League 2.pdf" target="_blank"  width="95%" height="800px"><strong><a href="pdf/Statistics Handbook ETC 2015 League 2.pdf" target="_blank">View HERE</a></strong></iframe>
                          </div>
                        
                        <hr class="teams"><br><br>
						            <h3>Results</h3>
                          <p class="read_more" name="results">Read more</p>
                          
                          <div class="hidden" name="results">
                            <p>Coming soon...</p>
                          </div>
                        </div>
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
