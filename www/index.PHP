<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chuis</title>

    <!-- font awesome cdn link  -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="login SIH.css">

</head>



<body>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <font color='blue'> Centre Hospitalo-Universitaire Ibn Sina - CHUIS. </font> </a>

    <nav class="navbar">
        <a href="#home">HELP SIH</a>
        
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>HELP SIH</h3>
        <p>L'Hôpital Ibn Sina comporte un nombre assez satisfaisant de personnel médical, paramédical, administratif, technique et de soutien répartis selon des services cliniques (13 services de chirurgie, 10 services de médecine et Urgences / Réanimation), des services médico techniques et administratifs.</p>
        <a href="#demo" class="btn"> Login <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>


<div class="book" id="demo">
    

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>

        <form method="post">
            <h3>book appointment</h3>
            <input type="text" placeholder="CIN" class="box" name="CIN" required>
            <input type="password" placeholder="Password" class="box" name="password" required>
            <select name="Niveau" class="box">
            <option value="Admin">Admin</option>
            <option value="User">Utilisateur</option>
            </select>
            
            <input type="submit" name="Authentification" value="Authentification" class="btn">
        </form>
       <a href="#" class="modal_close">&times</a>
    </div>

</div>

<?php

$db = new PDO ('mysql:host=localhost;dbname=sih','root','');

if(isset($_POST['Authentification'])){
if(isset($_POST['CIN']) && isset($_POST['password']) && isset($_POST['Niveau'])){
    $ins = $db->prepare("select * from user where CIN=:CIN and password=:password and TYPE=:Niveau  "); 
    $ins->execute(array(":CIN"=>"$_POST[CIN]" ,":password"=>"$_POST[password]" ,":Niveau"=>"$_POST[Niveau]"));
    $tab = $ins->fetchAll();
    session_start();
    $_SESSION['CIN']=$_POST['CIN'];
if($_POST['Niveau']=="Admin" && count($tab)>0){
    header('location: Admin.php');
}
else if($_POST['Niveau'] =="User" && count($tab)>0){
    header('location: Utilisateur.php');
}
else
    echo"<script>alert('login ou mot de passe incorrecte');</script>";
}
}
?>

<section class="services" id="services">

    <h1 class="heading"> Nos <span>Hôpitaux</span> </h1>

    <div class="box-container">

        <div class="box">
            <br>
            <img src="image/logo-his.png" alt="">
            <br><br><br>
            <h3>Hôpital Ibn Sina</h3>
           
            <a href="http://www.churabat.ma/index.php/hopital-ibn-sina" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/logo_HER.png" alt="">
            <br>
            <h3>Hôpital des Enfants</h3>
          
            <a href="http://www.churabat.ma/index.php/hopital-d-enfants-rabat" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/logo-has.png" alt="">
            <h3>Hôpital Ar-Razi Salé</h3>
            
            <a href="http://www.churabat.ma/index.php/accueil-cctd" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <br><br>
            <img src="image/logo-hay.png" alt="">
            <br>
            <br><br><br>
            <h3>Hôpital Al Ayachi</h3>
            
            <br>
            <a href="http://www.churabat.ma/index.php/accueil-cctd" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/logo-HMY.png" alt="">
            <h3>Hôpital Moulay Youssef</h3>
           
            <a href="http://www.churabat.ma/index.php/accueil-cctd" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/logo-hsr.png" alt="">
            <h3>Hôpital des Spécialités</h3>
            
            <a href="http://www.churabat.ma/index.php/accueil-cctd" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/logo-ino.png" alt="">
            <h3>Institut National d’Oncologie</h3>
            <br><br>
            <a href="http://www.churabat.ma/index.php/accueil-cctd" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/logo-mat.png" alt="">
            <h3>Hôpital de Maternité Souissi</h3>
          
            <a href="http://www.churabat.ma/index.php/accueil-cctd" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        
        <div class="box">
            <img src="image/logo-cctd.png" alt="">
            <h3>Centre de Consultations et de Traitements Dentaires</h3>
           <br><br>
            <a href="http://www.churabat.ma/index.php/centre-de-consultations-et-de-traitements-dentaires" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <img src="image/logo-cnsr.png" alt="">
            <h3>Hôpital de Maternité et Santé Reproductrice les Orangers</h3>
          
            <a href="http://www.churabat.ma/index.php/accueil-cctd" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        
    </div>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Presse & Médias</h3>
            <a href="http://www.churabat.ma/index.php/communique-de-presse"> <i class="fas fa-chevron-right"></i> 
            Communiqué de Presse </a>
            <a href="http://www.churabat.ma/index.php/communique-de-presse"> <i class="fas fa-chevron-right"></i> 
            Médias Audiovisuels</a>
            <a href="http://www.churabat.ma/index.php/communique-de-presse"> <i class="fas fa-chevron-right"></i> 
            Presse Ecrite </a>
            <a href="http://www.churabat.ma/index.php/communique-de-presse"> <i class="fas fa-chevron-right"></i> Revue de Presse </a>
           
        </div>

        <div class="box">
            <h3> Publications</h3>
            <a href="http://www.churabat.ma/index.php/brochures-depliants"> <i class="fas fa-chevron-right"></i> Brochures & Dépliants </a>
            <a href="http://www.churabat.ma/index.php/brochures-depliants"> <i class="fas fa-chevron-right"></i> Bulletins Infos </a>
            <a href="http://www.churabat.ma/index.php/brochures-depliants"> <i class="fas fa-chevron-right"></i> Carrefours Hospitaliers </a>
            <a href="http://www.churabat.ma/index.php/brochures-depliants"> <i class="fas fa-chevron-right"></i> Plans d'Actions </a>
            <a href="http://www.churabat.ma/index.php/brochures-depliants"> <i class="fas fa-chevron-right"></i> Rapports d'Activités </a>
        </div>

        <div class="box">
            <h3>Annonces</h3>
            <a href="http://www.churabat.ma/index.php/appels-a-candidature"> <i class="fas fa-chevron-right"></i> Appels à Candidature</a>
            <a href="http://www.churabat.ma/index.php/appels-a-candidature"> <i class="fas fa-chevron-right"></i> Appels d'Offres </a>
            <a href="http://www.churabat.ma/index.php/appels-a-candidature"> <i class="fas fa-chevron-right"></i> Concours de Recrutement </a>
            <a href="http://www.churabat.ma/index.php/appels-a-candidature"> <i class="fas fa-chevron-right"></i> Examens Professionnels </a>
            
        </div>

        <div class="box">
            <h3>Répertoire</h3>
            <a href="http://www.churabat.ma/index.php/agenda-des-evenements"> <i class="fas fa-phone"></i> Agenda des Évènements </a>
            <a href="http://www.churabat.ma/index.php/agenda-des-evenements"> <i class="fas fa-phone"></i> Annuaire </a>
            <a href="http://www.churabat.ma/index.php/agenda-des-evenements"> <i class="fas fa-phone"></i> Liens Utiles </a>
            <a href="http://www.churabat.ma/index.php/agenda-des-evenements"> <i class="fas fa-phone"></i> Messagerie Professionnelle </a>
            <a href="http://www.churabat.ma/index.php/agenda-des-evenements"> <i class="fas fa-phone"></i> Photothèque </a>
        </div>

    </div>

    <div class="credit"> created by <span>ali ansari</span></div>

</section>
</body>

</html>