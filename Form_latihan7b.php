<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="form_latihan7a.css">

	<title>Form Latihan 7B</title>
</head>
<body>
	<div class="tengah" align="center">
		<div class="header" align="center"><h1>Form Latihan 7B<h1></div>
		<div class="navigationbar"></div>
		<div class="konten" align="center">
			<div class="content"></div>
			<div class="maincontent7b">
				<form action="latihan7b.php" method="POST">
				  <div class="form-group">
				    <label for="exampleInputEmail1"><h6>Nilai Tugas<h6></label>
				    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tugas" required="" min="0" max="100">
				    <small id="emailHelp" class="form-text text-muted">nilai tugas bernilai 15%</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1"><h6>Nilai UTS<h6></label>
				    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uts" required="" min="0" max="100">
				    <small id="emailHelp" class="form-text text-muted">nilai uts bernilai 35%</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1"><h6>Nilai UAS<h6></label>
				    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uas" required="" min="0" max="100">
				    <small id="emailHelp" class="form-text text-muted">nilai uas bernilai 50%</small>
				  </div>
				  <button type="submit" class="btn btn-primary">Hitung
				</form>
			</div>
			<div class="content2"><!-- <img src="7b.png" width="100" height="300" title="chess.com"> --></div>
		</div>
		<div class="footer">BLK Bekasi</div>
	</div>
</body>
</html>