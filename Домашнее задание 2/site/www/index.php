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
      <li role="presentation" class="active"><a href="index.html">About</a></li>
      <li role="presentation"><a href="Products.html">Products</a></li>
      <li role="presentation"><a href="Album.html">Album</a></li>
      <li role="presentation"><a href="Contacts.html">Contacts</a></li>
    </ul>
  </div>
  <div class="col-md-7 text-justify">

    <?php
    $link = mysql_connect('localhost', 'root', '')
        or die('No connection' . mysql_error());
    mysql_select_db('news') or die('Impossible to choose the database');

    $query1 = 'SELECT text FROM home_info where (id = 1)';
    $result1 = mysql_query($query1) or die('Query failed: ' . mysql_error());

    echo "<table>\n";
    while ($line = mysql_fetch_array($result1, MYSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo nl2br ('');
    echo "</table>\n";
    echo "<table>\n";
    while ($line = mysql_fetch_array($result1, MYSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";


    mysql_free_result($result1);
    mysql_close($link);
    ?>
    <br />
      <br />
      <form action="search.php" method="post" class="form-inline text-center">
        <div class="form-group">
          <label for="exampleInputName2">Search</label>
          <input type="text" class="form-control" name="user_search" placeholder="Site's search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>

      </form>
  </div>
  <div class="col-md-3 text-right">
    <div class="panel panel-default">
      <div class="panel-heading">
        News
      </div>
      <div class="panel-body text-justify">
        <?php
        $link = mysql_connect('localhost', 'root', '')
            or die('No connection' . mysql_error());
        mysql_select_db('news') or die('Impossible to choose the database');

        $query1 = 'SELECT title FROM latest where (id = 1)';
        $query2 = 'SELECT body FROM latest where (id = 1)';
        $result1 = mysql_query($query1) or die('Query failed: ' . mysql_error());
        $result2 = mysql_query($query2) or die('Query failed: ' . mysql_error());

        echo "<table>\n";
        while ($line = mysql_fetch_array($result1, MYSQL_ASSOC)) {
            echo "\t<tr>\n";
            foreach ($line as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
            }
            echo "\t</tr>\n";
        }
    echo nl2br ('');
        echo "</table>\n";
        echo "<table>\n";
        while ($line = mysql_fetch_array($result2, MYSQL_ASSOC)) {
            echo "\t<tr>\n";
            foreach ($line as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";


        mysql_free_result($result1);
        mysql_free_result($result2);
        mysql_close($link);
        ?>
        <p></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12  text-center">
      <p>&copy; Copyright</p>
    </div>
  </div>
</body>
</html>
