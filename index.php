<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Interest - Yadav</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div>
        <div class="div1">
           <strong><p>Movie Interest - Yadav's</p></strong>
        </div>

        <div class = "div2">
            <strong><p>List  of  Movies</p></strong>
        </div>

        <div class="div2">
            <table style="font-size:20px;color:#56BBF1;" class="table table-striped table-bordered" >
                <thead>
                  <th style="color:#247881;">Movie Name</th>
                  <th style="color:#247881;">Lead Actor</th>
                  <th style="color:#247881;">Actress</th>
                  <th style="color:#247881;">Director Name</th>
                  <th style="color:#247881;">Year of Release</th>
                </thead>
                <tbody>
                    <?php
						$csql = "select * from `movie_table`";
                        $con = mysqli_connect("localhost","root","","movies") or die(mysql_error());
						$cre = mysqli_query($con,$csql);
						while($crow=mysqli_fetch_array($cre) )
						{	
							echo"<tr>
							<th>".$crow['Movie_name']."</th>
							<th>".$crow['Lead_Actor']."</th>
							<th>".$crow['Actress']." </th>
							<th>".$crow['Director_Name']."</th>
                            <th>".$crow['Release_Year']."</th>
							</tr>";
						}
					?>  
                </tbody>
            </table>
            <br>
            <hr>
        </div>
        <div class="div2">
            <h1 style="padding-bottom:30px;">Add Movie Interest</h1>
            <form action="index.php" name="form" method="post">

                <div class="form-group" style=" padding-left:30%;padding-bottom:10px;" >
                    <input style="width:55%; text-align:center;"name="moviename" class="form-control form-control-lg" type="text" placeholder="Movie Name" required>
                </div>

                <div class="form-group" style=" padding-left:30%;padding-bottom:10px;" >
                    <input style="width:55%; text-align:center;"name="leadactor" class="form-control form-control-lg" type="text" placeholder="Lead Actor"required>
                </div>

                <div class="form-group" style=" padding-left:30%;padding-bottom:10px;" >
                    <input style="width:55%; text-align:center;"name="actress" class="form-control form-control-lg" type="text" placeholder="Actress"required>
                </div>

                <div class="form-group" style=" padding-left:30%;padding-bottom:10px;">
                    <input style="width:55%; text-align:center;"name="directorname" class="form-control form-control-lg" type="text" placeholder="Director Name"required>
                </div>

                <div class="form-group" style=" padding-left:30%;padding-bottom:10px;">
                    <input style="width:55%; text-align:center;"name="releaseyear" class="form-control form-control-lg" type="text" placeholder="Release Year"required>
                </div>

                <div class="form-group">
                    <input   style="background-color: #56BBF1; color:#fff;"type="submit" name="sub"  class="btn btn-light">
                </div>
            </form>   
            
            <?php 
          
            if (isset($_POST["sub"])) {
                $moviename = $_POST["moviename"];
                $leadactor = $_POST["leadactor"];
                $actress = $_POST["actress"];
                $directorname = $_POST["directorname"];
                $releaseyear = $_POST["releaseyear"];
                $sql = "INSERT INTO `movie_table`(`movie_name`, `lead_actor`, `actress`,`director_name`,`release_year`) VALUES ('$moviename','$leadactor','$actress','$directorname','$releaseyear')";
      
            if (mysqli_query($con, $sql)) {
                echo "<script type='text/javascript'> alert('New Movie Interest Added..!')</script>";
            }

            } ?>   
        </div>
    </div>
</body>
</html>