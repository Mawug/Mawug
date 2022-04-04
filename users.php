<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">

      <header><h1>Students Chat App</h1></header>
      <header>

        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>

          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/profil.php" class="logout"><img src="pamm.png"></a>
      </header>
      <div class="search">
        <span class="text">Rechercher un contact</span>
        <input type="text" placeholder="Entrer le nom que vous cherchez...">
        <button><i class="fas fa-search"></i><img src="seach.png" width="30px"></button>
      </div>
      <div class="users-list">
  
      </div><br>
      <header><a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Se déconnecter</a></header>

    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
