<?php 
    $title = 'View Attendance';
    include 'includes/header.php';
    include 'db/conn.php';

    $results = $crud->getAttendence();
?>
<h3 class="text-center">Attendance List</h3>
<table class="table table-striped">
    <tr>
        <th class="table-dark">#</th>
        <th class="table-dark">First Name</th>
        <th class="table-dark">Last Name</th>
        <th class="table-dark">Date of Birth</th>
        <th class="table-dark">email</th>
        <th class="table-dark">Phone</th>
        <th class="table-dark">Specialty</th>
        <th class="table-dark">Actions</th>
    </tr>
        <?php while($row = $results->fetch(PDO::FETCH_ASSOC)){?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['firstName'] ?></td>
                <td><?php echo $row['lastName'] ?></td>
                <td><?php echo $row['dateOfBirth'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['special'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record');" href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
</table>


<?php include 'includes/footer.php';?>