
<?php
require_once('database.php');
//test



 $customerID='1004';
 $query = "SELECT products.productCode, products.name, customers.firstName, customers.lastName FROM registrations WHERE customerID = ? ";

 $stmt = $db->prepare($query);
 $stmt->bind_param('s', $customerID);
 $stmt->execute();
$stmt->store_result();
 $stmt->bind_result($productCode, $name, $firstName, lastName);
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
        <h1>Customer list</h1>
    </div>

    <div id="main">

        <h1>Customer List</h1>

       1

        <div id="content">
            <!-- display a table of products -->
            <table>
                <tr>
                    <th>product Code</th>
                    <th>name </th>
                    <th>firstName</th>
                    <th>lastName</th>

                </tr>
                <?php while($stmt->fetch()): ?>

                <tr>
                    <td><?php  echo $productCode; ?></td>
                    <td><?php  echo $name; ?></td>
                    <td><?php  echo $firstName; ?></td>
                    <td><?php  echo $lastName; ?></td>
                    

                    
                    
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