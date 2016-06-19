<?php
include("connect.php");
include("header.php");

$CUSTOMERSID = $_GET['id'];
$query = "SELECT * FROM customers WHERE CustomersID = $CUSTOMERSID";
$result = mysql_query($query);
$result_arr = mysql_fetch_array($result);

if(!isset($_POST['submit']))
{
?>
<!--Basic Table-->
<table class="table">
    <thead>
        <tr>                
            <th>First Name</th>
            <th class="hidden-sm">Last Name</th>
            <th>Email</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody>
        <tr>                
            <td><?php echo $result_arr['FirstName'];?></td>
            <td class="hidden-sm"><?php echo $result_arr['LastName'];?></td>
            <td><?php echo $result_arr['Email'];?></td>
            <td><span class="label label-info"><?php echo $result_arr['Country'];?></span></td>
        </tr>
    </tbody>
</table>
<!--End Basic Table-->
<?php
}
    include("footer.php");
?>

