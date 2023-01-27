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
          <a href="probleme.php" title="Problème SIH">
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
          <a href="SIHA.PHP" class="active" title="SIH">
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
          
        <img src="image/SSCH.jpg" alt="sih" width=100% >
            <br><br>
            <img src="image/SSHCA.jpg" alt="sih" width=100% >
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