<!DOCTYPE html>
<html>

<head>
	<title>Data Table</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.css" />


	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>




	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="jumbotron p-2">
			<h2>Student data</h2>
		</div>
		<div class="row">
			<div class="col-sm-2">bgdfgdg</div>
			<div class="col-sm-10">
				<table id="student-list" class="table table-bordered  table-responsive ">
					<thead class="bg-secondary">
						<tr class="text-white">
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
							<th>Date</th>
						</tr>
					</thead>
					<tbody></tbody>
					<tfoot></tfoot>
				</table>
			</div>
		</div>
	</div>
</body>
<script>
	$(document).ready(function() {
		$("#student-list").dataTable({
			responsive: true,
			ajax: {
				url: 'student.php',
				data: {
					"action": "display_student_data"
				},
				dataSrc: ''
			},
			columns: [{
					data: "student_name"
				},
				{
					data: "gender"
				},
				{
					data: "date_of_birth"
				},
				{
					data: "email_address"
				},
				{
					data: "mobile_number"
				},
				{
					data: "student_state"
				},
				{
					data: "student_city"
				},
				{
					data: "student_address"
				},
				{
					data: "student_hobbies"
				},
				{
					data: "student_image_name"
				},
				{
					data: "registration_date"
				}
			],
			"columnDefs": [{
					"orderable": false,
					"targets": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
				},

			]

		});

	});
</script>

</html>