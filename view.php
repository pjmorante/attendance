<?php 
    $title = 'View';
    include 'includes/header.php';
    include 'db/conn.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = $crud->getAttendDetails($id);
    }else {
        include 'includes/errorMessage.php';
    }
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $result['firstName'] . ' ' . $result['lastName']?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['special']?></h6><br>
    <h6 class="card-subtitle mb-2 text-muted">Date of birth: <?php echo $result['dateOfBirth']?></h6>
    <h6 class="card-subtitle mb-2 text-muted">email: <?php echo $result['email']?></h6>
    <h6 class="card-subtitle mb-2 text-muted">Phone: <?php echo $result['phone']?></h6>

  </div>
</div>
<br>
    <a href="attendance.php" class="btn btn-info">Back to the list</a>
    <a href="edit.php?id=<?php echo $result['id'] ?>" class="btn btn-warning">Edit</a>
    <a onclick="return confirm('Are you sure you want to delete this record');" href="delete.php?id=<?php echo $result['id'] ?>" class="btn btn-danger">Delete</a>



<?php include 'includes/footer.php';?>