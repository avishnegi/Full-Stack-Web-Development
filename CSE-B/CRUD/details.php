<?php include('configure.php'); ?>

<html>
<head>
<title>Records</title>
</head>
<body>

<?php
$sql = "SELECT * FROM `user`";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
?>   
<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Contact</th>
            <th>E-Mail</th>
        </tr>
    </thead>
    <tbody>
    <?php    
    while($data = $result->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $data['ID'];?></td>
        <td><?php echo $data['NAME']; ?></td>
        <td><?php echo $data['AGE']; ?></td>
        <td><?php echo $data['CONTACT']; ?></td>
        <td><?php echo $data['EMAIL']; ?></td>
    </tr>
    <?php } ?>
    </tbody>
    
<?php } ?>
</table>   
</body>   
</html>