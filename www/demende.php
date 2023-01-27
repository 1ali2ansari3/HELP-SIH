<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  >
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   </head>
<body>
<div class="sidebar">
    <div class="logo-details">
    <i class="large material-icons">local_hospital</i>

      <span class="logo_name">Utilisateur</span>
    </div>
      <ul class="nav-links">
      <li>
          <a href="Utilisateur.php" title="Profilé">
          <i class="large material-icons">perm_identity</i>
            <span class="links_name">Profilé</span>
          </a>
        </li>
        <li>
          <a href="demende.php" class="active" title="declare d'un problème">
          <i class="large material-icons">add_circle</i>
            <span class="links_name">Declare un problème</span>
          </a>
        </li> 
        <li>
          <a href="Mes declarations.php" title="Mes déclarations">
          <i class="large material-icons">add_circle_outline</i>
           <span class="links_name">Mes déclarations</span>
          </a>
        </li>
        <li>
          <a href="SIH.PHP" title="SIH">
          <i class="large material-icons">subdirectory_arrow_right</i>
            <span class="links_name">SIH</span>
          </a>
        </li>
      
        
       

        <li class="log_out">
          <a href="index.PHP" title="Log-out" >
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>

<section class="home-section">
    <nav>
      <div class="sidebar-button">
      <i class='bx bx-menu sidebarBtn'></i>
           
        <a href="http://www.churabat.ma/" class="logo" id="A2"> <i class="fas fa-heartbeat"></i> Centre Hospitalo-Universitaire Ibn Sina - CHUIS.</a>
            
      </div>
      
     
    </nav>
    <div class="home-content">
      

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Declare d'un problème</div><br>
          <div class="x" id="x" >
          <form method="POST" class="my-login-validation" >
                                <div class="form-group">
									<label for="MTr">Sites du projet SIH</label><br>
								<?php 
                                 session_start();
                                 $cin=$_SESSION['CIN'];
                                $pdo=new PDO("mysql:host=localhost;dbname=sih","root",""); 
                                $ins = $pdo->prepare("select HOSPITAUX from info where cin= \"$cin\"");  
                                $ins->execute();
                                $tab = $ins->fetchAll();
                                $R=$tab[0]['HOSPITAUX'];
                                echo'<select  class="form-control" name="SIH">';
                                for ($j = 0; $j <count($tab); $j++){ 
                                    echo "<option value=".$tab[0]['HOSPITAUX'].">".$tab[0]['HOSPITAUX']."</option>";
                                }
                                echo"</select>"; 
                            ?>
								
								</div>
                                <div class="form-group">
									<label for="DMC ">Modules SIH </label>
									<select name="Modules" class="form-control">
                                        <option value="Gestion IPP">Gestion IPP</option>
                                        <option value="Consultations externes">Consultations externes</option>
                                        <option value="Dossier medical">Dossier medical</option>
                                        <option value="Facturation">Facturation</option>
                                        <option value="Caisse">Caisse</option>
                                        <option value="Pharmacie gestion de stock">Pharmacie gestion de stock</option>
                                        <option value="Urgences">Urgences</option>
                                        <option value="Kinésithérapie">Kinésithérapie</option>
                                        <option value="Hôpital de jour">Hôpital de jour</option>
                                        <option value="Hospitalisation">Hospitalisation</option>
                                        <option value="Bloc opératoire">Bloc opératoire</option>
                                        <option value="Réanimation">Réanimation</option>
                                        <option value="Pharmacie">Pharmacie</option>
                                        <option value="Statistiques">Statistiques</option>
                                        <option value="Intégrations">Intégrations</option>
                                        <option value="Oncologie">Oncologie</option>
                                    </select>
								</div>

                                <div class="form-group">
									<label for="DMC ">Service</label>
									<select name="Service" class="form-control">
                                        <option value="Service Management des Systèmes d’Information">Service Management des Systèmes d’Information</option>
                                        <option value="Service Gestion des Infrastructures et des Réseaux">Service Gestion des Infrastructures et des Réseaux</option>
                                        <option value="Service Exploitation et Architecture des Systèmes d’Information">Service Exploitation et Architecture des Systèmes d’Information</option>
                                 
                                    </select>
									
								</div>
                                <div class="form-group">
									<label for="Marque">Remarque</label>
									<textarea name="Remarque" class="form-control" cols="20" rows="7"></textarea>
								
								</div>
                               

							

								<div class="form-group m-0">
									<button type="submit" name="submit" class="btn btn-primary btn-block">
                  Envoyer
									</button>
								</div>
								
							</form>
        
    <?php
  $db = new PDO ('mysql:host=localhost;dbname=sih','root','');
if(isset($_POST['submit'])){
if(isset($_POST['SIH'])  && isset($_POST['Modules']) && isset($_POST['Service']) && isset($_POST['Remarque'])){
    $a=$_POST['SIH'];
    $b=$_POST['Modules'];
    $c=$_POST['Service'];
    $d=$_POST['Remarque'];
    $t = time(); 
    $t2 = date('Y/m/d', $t);
    $t3 = gmdate("H:i:s", time() + 3600*(date("I")));
   
    $sql = $db->prepare("INSERT INTO `declaration`(`cin`, `SIH`, `Modules`, `Service`, `Remarque` , `date` , `hur`) VALUES ('$cin','$R','$b','$c','$d','$t2','$t3')");
    $sql->execute();
  
  
}
}
?>
            
          </div>

        </div>
       
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>