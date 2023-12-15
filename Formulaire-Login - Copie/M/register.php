<?php

class Register
{
    private $pdo;

    // Constructeur de la classe
    public function __construct($host, $dbname, $charset, $username, $password)
    {
        // Initialiser la connexion à la base de données
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
        $this->pdo = new PDO($dsn, $username, $password);
    }

    // Méthode pour insérer un utilisateur dans la base de données
    public function insertUser($email, $password)
    {
        // Hasher le mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Préparer la requête SQL pour l'insertion
        $stmt = $this->pdo->prepare("INSERT INTO user (Mail, Password) VALUES (?, ?)");

        // Exécuter la requête
        $stmt->execute([$email, $hashedPassword]);

        header('Location: ..\V\login.html');
    }

    // Méthode pour fermer la connexion à la base de données
    public function closeConnection()
    {
        $this->pdo = null;
    }
    
}

    function Login($Inputemail, $Inputpassword) {
    // Informations de connexion à la base de données
    $bdd = 'mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4';
    $username = 'root';
    $password = '';

    // Connexion à la base de données
    $pdo = new PDO($bdd, $username, $password);

    // Préparer la requête SQL pour récupérer l'utilisateur par email
    $stmt = $pdo->prepare("SELECT * FROM user WHERE Mail = ?");
    $stmt->execute([$Inputemail]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier le mot de passe
    if ($user && password_verify($Inputpassword, $user['Password'])) {
        // Authentification réussie
        echo "Authentification réussie. Bienvenue, " . $user['Mail'];
    } else {
        // Authentification échouée
        echo "Identifiants incorrects. Veuillez réessayer.";
    }

    // Fermer la connexion à la base de données
    $pdo = null;
}
?>