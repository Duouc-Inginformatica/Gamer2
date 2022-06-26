<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<link rel="stylesheet" href="assets/js/vendor/footable/css/footable.core.min.css">

<body id="minovate" class="appWrapper sidebar-sm-forced">
<div class="row">
<section class="content-header">
    <ol class="breadcrumb">
      <li><a href="index.php?view=homies"><i class="fa fa-home"></i> Inicio</a></li>
      <li class="active"><a href="#">recepción</a></li>
    </ol>
</section> 
</div> 

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