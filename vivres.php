<!DOCTYPE html>

<html>
	
	<head>
		
		<meta charset="utf-8">
		<title>Vivres</title>		
		<link rel="stylesheet" type="text/css" href="./styles/general.css">
			
	</head>
	
	<body>
		<header>
			
			
			<nav>
			
				<div>
					<a href="./index.html">Accueil</a>
				</div>			
				<div>
					<a href="./checklist.html">Checkliste</a>
				</div>			
				<div>
					<a href="./agenda.html">Agenda</a>
				</div>
				<div>
					<a href="./meteo.html">Météo</a>
					
				</div>
				<div>
					<a href="./medic.html">Médic</a>
					
				</div>
				<div>
					<a href="./vivres.html">Vivres</a>
					
				</div>
				
			</nav>
			<div id="boxshadowonly"></div>
		</header>
		
		<main>
			<article>
				
				<div>
					<h2>Vivres et matériel en possession<h2>
						
						<table>
					 <tr>
					  <th>Date et Heure</th> 
					  <th>Produit</th> 
					  <th>Quantité</th>
					 </tr>
					 <?php
					$conn = mysqli_connect("localhost", "root", "", "MISSION");
					  // Check connection
					  if ($conn->connect_error) {
					   die("Connection failed: " . $conn->connect_error);
					  } 
					  $sql = "SELECT dateheure, designationproduit, qte FROM STOCKBASE";
					  $result = $conn->query($sql);
					  if ($result->num_rows > 0) {
					   // output data of each row
					   while($row = $result->fetch_assoc()) {
					    echo "<tr><td>" . $row["dateheure"]. "</td><td>" . $row["designationproduit"] . "</td><td>"
					. $row["qte"]. "</td></tr>";
					}
					echo "</table>";
					} else { echo "pas de resultat"; }
					$conn->close();
					?>
					</table>


					
				</div>
			
			</article>
			
		</main>
		
	</body>
	
	
</html>