<!-- Nav -->
<div class="container nav-heading">
    <ul class="nav nav-pills">
        <li role="presentation"><a href="<?=base_url()?>">Home</a></li>
        <li role="presentation" class="active"><a href="students">Students</a></li>
    </ul>
    <hr>
</div>
<!-- Nav -->

<!-- Content -->
<div class="container">
    <!--div class="alert alert-success" role="alert">Load Students here :)</div-->
    <div class="well">
    	<h3>Update Student</h3>
    </div>
    
    <div class="row">
    	<div class="col-lg-6">
        <form action="<?=base_url()?>/index.php/students/update/<?php echo $student[0]->student_id;?>" method="post">
            <input type="text" name="first_name" placeholder="Enter First Name" class="form-control" value="<?php echo $student[0]->first_name;?>"/>
            <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control" value="<?php echo $student[0]->last_name;?>"/>
            <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo $student[0]->email;?>" />
            <input type="text" name="phone" placeholder="Phone" class="form-control" value="<?php echo $student[0]->phone;?>" />
            <input type="password" name="pass" placeholder="Enter New Password" class="form-control"/>
            <br />
            <input type="submit" name="submit" value="Update Student Info" class="btn btn-lg"/>
        </form>
		</div>    
    </div>
   
      
</div>
<!-- Content -->