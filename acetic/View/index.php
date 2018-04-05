<?php
include '../Src/cv.php';
$obj=new cv();
$data=$obj->index();
?>
<!DOCTYPE HTML>
<html>
    <head>
        
    </head>
    <body>
        <table border="1px"style=" border-collapse:collapse">
            <th>
                Serial No
            </th>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Contact
            </th>
            <th>
                Birth of Date
            </th>
            <th>
                Action
            </th>
            <?php
            $cn=1;
            foreach($data as $singledata)
            {
                ?>
            <tr>
            <td><?php echo $cn++;?> </td>
            <td><?php echo $singledata['name'];?> </td>
            <td><?php echo $singledata['email'];?> </td>
            <td><?php echo $singledata['contact'];?> </td>
            <td><?php echo $singledata['birth_of_date'];?> </td>
            <td>
                <a href="detail.php?id=<?php echo $singledata['id'] ?>">Details</a>
                <a href="delete.php?id=<?php echo $singledata['id'] ?>">Delete</a>
            </td>
            </tr>
            <?php
            }
            ?>
         
        </table>
    </body>
</html>