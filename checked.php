<style>
*{
    margin :0;
    padding:0;
}
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
 
}

</style>
<body >
<h1 class="center"
style="color:green; font-size:60"
>Bienvenue</h1>
</body>

<?php 
$nom =  isset($_GET['name']) ;
$prenom =  isset($_GET['pname']) ;
$team =  isset($_GET['team']) ;

echo($nom);
?>