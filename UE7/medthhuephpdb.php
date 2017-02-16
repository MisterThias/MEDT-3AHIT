<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<?php
//DB Settings 
$host='localhost';
$dbname='medt3';
$user='htluser';
$pwd='htluser';

//Establish connection
$db = new PDO ("mysql:host=$host; dbname=$dbname", $user, $pwd); 

//Select table with query
$res=$db->query("SELECT * FROM project");
$tmp=$res->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
<tr>
<td>Name</td>
<td>Description</td>
<td>CreationDate</td>
</tr>
<?php foreach($tmp as $row) :?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['description'];?></td>
<td><?php echo $row['createDate'];?></td>
</tr>
</p>
<?php endforeach; ?>

</table>
</body>
</html>