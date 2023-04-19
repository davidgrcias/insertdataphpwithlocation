<html>
  <head></head>
  <body>
    <form action="" method="post">
      Name <input type="text" name="name" value="">
      <input type="hidden" name="latitude" id="latitude">
      <input type="hidden" name="longitude" id="longitude">
      <button type="submit" name="submit">Submit</button>
    </form>
    <script type="text/javascript">
      function getLocation(){
        navigator.geolocation.getCurrentPosition(showPosition);
      }
      function showPosition(position){
        document.querySelector('#latitude').value = position.coords.latitude;
        document.querySelector('#longitude').value = position.coords.longitude;
      }
      getLocation();
    </script>
    <?php
    require 'connection.php';

    if(isset($_POST["submit"])){
      $name = $_POST["name"];
      $latitude = $_POST["latitude"];
      $longitude = $_POST["longitude"];

      $query = "INSERT INTO tb_data VALUES('', '$name', '$latitude', '$longitude')";
      mysqli_query($conn, $query);
    }
    ?>
  </body>
</html>
