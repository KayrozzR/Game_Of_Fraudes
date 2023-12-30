
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Fraudes - login</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
</head>

<body>
    <div class="pageIndex">

    
    <nav>   
     <h1> <a href="index.php">Game of<br> Fraudes </a></h1>
   </nav>
    <div>
     <ul class="nav navbar-nav navbar-nav-first">
       <a href="profil.php" class=profilButton>PROFIL</a>
        </ul>
    </div>

        <section class="lp">

            <div class="textcenter">
                <p>Sign In</p><br>


                <form action="..\C\login.action.php" method="post" class="formLogin">
                    <label for="email">email: </label>
                    <input name="email" type="email" id="email" minlength="2" maxlength="30"   required>
                    <label for="Password">Password: </label>
                    <input name="password" type="password" id="password" minlength="2" maxlength="30" placeholder ="Password: "  required>
                       

                    <button type="submit">Connect</button>
                        
                    
                </form>

            </div>


            <div class="lp__item stripe">
        <a href="../C/readPenality.action.php" class="stripe__item">
          <p class="text_slide"> Penalities Tab </p>
        </a>
        <a href="../C/readDebt.action.php" class="stripe__item">
          <p class="text_slide"> Debt Historique </p>
        </a>
        <a href="../C/readUser.action.php" class="stripe__item">
          <p class="text_slide">User List </p>
        </a>
        <a href="penalityForm.php" class="stripe__item">
          <p class="text_slide"> Denounce </p>
        </a>
      </div>

        </section>
    </div>
</body>

</html>
    

