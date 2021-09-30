<?php 
    $title = 'Index';
    include 'includes/header.php';
    require_once 'db/conn.php';

    if (isset($_POST['submit'])) {
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $dob = $_POST['dob'];
      $email = $_POST['email'];
      $contact = $_POST['phone'];
      $spec = $_POST['area'];
      
      $isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $spec);

      if ($isSuccess) {
        include 'includes/successMessag.php';
      }else {
        include 'includes/errorMessage.php';
      }
    }


?>



<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname']?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['area']?></h6><br>
    <h6 class="card-subtitle mb-2 text-muted">Date of birth: <?php echo $_POST['dob']?></h6>
    <h6 class="card-subtitle mb-2 text-muted">email: <?php echo $_POST['email']?></h6>
    <h6 class="card-subtitle mb-2 text-muted">Phone: <?php echo $_POST['phone']?></h6>

  </div>
</div>


<br>
<br>

<br>

<br>
<br>
<br>
<br>

<?php include 'includes/footer.php';?>