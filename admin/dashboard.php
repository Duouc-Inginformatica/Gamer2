<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Centro de control</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">


</head>

<body>
<?php include("includes/header.php");?>

	<div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						</br></br><h2 class="page-title">RESUMEN GENERAL</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">

<?php
// sumar dos tabla de la base de datos registration y registration_valp
$result65 ="SELECT count(*) FROM rooms";
$stmt = $mysqli->prepare($result65);
$stmt->execute();
$stmt->bind_result($count35);
$stmt->fetch();
$stmt->close();
$result90 ="SELECT count(*) FROM rooms_valp";
$stmt = $mysqli->prepare($result90);
$stmt->execute();
$stmt->bind_result($count48);
$stmt->fetch();
$stmt->close();
$count49 = $count35 + $count48;
?>

													<div class="stat-panel-number h1 "><?php echo $count49;?></div>
													<div class="stat-panel-title text-uppercase"> Habitaciones Totales</div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer">Mas Información <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
<?php
$result ="SELECT count(*) FROM registration";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count20);
$stmt->fetch();
$stmt->close();
$result40 ="SELECT count(*) FROM registration_valp";
$stmt = $mysqli->prepare($result40);
$stmt->execute();
$stmt->bind_result($count40);
$stmt->fetch();
$stmt->close();
$count100 = $count20 + $count40;
?>
													<div class="stat-panel-number h1 "><?php echo $count100;?></div>
													<div class="stat-panel-title text-uppercase">Total de Clientes </div>
												</div>
											</div>
											<a href="" class="block-anchor panel-footer text-center">Ver Todos &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
<?php
$result2 ="SELECT count(*) FROM courses ";
$stmt2 = $mysqli->prepare($result2);
$stmt2->execute();
$stmt2->bind_result($count2);
$stmt2->fetch();
$stmt2->close();
?>
													<div class="stat-panel-number h1 "><?php echo $count2;?></div>
													<div class="stat-panel-title text-uppercase">Total de Convenio</div>
												</div>
											</div>
											<a href="manage-courses.php" class="block-anchor panel-footer text-center">Ver Todos &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

								</div>
							</div>
						</div>
						</br></br><h2 class="page-title">HOTEL VERANUM SANTIAGO 🇨🇱</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
<?php
$result3 ="SELECT count(*) FROM rooms ";
$stmt1 = $mysqli->prepare($result3);
$stmt1->execute();
$stmt1->bind_result($count10);
$stmt1->fetch();
$stmt1->close();
?>
						<div class="stat-panel-number h1 "><?php echo $count10;?></div>
													<div class="stat-panel-title text-uppercase">Total de Cuartos </div>
												</div>
											</div>
											<a href="manage-students.php" class="block-anchor panel-footer text-center">Ver Todos &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
<?php
$result4 ="SELECT count(*) FROM registration ";
$stmt1 = $mysqli->prepare($result4);
$stmt1->execute();
$stmt1->bind_result($count11);
$stmt1->fetch();
$stmt1->close();
?>
													<div class="stat-panel-number h1 "><?php echo $count11;?></div>
													<div class="stat-panel-title text-uppercase">Total de Clientes </div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">Ver Todos &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
						
									</div>
							</div>
						</div>
					</div>
				</div>
						</br></br><h2 class="page-title">HOTEL VERANUM VALPARAISO 🇨🇱</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
<?php
$result5 ="SELECT count(*) FROM rooms_valp ";
$stmt1 = $mysqli->prepare($result5);
$stmt1->execute();
$stmt1->bind_result($count13);
$stmt1->fetch();
$stmt1->close();
?>
						<div class="stat-panel-number h1 "><?php echo $count13;?></div>
													<div class="stat-panel-title text-uppercase">Total de Cuartos </div>
												</div>
											</div>
											<a href="manage-students_valparaiso.php" class="block-anchor panel-footer text-center">Ver Todos &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
<?php
$result6 ="SELECT count(*) FROM registration_valp ";
$stmt1 = $mysqli->prepare($result6);
$stmt1->execute();
$stmt1->bind_result($count12);
$stmt1->fetch();
$stmt1->close();
?>
													<div class="stat-panel-number h1 "><?php echo $count12;?></div>
													<div class="stat-panel-title text-uppercase">Total de Clientes </div>
												</div>
											</div>
											<a href="#" class="block-anchor panel-footer text-center">Ver Todos &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
				





					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	<script>

	window.onload = function(){

		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		});

		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>

</body>




<style> .foot{text-align: center; border: 1px solid black;}</style>

</html>
