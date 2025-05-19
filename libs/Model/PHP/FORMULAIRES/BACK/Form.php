<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class POST_FORM {
    private string $id_banner;
    private string $message;
    private bool $isPost;
    private PDO $pdo;
    
    public function __construct( string $id_banner, string $message, PDO $pdo) {
        $this->isPost = $_SERVER['REQUEST_METHOD'] === 'POST';
        $this->id_banner = $id_banner;
        $this->message = $message;
        $this->pdo = $pdo;

    }
    

    private function auth() {
            $email = $_POST['Email'];
            $password = $_POST['Password'];
            
            // On verifie si le mot de passe est correct
            $cnx_sql = new SQL_Select('ID_Service,prenom,nom,mdp,email', 'Utilisateur', "email = '$email'");
            // echo $cnx_sql->getSQL();
            $result = $cnx_sql->execute($this->pdo);
            

            // On verifie si le mot de passe est correct
            if (!empty($result)) {
                if ($result[0]['email'] === $email) {
                    $state_email = true;
                    if (password_verify($password, $result[0]['mdp'])) {
                        $state_pass = true;
                    } else {
                        $state_pass = false;
                    }
                } else {
                    $state_email = false;
                }
            }


            unset($_POST['Email'], $_POST['Password']);

        
            if (!empty($result)) {
                if ($state_email === true) {
                    $state_mail_mess= "Success"; 
                    if ($state_pass === true) {
                        $state_pass_mess = "Success";
                        $this->message = "Bienvenue, {$result[0]['prenom']} {$result[0]['nom']} $this->message";
                    } else {
                        $state_pass_mess = "Error";
                        $this->message = "Mot de passe incorrect";
                    }
                } else {
                    $state_mail_mess= "Error";
                    $this->message = "Email incorrect";
                }

                if ($state_mail_mess === "Success" && $state_pass_mess === "Success") {
                    $status = "Success";
                }else{
                    $status = "Error";
                } 

                echo json_encode([
                    'status' => $status,
                    'status_email' => $state_mail_mess,
                    'status_pass' => $state_pass_mess,
                    'message' => $this->message,
                    'banner' => [
                        'id' => $this->id_banner,
                        'message' => $this->message
                    ],
                    'user' => [
                        'ID_Service' => $result[0]['ID_Service'],
                        'prenom' => $result[0]['prenom'],
                        'nom' => $result[0]['nom']
                    ]
                ]);
            } else {
                echo json_encode([
                    'status' => 'Error',
                    'message' => 'Identifiants invalides',
                    'banner' => [
                        'id' => $this->id_banner,
                        'message' => 'Identifiants invalides'
                    ]
                ]);
            }
        
            exit;
        }

    public function FORM_Connect() {

        if ($this->isPost) {
            if (isset($_POST['Email']) && isset($_POST['Password']) && count($_POST) === 2) {
                $this->auth();
            } 
            
            
            else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Erreur de traitement'
                ]);
                exit;
            }
        }
    }
}
