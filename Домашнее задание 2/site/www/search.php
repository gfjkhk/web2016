<html>
<title>About</title>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <img src="head.jpg" alt="...">
  <div class="text-center">
    <font size="20"><b>Best Cat Food Brand
    </b></font>
  </div>
  <div class="col-md-2 text-left">
    <ul class="nav nav-pills nav-stacked">
      <li role="presentation" class="active"><a href="index.php">About</a></li>
      <li role="presentation"><a href="Products.html">Products</a></li>
      <li role="presentation"><a href="Album.html">Album</a></li>
      <li role="presentation"><a href="Contacts.html">Contacts</a></li>
    </ul>
  </div>
  <div class="row text-left">
      <div class="panel-heading"> <b><h4>
  <?php
  $search_query = $_POST['user_search'];
  echo "You searched: " . $search_query;
  ?>
  <p></br></p>
  <?php
  echo "Query returned no results";
  ?>
</br>
</br>
  <button type="submit" class="btn btn-default"><a href="index.php">Back</a></button>
</b>
</div>
</div>
</div>
      <br />
      <br />

  </div>
  <div class="row">
    <div class="col-md-12  text-center">
      <p>&copy; Copyright</p>
    </div>
  </div>
</body>
</html>
