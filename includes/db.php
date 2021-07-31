<?php

class Twitter_PDO
{
    public $pdo;

    public function __construct($host, $user, $pass, $dbname="Twitter")
    {
        //Connection
        $dsn = "mysql:dbname=$dbname;host=$host";
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo = $pdo;
    }

    public function get_tweets()
    {
        //Query to the Db
        $select = "SELECT * FROM tweets";
        $stmt = $this->pdo->prepare($select);
        $response = $stmt->execute();

        //Fetch the results
        $res = $stmt->fetchAll();

        // return!
        return $res;
    }

    public function insert_tweet($tweet)
    {
        $sql = "INSERT INTO tweets (tweet) VALUES (:tweet)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':tweet' => $tweet]);
    }
}
