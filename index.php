<?php

  function multiplication ($a)
  {
  	for ($i=0; $i <= 12; $i++) 
  	{ 
  		
  		echo "<h3>$a x $i =".($a * $i)."</h3>";
  	}
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>MULTIX</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="container" style="background-color: #302c44; zoom: 75%;">

<br>
<div class="card text-center" >
      
       <div class="card-header">
                 <b>MULTIX beta.</b>
        </div>

		<form method="post" class="form-group">

         <div class="card-body">
          
		<label for="multiplication" class="card-title">Donnez la valeur à multiplier:</label><br>

         

		<input type="number" name="valeur" class="input-group"><br>

		<input type="submit" name="valider" value="calculer" class="btn btn-primary btn-lg btn-block">

	</div>
	</form>
</div>



<hr>

<div style="color: white">

    <?php

      if(isset($_POST['valider']))
      {
      	if (isset($_POST['valeur']))
      	{
      		$valeur=$_POST['valeur'];
            
            if(!$valeur=="" AND is_numeric($valeur))
            {
            	echo "<h2>Table de multiplication de : $valeur</h2>";

                multiplication ($valeur); 
            }

      	}
      }

    ?>

</div>


</body>
</html>