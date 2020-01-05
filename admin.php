<?php include_once 'header.php' ?>

<?php
define('HOST', 'mysql:host=mysql-florent.alwaysdata.net; dbname=florent_ptut');
define('USER', 'florent');
define('PASSWORD', '123floflo123');
define('TABLENAME', 'florent_ptut');

$pdo = new PDO(HOST, USER, PASSWORD );

$stmt = $pdo->query("Select * from Utilisateur");
$row = $stmt->fetchAll();
//print_r($row[1]);

function Equipe(){
    if( $_SESSION['Status'] == 1  || $_SESSION['Status'] == 2 && $_SESSION['Sexe'] = 0 && $_SESSION[$date] < 2005/01/01 && $_SESSION[$date] > 2000/01/01 ){
        $pdo->prepare("Update Utilisateur SET IdGroupe = U15 where IdUser = '$idu'");
    }
    if( $_SESSION['Status'] == 1  || $_SESSION['Status'] == 2 && $_SESSION['Sexe'] = 1 && $_SESSION[$date] < 2005/01/01 && $_SESSION[$date] > 2000/01/01 ){
        $pdo->prepare("Update Utilisateur SET IdGroupe = U15 where IdUser = '$idu'");
    }

}


foreach ($row as $tmp){
    echo "<div class='container-fluid' style='display: flex; flex-direction: row; font-size: 15px; justify-content: space-around; width: 100%; align-items: center; margin-top: 1%'>";
    for($i = 0;$i <= count($tmp); $i++ ){
        echo "<p class= 'aze' >". $tmp[$i] . "</p>";
    }
    echo '<form class="form-inline" action="Controller/Cadmin.php" method="post" onsubmit="Equipe()" style="height: 100%; display: flex; flex-direction: row; width: 40%">
            <input style="visibility: hidden; display: none;" value= ' . $tmp[0] . ' name="idU">
            <select name="change" class="custom-select mb-6 col-md-4" style="width: 30%">
                    <option value="Status">Status</option>
                    <option value="Email">Email</option>
                    <option value="IdGroupe">Equipe</option>
                </select>
            <input class="form-check-input" type="text" name="tchange">
            <button type="submit" class="btn btn-primary" >Submit</button>
            </form>';
    echo "</div>";
    echo '</br>';

}

//for($i = 0; $i<count($row);$i = $i + 9)
//{
//    echo $row['IdUser'];
//    echo $row['Nom'];
//    echo $row['Prenom'];
//    echo $row['DateN'];
//    echo $row['Sexe'];
//    echo $row['Email'];
//    echo $row['Mdp'];
//    echo $row['Status'];
//    echo $row['IdGroupe'] . '</br>';
//}

?>