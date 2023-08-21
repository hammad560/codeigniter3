<?php include('header.php'); ?>

<section class="h-100" style="background-color: #508bfc;">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5">

            <h2 class="mb-2">Admin Form</h2>

            <!-- load the  form file. this file open in admin oage when form send -->

            <?php echo form_open('admin/index'); ?>
            

            <div class="form-outline mb-4">
            <label class="form-label" for="typeEmailX-2">Username</label>
            <!-- <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="email" placeholder="Enter username" required/> -->
                <!-- take form userinput using codeigniter -->
              <?php  echo form_input(['class'=>'form-control','placeholder'=>'Enter your Email', 'name'=>'username',
              'value'=>set_value('username')]) ?>
              <?php echo form_error('username', "<div class='text-danger'>","</div>")  ?>
            </div>

            <div class="form-outline mb-2">
            <label class="form-label" for="typePasswordX-2">Password</label>
            <!-- input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password" placeholder="Enter password" required/> -->
            <?php echo form_password(['class'=>'form-control', 'placeholder'=>'Enter Password', 'name'=>'pass',
            'value'=>set_value('pass')  ])?>
            <?php echo form_error('pass' , "<div class='text-danger'>","</div>") ?>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <input type="reset" class="btn btn-danger btn-lg btn-block float-end" value="Reset">
            <a href="<?= base_url('admin/signup') ?>" class="text-decoration: none">Signup</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include('footer.php'); ?>