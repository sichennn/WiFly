<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <div id="topcontent">
      <p id="content" align="center">
       <span id="mobile">
          <a href="studyAreas.html">Wifi Study Areas</a>
          <a href="displayspeeds2.php">View all Speeds</a>
          <a href="bestlocation.html">Best Speed Near You</a>
          <a href="squadfree/index.html">About Us</a>
       </span>

       <span id="desktop">
          <a href="studyAreas.html">Wifi Study Areas</a>
          <a href="displayspeeds2.php">View all Speeds</a>
          <a href="bestlocation.html">Best Speed Near You</a>
          <a href="userEnterInfo.html">Add Speed Data</a>
          <a href="squadfree/index.html">About Us</a>
       </span>
      </p>

      <script>
      window.onload = function() {
              if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                  document.getElementById("desktop").style.display = 'none';
                  document.getElementById("mobile").style.display = 'block';
              }
              else{
                  document.getElementById("desktop").style.display = 'block';
                  document.getElementById("mobile").style.display = 'none';
              }
      }
      </script>
    </div>

  <title>View All Speeds</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

  <body>
    <h2>WiFi Speeds in the System</h2>
    
    <p>Speeds Recorded in the System</p>
    <!-- form method="" action="displayspeeds.php"></form>
      
       
      NOT USING THIS MIGRATED THE PHP OVER TO THE HTML PAGE VERSION OF THIS -->


      <?php
      // logs into SQL locally
      // when connected online, will need to be matched to correct host server, username, and password
      $username = "root";
      $password = "";
      $hostname = "localhost";
      $dbc = mysql_connect($hostname, $username, $password)
        or die('Connection Error: ' . mysql_error());
  
      mysql_select_db('createinsertdb', $dbc) or die('DB Selection Error' .mysql_error());
      
      // Find all Wifi Speeds Already Found Inside of Database and their building
      $data = "(
        SELECT Wifi_speed, GPS_location
        FROM Instance
      )";

      // if result is false, it will throw an error showing it did not work 
      $results = mysql_query($data, $dbc);
          //or die('Query Error: ' . mysql_error());
      
      // $assoc = mysql_fetch_assoc($results);

      // iterates through array of values in column of table and will print every row
      while($rows = mysql_fetch_array($results, MYSQL_ASSOC)) {
          print_r($rows);
      }

      // var_dump($assoc);

?>


  </body>
</html>
