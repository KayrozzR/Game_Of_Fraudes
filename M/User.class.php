<?php
class User
{
    private $id_user;
    private $name_user;
    private $firstname_user;
    private $tel;
    private $mail;
    private $password;

    public function __construct($name_user, $firstname_user, $tel, $mail, $password)
    {
       
        $this->name_user = $name_user;
        $this->firstname_user = $firstname_user;
        $this->tel = $tel;
        $this->mail = $mail;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    // ... autres méthodes et getters

    public function getNameUser(): string
    {
        return $this->name_user;
    }

    public function getFirstnameUser(): string
    {
        return $this->firstname_user;
    }

    public function getTelUser(): string
    {
        return $this->tel;
    }

    public function getMailUser(): string
    {
        return $this->mail;
    }

    public function getPasswordUser(): string
    {
        return $this->password;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }
}
?>
