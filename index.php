
<?php
require_once('database.php');




 $state='CA';
 $query = "SELECT lastName, firstName, city FROM customers WHERE state = ?";

 $stmt = $db->prepare($query);
 $stmt->bind_param('s', $state);
 $stmt->execute();
$stmt->store_result();
 $stmt->bind_result($lastName, $firstName, $city);
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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>city</th>

                </tr>
                <?php while($stmt->fetch()): ?>

                <tr>
                    <td><?php  echo $lastName; ?></td>
                    <td><?php  echo $firstName; ?></td>
                    <td><?php echo $city; ?></td>

                    
                    
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