<html>
    <body> 
        
        <?php
                if($_POST['username']=="john" && $_POST['password']=="Rambo")
                {
                        echo  "<br/>C'est Pas ma guerre";
                }
                else{
                    echo  "<br/>Votre pire Cauchemar";
                }
            
                ?>

        <div id="container">
            <!-- zone de connexion -->
            <center>
            <form action="index.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" name="username" placeholder="Entrer le nom d'utilisateur" request>
                <br/><br/>
                <label><b>Mot de passe</b></label>
                <input type="password" name="password" placeholder="Entrer le mot de passe" request >
                <br/><br/>
                <input type="submit" name='envoie' value='Se Connecter' request >
                <center>

        
            </form>
        </div>
    </body>
</html>