<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 5/6/2018
 * Time: 8:43 PM
 */

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectQuery($tableName)
    {
        $statement = $this->pdo->prepare("select * from {$tableName}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertQuery($tableName,$user1,$password1,$email)
    {
        $statement=$this->pdo->prepare("insert into {$tableName}(username, PASSWORD, email, admin, banned) VALUES (?, ?, ?, ?, ?)");
        $statement->execute([$user1,$password1,$email,false,false]);

    }

    public function updateQueryName($tableName,$name,$userSession)
    {
        $statement=$this->pdo->prepare("UPDATE {$tableName} SET username=? WHERE username=?");
        $statement->execute([$name,$userSession]);
    }

    public function updateQueryEmail($tableName,$email,$userSession)
    {
        $statement=$this->pdo->prepare("UPDATE {$tableName} SET email=? WHERE username=?");
        $statement->execute([$email,$userSession]);
    }

    public function updateQueryPassword($tableName,$parola,$userSession)
    {
        $statement=$this->pdo->prepare("UPDATE {$tableName} SET PASSWORD=? WHERE username=?");
        $statement->execute([$parola,$userSession]);
    }

    public function updateQueryBanned($tableName,$banned,$userSession)
    {
        $statement=$this->pdo->prepare("UPDATE {$tableName} SET banned=? WHERE username=?");
        $statement->execute([$banned,$userSession]);
    }
}