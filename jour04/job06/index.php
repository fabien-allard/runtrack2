<html>
    <body> 
        

        <div id="container">
            <!-- zone de connexion -->
            <center>
            <form action="index.php" method="GET">
                <h1>Nombres Pairs/impairs</h1>
                
                <label><b>Nombres :</b></label>
                <input type="text" name="nombre">
                <br/><br/>
                <input type="submit" name='submit' value='Envoyer' request >
                <center>

<?php
        if (isset($_GET['nombre'])){
            if($_GET['nombre'] %2 ==0)
            {
                echo "<br/>Nombres pairs";
        }
        else{
            echo "<br/>Nombres impairs";
        }
    }
?>
</div>
    </body>
</html>