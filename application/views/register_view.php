<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="<? echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">


  </head>
  <body>

<div class="container" style="margin-top:100px;">

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">

					<?php
					if(validation_errors()){
						?>
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close" action="register"><span aria-hidden="true">&times;</span></button>
							<strong><?php echo validation_errors(); ?></strong>
						</div>
						<?php
					 }
                     echo form_open('login','class="myclass"');
					 ?>
                     <div class="form-group">
                         <?php
                         echo form_label('Full Name','fullname');
                         echo form_input('fullname','','class="form-control" id="fullname" placeholder="Fullname"')
                         ?>
                     </div>
					  <div class="form-group">
                          <?php
                          echo form_label('Username','username');
                          echo form_input('username','','class="form-control" id="username" placeholder="Pseudo"')
                          ?>
					  </div>
                      <div class="form-group">
                            <?php
                            echo form_label('Password','password');
                            echo form_input('password','','class="form-control" id="password" placeholder="Password"')
                            ?>
                      </div>
                            <?php echo form_submit('register', 'register', 'class="btn btn-primary"') ?>
					  <a href="<?php echo site_url('login') ?>" class="btn btn-link">Sign Up </a>
                      <?php echo form_close()?>
					</form>

				</div>
			</div>
		</div>
	<div class="col-md-4"></div>
	</div>
	</div>

</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<? echo base_url('assets/js/jquery.min.js')?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<? echo base_url('assets/js/bootstrap.min.js')?>"></script> </body>
</html>
