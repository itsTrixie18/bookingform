<?php 
include 'database/connection.php';

$sql = "SELECT `user_id`, `fullname`, `email`, `contact_no`, `address`, `date` FROM `booking_form`";
$result = $con->query($sql);
?>

<table class="table datatable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Date</th>
        </tr>  
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr> 
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['contact_no']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><button type="button" class="btn btn-danger">Delete</button></td>
            <td><button type="button" class="btn btn-success">Edit</button></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<button type="button" class="btn btn-primary">
    <a href="export.php" style="color: white; text-decoration: none;">Export to Excel</a>