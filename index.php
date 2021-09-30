<?php 
    $title = 'Index';
    include 'includes/header.php';
    include 'db/conn.php';

?>


    <h1 class="text-center" >Registration for IT Conference</h1>

    <form action="success.php" method="post">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="area">Area of Expertise</label>
            <select class="form-control" id="area" name="area">
                <option>Select an option</option>
                <option>Database Admin.</option>
                <option>Software Developer</option>
                <option>Web Administrator</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email" name="email">
            <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
            <small id="phone" class="form-text text-muted">We'll never share your phone with anyone else.</small>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>



<?php include 'includes/footer.php';?>
    
