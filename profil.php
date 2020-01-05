<?php include_once 'header.php' ?>
<?php
session_start();

function statutToString()
{
    if ($_SESSION["Status"] == 0) {
        echo 'Non-licencié';
    } else if ($_SESSION["Status"] == 1)  {
        echo 'Licencié';
    }
    else if ($_SESSION["Status"] == 2){
        echo 'Administrateur';
    }
}


//if ($_SESSION['login'] = "ok")
//    $html = '<div>';
//    $html .= '<p>Prenom</p>';
//    $html .= '<p>' . $_SESSION["Prenom"] . '</p>';
//    $html .= '</div>';
//    $html .= '<div>';
//    $html .= '<p>E-mail</p>';
//    $html .= '<p>' . $_SESSION["Email"] . '</p>';
//    $html .= '</div>';
//    $html .= '<div>';
//    $html .= '<p>Statut</p>';
//    $html .= '<p>' . statutToString() . '</p>';
//    $html .= '</div>';
//    echo $html;


?>
<body>

<div class="container" style="width: 100%"></br>
        <table class="table" style="width: 50%">
            <thead class="thead-dark">
            <tr>
                <th>Prenom</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $_SESSION["Prenom"] ?></td>
            </tr>
            </tbody>
            <thead class="thead-dark">
            <tr>
                <th>Nom</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $_SESSION["Nom"] ?></td>
            </tr>
            </tbody>
            <thead class="thead-dark">
            <tr>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $_SESSION["Email"] ?></td>
            </tr>
            </tbody>
            <thead class="thead-dark">
            <tr>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php statutToString() ?></td>
            </tr>
            </tbody>
            <thead class="thead-dark">
            <tr>
                <th>Date de naissance </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $_SESSION["DateN"] ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
