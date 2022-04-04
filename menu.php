
<link rel="stylesheet" type="text/css" href="menu.css">
 <nav >
          <ul style="float: right;">
    <li class="menu-deroulant">
     <a href="#"><img src="m2.png" width="50px"></a>
  
      <ul class="sous-menu">
       <li><a href="profil.php">Mon profil</a></li>
       <li><a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Se déconnecter</a></li>
      </ul>
 </li></ul></nav>