
<?php
include_once 'autoload.php';

class Requete
{
    protected $bd;
    protected $tableName;
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->bd = ConnexionBD::getInstance();
    }

    public function findAll() {
        $request = "select * from ".$this->tableName;
        $response =$this->bd->prepare($request);
        $response->execute([]);
        return $response->fetchAll(PDO::FETCH_OBJ);
    }

    public function findBycondition($condition) {
        $request = "select * from ".$this->tableName ." where ".$condition;
        $response =$this->bd->prepare($request);
        $response->execute([]);
        
        return $response->fetchAll(PDO::FETCH_OBJ);
       
    }

    public function deleteBycondition($condition) {
        $request = "delete  from ".$this->tableName ." where ".$condition;
        $response =$this->bd->prepare($request);
        $response->execute([]); 
        $dat=date('m/d/Y h:i:s a', time());
        $request=str_replace("'"," ",$request);
        $request2 = "INSERT INTO `historique` (`personne`, `admin`, `date`, `opération`) VALUES ('".substr($condition,3)."', '".$_SESSION['prénomadmin']." ".$_SESSION['nomadmin']."', '".$dat."', '" .$request."')";
        $response2=$this->bd->prepare($request2);
        $response2->execute([]);
        return $response->fetchAll(PDO::FETCH_OBJ);
        
    }
    public function add() {
        include_once('imageupload.php');
        $request = "INSERT INTO ".$this->tableName ." (`Nom`, `Prénom`, `Age`, `Sexe`, `Email`, `Numéro GSM`, `Poste`,`Photo`) VALUES ('".$_POST['Nom']."', '".$_POST['Prénom']."', '" .$_POST['Age']."', '".$_POST['Sexe']."', '" .$_POST['Email']."', '".$_POST['Numéro_GSM']."', '".$_POST['Poste']."', '".$_FILES['Photo']['name'])."')";
        $response =$this->bd->prepare($request); 
        $response->execute([]);
        $dat=date('m/d/Y h:i:s a', time());
        $request=str_replace("'"," ",$request);
        $request2 = "INSERT INTO `historique` (`personne`, `admin`, `date`, `opération`) VALUES ('"."New ID"."', '".$_SESSION['prénomadmin']." ".$_SESSION['nomadmin']."', '".$dat."', '" .$request."')";
        $response2=$this->bd->prepare($request2);
        $response2->execute([]);
        return $response->fetchAll(PDO::FETCH_OBJ);
        
    }
    public function update() {
        include_once('imageupload.php');
        $request="UPDATE ".$this->tableName." SET `Nom`='".$_POST['Nom']."',`Prénom`='".$_POST['Prénom']."',`Age`='".$_POST['Age']."',`Sexe`='".$_POST['Sexe']."',`Email`='".$_POST['Email']."',`Numéro GSM`='".$_POST['Numéro_GSM']."',`Poste`='".$_POST['Poste']."',`Photo`='".$_FILES['Photo']['name'])."' WHERE `ID`= '".$_POST['ID']."'";
        $response =$this->bd->prepare($request); 
        $response->execute([]);
        $dat=date('m/d/Y h:i:s a', time());
        $request=str_replace("'"," ",$request);
        $request2 = "INSERT INTO `historique` (`personne`, `admin`, `date`, `opération`) VALUES ('".$_POST['ID']."', '".$_SESSION['prénomadmin']." ".$_SESSION['nomadmin']."', '".$dat."', '" .$request."')";
        $response2=$this->bd->prepare($request2);
        $response2->execute([]);
        return $response->fetchAll(PDO::FETCH_OBJ);
       
    }

    
}