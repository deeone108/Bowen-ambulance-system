<?php
 include('api.php');

 $query = "SELECT * FROM ambvalue";
$result = mysqli_query($conn, $query);
$number = 1;
?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Section</title>
    <link href="admin.css" rel="stylesheet" type="text/css" />
    
</head>

<body>


    <div class="split right">
        <div class="holder">
            <h2>Request</h2>
            <table>
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Sex</th>
                    <th>College</th>
                    <th>Department</th>
                
                </tr>
                <?php while ($row1 = mysqli_fetch_array($result)) :; ?>
                    <tr>
                        <td>
                            <?php
                                echo $number;
                                $number++;
                                ?>
                        </td>
                        <td><?php echo $row1[0]; ?></td>
                        <td><?php echo $row1[1]; ?></td>
                        <td><?php echo $row1[2]; ?></td>
                        <td><?php echo $row1[3]; ?></td>
                        <td><?php echo $row1[4]; ?></td>
                        <td>
            

                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
            <br><br>
        </div>
    
    </div>
    </div>
</body>

</html>