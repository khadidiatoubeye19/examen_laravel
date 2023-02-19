
<html lang="en">
    <head>


        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->

    </head>
    @include('welcome')
    <main>

        <!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>Tableau de bord recapitulatif des formations</small></h1>
			<!-- end page-header -->

			<!-- begin row -->
			<div class="row">
				<div class="col-xl-6 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>TOTAL CANDIDAT FEMME</h4>
							<p> {{$nbcandidatF}}</p>
						</div>

					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-xl-6 col-md-6">
					<div class="widget widget-stats bg-orange">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>TOTAL CANDIDAT HOMME</h4>
							<p> {{$nbcandidatM}}</p>
						</div>

					</div>
				</div>

				<!-- end col-3 -->
			</div>


            <div class="row">

                <div class="col-xl-8">
                    <div class="card mb-12">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                          Repartition des candidats par tranche d'age

                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="60%" height="15"></canvas></div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card mb-12">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                          Repartition des candidats par sexe

                        </div>

                        <div class="card-body">
                            <canvas id="myPieChart" width="100%" height="50">
                                </canvas>
                            </div>

                    </div>
                </div>

            </div>
            <div class="col-xl-4">
                <div class="card mb-12">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                      Repartition des candidats en cours et en attente

                    </div>

                    <div class="card-body">
                        <canvas id="myPieChart1" width="100%" height="50">
                            </canvas>
                        </div>

                </div>
            </div>

            <div class="row">

                <div class="col-xl-6">
                    <div class="card mb-6">
                        <div class="card-header">
                            <i class="fas fa-book me-1"></i>
                            Statistiques des Formations/Referentiel

                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead class="text-center">
                                    <tr class="text-center" >
                                        <th >Referentiel</th>
                                        <th>Nombre de Formations</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @for ($i=0;$i<=$nbref-1;$i++)
                                       <tr>
                                        <td><b>{{ $libelle[$i]}}</b></td>
                                        <td>{{$nbformation[$i]}}</td>

                                    </tr>
                                    @endfor


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6">
                    <div class="card mb-6">
                        <div class="card-header">
                            <i class="fas fa-book me-1"></i>
                          Repartition des candidats/formation

                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple2">
                                <thead class="text-center">
                                    <tr class="text-center" >
                                        <th>Libelle de Formation</th>
                                        <th>Nombre de Candidats</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @for ($i=0;$i<=$nbref-1;$i++)
                                       <tr>
                                        <td><b>{{ $nomcandidat[$i]}}</b></td>
                                        <td>{{$nbcandidat[$i]}}</td>

                                    </tr>
                                    @endfor


                                </tbody>
                                </table>
                        </div>
                    </div>
                </div>


    </div>


</div>

    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>

    </footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script>
    // Bar Chart Example
var ctx = document.getElementById("myBarChart");

var nombres = [
@foreach ($tabs_y as $data)
    [ "{{ $data }}" ],
@endforeach
];

var ages = [
@foreach ($tabs_x as $data)
    [ "{{ $data }}" ],
@endforeach
];


var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels:nombres,
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: ages
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 10,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script src="assets/demo/chart-pie-demo.js"></script>
<script>
        // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Homme", "Femme"],
        datasets: [{
        data: [{{$nbcandidatM}}, {{$nbcandidatF}}],
        backgroundColor: ['#007bff' , '#ffc107'],
        }],
    },
    });


</script>
<script>
    // Pie Chart Example
var ctx = document.getElementById("myPieChart1");
var myPieChart = new Chart(ctx, {
type: 'pie',
data: {
    labels: ["en cours", "en attente"],
    datasets: [{
    data: [{{$encours}}, {{$attente}}],
    backgroundColor: ['#C71585' , '#008080'],
    }],
},
});


</script>

</body>
</html>
