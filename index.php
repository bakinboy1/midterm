
<?php
require_once('database.php');
//test



 $version='2.0';
 $query = "SELECT productCode, name, version FROM products WHERE version = ? ";

 $stmt = $db->prepare($query);
 $stmt->bind_param('d', $version);
 $stmt->execute();
$stmt->store_result();
 $stmt->bind_result($productCode, $name, $version);
//use this method to display results

?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Midterm</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Product list</h1>
    </div>

    <div id="main">

        <h1>Product List</h1>

       

        <div id="content">
            <!-- display a table of products -->
            <table>
                <tr>
                    <th>productCode</th>
                    <th>name</th>
                    <th>version</th>

                </tr>
                <?php while($stmt->fetch()): ?>

                <tr>
                    <td><?php  echo $productCode; ?></td>
                    <td><?php  echo $name; ?></td>
                    <td><?php echo $version; ?></td>
          
                    
                </tr>
                
                <?php endwhile; ?>
            </table>
        </div>
    </div>

    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> midterm, Inc.</p>
    </div>

    </div><!-- end page -->
</body>
</html>

<?php
  $stmt->free_result();
  $db->close();
 ?>