<!-- Nav -->
<div class="container nav-heading">
    <ul class="nav nav-pills">
        <li role="presentation"><a href="<?=base_url()?>">Home</a></li>
        <li role="presentation" class="active"><a href="<?=base_url()?>/index.php/students">Students</a></li>
    </ul>
    <hr>
</div>
<!-- Nav -->

<!-- Content -->
<div class="container">
    <!--div class="alert alert-success" role="alert">Load Students here :)</div-->
    <div class="well">
    	<h3>List of Students</h3>
    </div>
    
    <div class="row">
    	<div class="col-lg-6 pull-left form-group">
        	<form method="post" action="<?=base_url()?>/index.php/students/search" class="form-inline">
        	<input type="text" id="name" name="name" class="form-control" placeholder="Search name here" style="width: 250px;"/>
            <input type="submit" class="btn" value="Search" />
            </form> 
        </div>
        
        <div class="col-lg-6 pull-right text-right">
            <a href = "<?=base_url()?>/index.php/students/add_student" class="btn btn-primary">Add New Record</a>
        </div>
    </div>
    
    <div class="row">
    <table class="table table-hover" id="students"> 
         <tr>
             <th>ID No.</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Email</th>
             <th>Phone</th>
             <th>&nbsp;</th>
             <th>&nbsp;</th>
         </tr>
		 <?php 
				
            foreach($students as $s) { 
          ?>
         <tr>
         	<td><?php echo str_pad($s->student_id, 4, '0', STR_PAD_LEFT);?></td>
            <td><?php echo $s->first_name?></td>
            <td><?php echo $s->last_name?></td>
            <td><?php echo $s->email?></td>
            <td><?php echo $s->phone?></td>
            <td>
                <a href="<?=base_url()?>index.php/students/update_student_view/<?php echo $s->student_id;?>">
                Edit
                </a>
            </td>
                <td><a href="<?=base_url()?>index.php/students/delete/<?php echo $s->student_id;?>"
                onclick="return confirm('Are you sure you want to delete this?');"
                >Delete
                </a>
            </td>
         </tr>
		 <?php   
		 	} 
         ?>
      </table> 
    	</div>
</div>
<!-- Content -->