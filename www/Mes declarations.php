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
          <a href="demende.php" title="declare d'un problème">
          <i class="large material-icons">add_circle</i>
            <span class="links_name">Declare d'un problème</span>
          </a>
        </li> 
        <li>
          <a href="Mes declarations.php" class="active" title="Mes déclarations">
          <i class="large material-icons">add_circle_outline</i>
           <span class="links_name">Mes déclarations</span>
          </a>
        </li>
        <li>
          <a href="SIH.PHP"  title="SIH">
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
          
        <div class="sales-boxes">
        <div class="recent-sales box" >
    
          <font color='gren'><b>Mes déclarations :</b></font>
          
          <table  cellspacing="28" rowspan="35"  style=" width:100%;
        padding:10px;
        margin: 10px auto;
        background-color: #FFF">
          <tr><th>Module<hr></th><th>Servise<hr></th><th>Date<hr></th><th>Heure<hr></th><th>situation<hr></th></tr>
    <?php
     session_start();
     $cin=$_SESSION['CIN'];
    $pdo=new PDO("mysql:host=localhost;dbname=sih","root",""); 
    $ins = $pdo->prepare("select * from declaration WHERE cin= \"$cin\" ");  
    $ins->execute();
    $tab = $ins->fetchAll(); 
    for ($j = 0; $j <count($tab); $j++){ 
       

        echo "<br><tr>
        <td>".$tab[$j]['Modules']."<hr></td>
        <td>".$tab[$j]['Service']."<hr></td>
        <td>".$tab[$j]['date']."<hr></td>
        <td>".$tab[$j]['hur']."<hr></td>";
        
  if($tab[$j]['SITUATION']==0){
   
       echo "<td><font color='grey'><b>aucune</b></font><hr></td></tr>";

    }
    else if($tab[$j]['SITUATION']==1){
   
        echo "<td><font color='red'><b>en coure</b></font><hr></td></tr>";
 
     }
    else if($tab[$j]['SITUATION']==2){
   
        echo "<td><font color='blue'><b>Terminé</b></font><hr></td></tr>";
 
     }

    }
    
    ?>
    </table>
                
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