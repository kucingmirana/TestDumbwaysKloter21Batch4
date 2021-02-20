<?php include("config.php"); ?>

<!doctype html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<title>HOME</title>
</head>
<body>
	<header>
		<h3 style="text-align: center;" >Mobil ALEX </h3>
	</header>

	<div class="topnav">
		<a href="addcust.php"><button class="btn btn-sm btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Customer</button></a>
		<a href="addcar.php"><button class="btn btn-sm btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Mobil</button></a>
		<a href="addbrand.php"><button class="btn btn-sm btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Brand</button></a>
		<header>
			<h4 style="text-align: center;">Data Mobil</h4>
		</header>
	</div>

	<div class="card">
        
        <div class="card-body">
          <div class="table-responsive">
            <table id="example2" class="table table-fixed table-bordered table-hover">
              <thead>
               <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Stock</th>
                <th>Gambar</th>
              </tr>
              </thead>
              <tbody>
                <?php
                  $i=1;
                  $sql = "SELECT * FROM cars ORDER BY name ASC";

                  $query = mysqli_query($db, $sql);
                  while ($list = mysqli_fetch_assoc($query)){
                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$list['name']."</td>";
                    echo "<td>".$list['stock']."</td>";
                    $i++;
                    echo "<td>";

                    echo "<a href='#'><img src='upload/". $list['image'] ."'  width='330' height='200' alt='img'></a>";
                    echo "</td>";
                  
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
	
</body>
</html>