<?php include('header.php'); ?>
<!doctype html>
<html lang="en">
<style>
    form{
        color : white;
    }
</style>

<body>
    <p></p>
    <?php echo form_open('admin/dashboard'); ?>
    <form action="" method="post">
        <div class="container bg-black mt-3" >

        <fieldset>
            <legend> <h1 class="text-center"> Registration Form </h1> </legend><hr>
            <div class="form-group col-md-6">
                <label for="inputname4">Username</label>
                <input type="text" class="form-control" id="inputname4" placeholder="Username" name="uname" required>
            </div><br>
            <div class="col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
            </div><br>
            <div class="form-group col-md-6">
                <label for="inputname4">First Name</label>
                <input type="text" class="form-control" id="inputname4" placeholder="Enter first name" name="fname" required>
            </div><br>
            <div class="form-group col-md-6">
                <label for="inputlnamed4">Last Name</label>
                <input type="text" class="form-control" id="inputlname4" placeholder="Enter last name" name="lname" required>
            </div><br>
        
        
            <div class=" col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required><br>
            </div>
        
            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
            <input type="reset" class="btn btn-danger btn-lg btn-block float-left" value="Reset">
    
        </fieldset>
    </form>
    </div>
</body>

</html>
<?php include('footer.php'); ?>


