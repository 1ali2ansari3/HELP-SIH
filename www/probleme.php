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

      <span class="logo_name">Admin</span>
    </div>
      <ul class="nav-links">
      <li>
          <a href="Admin.php" title="Profilé">
          <i class="large material-icons">perm_identity</i>
            <span class="links_name">Profilé</span>
          </a>
        </li>
        <li>
          <a href="probleme.php" class="active" title="Problème SIH">
          <i class="large material-icons">add_circle</i>
            <span class="links_name">Problème SIH</span>
          </a>
        </li> 
        <li>
          <a href="GERE.PHP" title="Gérer les problèmes ">
          <i class="large material-icons">add_circle_outline</i>
           <span class="links_name">Gérer les problèmes </span>
          </a>
        </li>
        <li>
          <a href="SIHA.PHP"  title="SIH">
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
    <?php
     session_start();
     $cin=$_SESSION['CIN'];
    $pdo=new PDO("mysql:host=localhost;dbname=sih","root",""); 
    $ins = $pdo->prepare("select * from info WHERE cin= \"$cin\" ");  
    $ins->execute();
    $tab1 = $ins->fetchAll(); 
    $service=$tab1[0]['SERVICE'];

    $ins = $pdo->prepare("select * from declaration WHERE Service= \"$service\" ");  
    $ins->execute();
    $tab = $ins->fetchAll(); 
    ?>
    
      <div class="sales-boxes">
      
        <div class="recent-sales box">
        <div class="title"><h1>Problème SIH</h1></div> <br>
        
     <?php
     for ($j = 0; $j <count($tab); $j++){ 
      if($tab[$j]['SITUATION']==0){
     ?>
        <div class="card3">
        <?php
         echo '<table   border="1" style=" width:100%; padding:10px; margin: 10px auto; background-color: #FFF">';
         echo "<tr>";
         echo "<td><b>CIN  :  </b>".$tab[$j]['cin']."</td>";
         $i=$tab[$j]['cin'];
         $T = $pdo->prepare("select * from info WHERE cin= \"$i\" ");  
         $T->execute();
         $tab2 = $T->fetchAll();
         echo "<td><b>Nom  :  </b>".$tab2[0]['NOM']."</td>";
         echo "<td><b>prénom :  </b>".$tab2[0]['PRENOM']."</td>";

         echo "<td><b>Date  :  </b>".$tab[$j]['date']."</td>";
         echo "<td><b>Heure  :  </b>".$tab[$j]['hur']."</td>";
         echo '<td><a href="#d['.$j.']" class="btn"> <span class="fas fa-chevron-right"></span></a></td>';
         echo "</tr>";
         echo "</table>";
         

        ?>
        </div>
        
        <?php echo "<div class='card2' id='d[".$j."]'>";  ?>
        <a href="#" class="modal_close">&times</a>
      
        <div class="accordion">
  <div class="accordion-item">
    <div class="accordion-item-header">
    <h3> Sites du projet SIH : </h3>
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      <?php      echo '<b>'.$tab[$j]['SIH'].'</b>';  ?>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
    <h3> Modules SIH  :  </h3>
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      <?php      echo '<b>'.$tab[$j]['Modules'].'</b>';  ?>
          </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
    <h3> Remarque  : </h3>
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      <?php      echo '<textarea rows="4" cols="119" id="AZE">'.$tab[$j]['Remarque'].'</textarea>';  ?>
      </div>
    </div>
  </div>
  <?php
        echo '<table    width=1000 >'; 
         $M=$tab[$j]['N'];
         echo '<tr><td style="text-align:left" ><img src="image/centre.jpg" height="100px"  width="400px" ></td><td></td><td><button onclick="resoudre(\''.$M.'\')" style="color:blue;border:0;" class="iz"><i class="material-icons">settings</i></button></td></tr>';
         echo "</table>";
        ?>
  </div>
</div>
        


        <?php
        }
        }
        ?>
        
        </div>
       
      </div>
    </div>
  </section>

  <script>

function resoudre(p){
      if(confirm("Voulez-vous résoudre ce problème ?")){
        window.location ='C.php?VV='+p;
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


const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }
    
  });
});
 </script>

</body>
</html>