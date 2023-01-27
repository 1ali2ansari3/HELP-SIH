<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
          <a href="Utilisateur.php" class="active" title="Profilé">
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
<?php 
    session_start();
    $cin=$_SESSION['CIN'];
    
    $pdo=new PDO("mysql:host=localhost;dbname=sih","root",""); 
    $ins = $pdo->prepare("select * from info where cin= \"$cin\"");  
    $ins->execute();
    $tab = $ins->fetchAll();
?>
   <main>
      <section class="glass">
        <div class="dashboard">
          <div class="user">
            <img src="image/1.png" alt="" class="crcle" />
            <h3><?php 
              echo $tab[0]['NOM'].' '.$tab[0]['PRENOM'];
            
            ?></h3>
            <p>Utilisateur</p>
          </div>
          <div class="links">
         
          <a href="http://www.churabat.ma/"><img src="image/10.jpg" alt="" width=250 height=500/></a>
          
          </div>
          
        </div>
        <div class="games">
          <div class="status">
            <h1>Profilé</h1>
          </div>
          <div class="cards">
            <div class="card">
            <table  cellspacing="38"  style="text-align:center"  width=600 height=100>
         

<?php   
   echo '<tr><td><b>CIN</b><hr></td><td>'.$tab[0]['cin'].'<hr></td></tr>'; 
   echo '<tr><td><b>Nom</b><hr></td><td>'.$tab[0]['NOM'].'<hr></td></tr>'; 
   echo '<tr><td><b>Prénom</b><hr></td><td>'.$tab[0]['PRENOM'].'<hr></td></tr>'; 
   echo '<tr><td><b>Email</b><hr></td><td>'.$tab[0]['EMAIL'].'<hr></td></tr>'; 
   echo '<tr><td><b>N°Tél</b><hr></td><td>'.$tab[0]['TEL'].'<hr></td></tr>'; 
   echo '<tr><td><b>Adress</b><hr></td><td>'.$tab[0]['ADRESS'].'<hr></td></tr>'; 
   echo '<tr><td><b>Hôpitaux</b><hr></td><td>'.$tab[0]['HOSPITAUX'].'<hr></td></tr>'; 
   echo '<tr><td><b>Type</b><hr></td><td>'.$tab[0]['TYPE'].'<hr></td></tr>'; 
   echo '<tr><td><b>N°Bureau</b><hr></td><td>'.$tab[0]['BREAUX'].'<hr></td></tr>'; 


?> 
 </table>
             

            </div>
          </div>
        </div>
      </section>
    </main>
  </section>
  <script>
    function valeur(c){
      if(confirm("vous voulez imprimer la fiche de reparation de la vehicule "+c+"?")){
        let val=prompt("le kilomètrage");
        let t1=prompt("Type d'impression");
        let t2=prompt("Montant");
        let t3=prompt("Station");
        window.location ='imp.php?id='+c+'&val='+val+'&t1='+t1+'&t2='+t2+'&t3='+t3;
      }
    }
    function suprimmer(p){
      if(confirm("voulez vous suprimmer cette vehicule !"+p)){
        window.location ='delet.php?idPersonne='+p;
      }
    }
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