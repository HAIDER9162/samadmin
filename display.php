<html>
<head>
    <title>Display Data</title>
    <style>
        body
        {
            background: #d071f9;
        }
        table
        {
            background-color: white;
        }
    </style>
</head>

<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM newform";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);


// echo $total;

if($total != 0)
{
    ?>
     
    <h2 align="center"><mark>Displaying All Records</mark></h2>
    <center><table border="1" cellspacing="7" width="100%">
        <tr>
        <th width="5%">Id</th>
        <th width="8%">First Name</th>
        <th width="8%">Last Name</th>
        <th width="10%">Gender</th>
        <th width="20%">Email</th>
        <th width="10%">Phone No</th>
        <th width="24%">Address</th>
        <th width="15%">Operations</th>
        </tr>
    

    <?php
    while ($result = mysqli_fetch_assoc($data)) 
    {
        echo "<tr>
                    <td>$result[id]</td>
                    <td>$result[first_name]</td>
                    <td>$result[last_name]</td>
                    <td>$result[gender]</td>
                    <td>$result[email]</td>
                    <td>$result[phone_no]</td>
                    <td>$result[address]</td>

                    <td><a href='update_design.php?id=$result[id]'>Update</a></td>
              </tr>
              ";
    }
    // echo "Tabale Has Record";
}
else
{
    echo "No Records Found";
}

?>
</table>
</center>