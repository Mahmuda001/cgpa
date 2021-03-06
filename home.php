<?php
  include("process/config/connect.php");
  include("process/config/session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student CGPA Calculate</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="asset/ownstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
		<div class="container-flude">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="home.php">CGPA</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="calculate-cgpa.php">Calculate</a>
			      </li>
			    </ul>
			    <li class="nav-link">
			    	<em>Login User ID :<?php echo $student_id; ?> </em>
			    </li>
			    <a href="student-logout.php">Logout</a>
			</div>
			</nav>
			<div class="container">
				<div class="col-md-12">

					<h2 class="allh2">All Course and Credits</h2><hr>
					<table class="table">
					  <thead>
					    <tr>
					    	<th scope="col">Course Title</th>
					      	<th scope="col">Course Credits</th>
					      	<th scope="col">Course Code</th>
					    </tr>
					  </thead>
					  <?php 

                        $courseQuery = "select * from course order by 1 DESC";

                        $runQuery = mysqli_query($con,$courseQuery);
                          	while($row=mysqli_fetch_array($runQuery)){
                                $title = $row['c_name'];
                                $code = $row['c_credit'];
                                $credit = $row['c_code'];

                        ?>
					  <tbody>
					    <tr>
					      <th scope="row"><?php echo $title; ?></th>
					      <td><?php echo $code; ?></td>
					      <td><?php echo $credit; ?></td>
					    </tr>
					  </tbody>
					<?php } ?>
					</table>
				</div>

			</div>


			<div class="footer" style="background: gray;">
			  <p>Student CGPA Calculate</p>
			</div>


		</div>



	<!--javascript,propper,jquery-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>