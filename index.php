<html lang="en">
  <head>
    <title>Medical Equipment</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
    <h1>Medical Equipment</h1>
    <table>
      <tr>
        <th>type</th>
        <th>price</th>
        <th>manufacture</th>
      </tr>
      <?php
				$mysqli = new mysqli(getenv("DB_URL"), getenv("DB_USERNAME"), getenv("DB_PASSWORD"), getenv("DB_NAME"));
				$result = $mysqli->query("SELECT * FROM ME"); foreach ($result as $row) {
      echo "
      <tr>
        <td>{$row['type']}</td>
        <td>{$row['price']}</td>
        <td>{$row['manufacture']}</td>
      </tr>
      "; } ?>
    </table>
    <?php
			phpinfo();
		?>
  </body>
</html>
