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
          <table>
                <tr>
                    <td>
                        <div class="content_container">
                          <h3>Entries</h3>
                          <p class="read_more" name="entries">Read more</p>
						  <p class="hidden" name="entries"></p>
                        </div><!--close content_container-->
                    </td>

                    <td>   
                        <div class="content_container">
                            <h3>Competition Regulations</h3>
                            <p class="read_more" name="regulations">Read more</p>
                            <p class="hidden" name="regulations"></p>
                        </div><!--close content_container-->
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <div class="content_container">
                          <h3>Official Implements List</h3>
                          <p class="read_more" name="implements">Read more</p>
                          <p class="hidden" name="implements"></p>
                        </div><!--close content_container-->
                    </td>

                    <td>
                        <div class="content_container">
                          <h3>Team Hotels</h3>
                          <p class="read_more" name="hotels">Read more</p>
                          <p class="hidden" name="hotels"></p>
                        </div><!--close content_container-->	 
                    </td>
                </tr>
            </table> 
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
