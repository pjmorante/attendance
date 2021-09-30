<?php 
    $title = 'Edit';
    include 'includes/header.php';
    include 'db/conn.php';


    if (!isset($_GET['id'])) {
        include 'includes/errorMessage.php';
    }else {
        $id = $_GET['id'];
        $attendee = $crud->getAttendDetails($id);
    
    
?>


    <h1 class="text-center" >Edit Records</h1>

    <form action="editpost.php" method="post">
        <input type="hidden"
        name="id" value="<?php echo $attendee['id'] ?>">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstName'] ?>" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastName'] ?>"id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $attendee['dateOfBirth'] ?>"id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="area">Area of Expertise</label>
            <select class="form-control" value="<?php echo $attendee['special'] ?>" id="area" name="area">
                <option>Select an option</option>
                <option>Database Admin.</option>
                <option>Software Developer</option>
                <option>Web Administrator</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" value="<?php echo $attendee['email'] ?>"id="email" name="email">
            <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" value="<?php echo $attendee['phone'] ?>"id="phone" name="phone">
            <small id="phone" class="form-text text-muted">We'll never share your phone with anyone else.</small>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
    </form>

    <?php }?>

<?php include 'includes/footer.php';?>
    
