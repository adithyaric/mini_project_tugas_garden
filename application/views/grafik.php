	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Grafik</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
						<li class="breadcrumb-item active"><a href="<?php echo base_url('dashboard/grafik'); ?>"></a>Data Grafik</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/series-label.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>

	<section class="content">
		<div class="container">
			<div class="row mb-2">
				<div class="col-xl-6">
					<figure class="highcharts-figure">
						<div id="suhuc"></div>
						<!-- <p class="highcharts-description">
							Basic line chart showing trends in a dataset. This chart includes the
							<code>series-label</code> module, which adds a label to each line for
							enhanced readability.
						</p> -->
					</figure>
				</div>
				<div class="col-xl-6">
					<figure class="highcharts-figure">
						<div id="suhuf"></div>
					</figure>
				</div>
				<div class="col-xl-6">
					<figure class="highcharts-figure">
						<div id="lembab"></div>
					</figure>
				</div>
				<div class="col-xl-6">
					<figure class="highcharts-figure">
						<div id="soil"></div>
					</figure>
				</div>
			</div>
		</div>
	</section>
	<script>
		var suhuc = <?php echo $suhuc; ?>;
		Highcharts.chart('suhuc', {

			title: {
				text: 'Suhu C'
			},

			// subtitle: {
			// 	text: 'Source: <a href="https://irecusa.org/programs/solar-jobs-census/" target="_blank">IREC</a>'
			// },

			yAxis: {
				// title: {
				// 	text: 'Number of Employees'
				// }
			},

			xAxis: {
				// accessibility: {
				// 	rangeDescription: 'Range: 2020 to 2030'
				// }
				// categories: ['2022', '2023', '2024', '2025']
			},

			legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle'
			},

			// plotOptions: {
			// 	series: {
			// 		label: {
			// 			connectorAllowed: false
			// 		},
			// 		pointStart: 2022
			// 	}
			// },

			series: [{
				name: 'Suhu C',
				data: suhuc
			}],

			responsive: {
				rules: [{
					condition: {
						maxWidth: 500
					},
					chartOptions: {
						legend: {
							layout: 'horizontal',
							align: 'center',
							verticalAlign: 'bottom'
						}
					}
				}]
			}
		});
		var suhuf = <?php echo $suhuf; ?>;
		Highcharts.chart('suhuf', {
			title: {
				text: 'Suhu F'
			},
			series: [{
				name: 'Suhu F',
				data: suhuf
			}],
		});
		var lembab = <?php echo $lembab; ?>;
		Highcharts.chart('lembab', {
			title: {
				text: 'lembab'
			},
			series: [{
				name: 'lembab',
				data: lembab
			}],
		});
		var soil = <?php echo $soil; ?>;
		Highcharts.chart('soil', {
			title: {
				text: 'soil'
			},
			series: [{
				name: 'soil',
				data: soil
			}],
		});
	</script>
