<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include('connexion.php');
    if(isset($_POST['kk'])){
        extract($_POST);

    if( $_POST['surnom'] && $_POST['nom'] && $_POST['prenom'] && $_POST['email'] && $_POST['psswd'] && $_POST['tel']) {
        
        $idd = htmlspecialchars($_POST['surnom']);
        $iddd = htmlspecialchars($_POST['nom']);
        $idddd = htmlspecialchars($_POST['prenom']);
        $iddddd = htmlspecialchars($_POST['email']);
        $idddddd = htmlspecialchars($_POST['psswd']);
        $iddddddd = htmlspecialchars($_POST['tel']);
        
        $query = "INSERT INTO citoyen(username, nom, prenom, email, pwd, telephone) VALUES('$idd','$iddd','$idddd','$iddddd','$idddddd',$iddddddd)";


        $esh = mysqli_query($conn, $query);

        if($esh) { 
            echo "<script>
            alert('Compte crée avec succées !');
            window.location.href = 'index.php';
            </script>";
        exit();
            } else {  echo "<script>
                alert('Compte non crée, déjà existe !');
                window.location.href = 'citoyen.php';
                </script>";
            exit();}

        } else { 
            echo "<script>
            alert('Remplir bien tous les champs !');
            window.location.href = 'citoyen.php';
            </script>";
        exit();
            }
    }

    if(isset($_POST['impot'])){
        extract($_POST);

    if( !empty($_POST['nif']) && !empty($_POST['dat']) && !empty($_POST['typ']) && !empty($_POST['trs'])) {
        
        $idd = htmlspecialchars($_POST['nif']);
        $iddd = htmlspecialchars($_POST['dat']);
        $idddd = htmlspecialchars($_POST['typ']);
        $iddddd = htmlspecialchars($_POST['trs']);
        $idddddd = $_SESSION['username'];
        
        
    
        $quer = "SELECT tarif FROM categorie WHERE categorie = '$idddd'";
        $es = mysqli_query($conn, $quer);
        $row = mysqli_fetch_assoc($es);

        if($iddddd == $row['tarif']) { 
        
        $query = "INSERT INTO impot(nif, trans, dateimpot, typeimpot, username) VALUES('$idd',$iddddd,'$iddd','$idddd','$idddddd')";


        $esh = mysqli_query($conn, $query);

        if ($esh) {
            echo "<script>
                alert('Transaction réussi !');
                window.location.href = 'dash.html';
                </script>";
            exit();
        } 
     else {
        echo "<script>
            alert('Transaction impossible !');
            window.location.href = 'impot.php';
            </script>";
        exit();
    }
}  else {
    echo "<script>
        alert('Transaction impossible, paiement hors norme de la tarif de catégorie sélectionné!');
        window.location.href = 'impot.php';
        </script>";
    exit();
}
} else {
    echo "<script>
        alert('Remplir bien tous les champs !!');
        window.location.href = 'impot.php';
        </script>";
    exit();
}}
       

    if(isset($_POST['categorie'])){
        extract($_POST);

    if( $_POST['cat'] && $_POST['tar']) {
        
        $idd = htmlspecialchars($_POST['cat']);
        $iddd = htmlspecialchars($_POST['tar']);
        
        
        
        $query = "INSERT INTO categorie(categorie, tarif) VALUES('$idd', $iddd)";


        $esh = mysqli_query($conn, $query);

        if($esh) { 
            echo "<script>
            alert('Catégorie ajouté !');
            window.location.href = 'dash.html';
            </script>";
        exit();
           } else { 
            echo "<script>
            alert('Catégorie non ajouté !');
            window.location.href = 'categorie.php';
            </script>";
        exit();
            }

        } else { 
            echo "<script>
            alert('Remplir bien tous les champs!');
            window.location.href = 'categorie.php';
            </script>";
        exit();
            }
    }

    if(isset($_POST['deces'])){
        extract($_POST);

    if($_POST['nmd'] && $_POST['pmd'] && $_POST['dtd'] && $_POST['lid'] && $_POST['pxd']) {

        
        $idd = htmlspecialchars($_POST['nmd']);
        $iddd = htmlspecialchars($_POST['pmd']);
        $idddd = htmlspecialchars($_POST['dtd']);
        $iddddd = htmlspecialchars($_POST['lid']);
        $idddddd = htmlspecialchars($_POST['pxd']);
        $iddddddd = $_SESSION['username'];
        $id = $idd.''.$idddd;
        
        
        
        $query = "INSERT INTO deces(codedeces,nomdeces,prenomdeces,datedeces,lieudeces,prixdeces,username) VALUES('$id', '$idd', '$iddd', '$idddd', '$iddddd', $idddddd, '$iddddddd')";


        $esh = mysqli_query($conn, $query);

        if($esh) { 
            echo "<script>
            alert('Demande Acte de décés acceptée !');
            window.location.href = 'dash.html';
            </script>";
        exit();
            } else { 
                echo "<script>
                alert('Demande Acte de décés refusée !');
                window.location.href = 'deces.php';
                </script>";
            exit();
                }

        } else { 
            echo "<script>
            alert('Remplir bien tous les champs!');
            window.location.href = 'deces.php';
            </script>";
        exit();
            }
    } 

    if(isset($_POST['connect'])){
        extract($_POST);

    if( $_POST['user'] && $_POST['pww']) {
        
        $idd = htmlspecialchars($_POST['user']);
        $iddd = htmlspecialchars($_POST['pww']);
        
        $_SESSION['username']=$idd;
        
        $query = "SELECT*FROM citoyen WHERE username='$idd' AND pwd='$iddd' ";
        $result = mysqli_query($conn, $query);
        

        if(mysqli_num_rows($result) > 0) {
            echo "<script>
            alert('Vous etes connecté !');
            window.location.href = 'dash.html';
            </script>";
        exit();
            
        } else {
            echo "<script>
            alert('Vous etes non connecté, Vérifier votre username ou password!');
            window.location.href = 'index.php';
            </script>";
        exit();
            
        }
    } else {
        echo "<script>
        alert('Remplir bien tous les champs !');
        window.location.href = 'index.php';
        </script>";
    exit();
    }
    }

?> 
</body>
</html>
