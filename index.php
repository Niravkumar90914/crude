<!DOCTYPE html>
<html>

<head>
	<title>Data Table</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<div class="container">
	<div class="card">Data table</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Date of birth</th>
				<th>Email address</th>
				<th>Mobile number</th>
				<th>State</th>
				<th>City</th>
				<th>Address</th>
				<th>Hobbies</th>
				<th>Photo</th>
				<th>Action</th>
			</tr>

		</thead>
		<tbody></tbody>
		<tfoot></tfoot>
	</table>
</div>

</html>