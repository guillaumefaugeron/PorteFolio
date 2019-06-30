<?php


class MysqlConnection
{
    private $pdoConnection;
    private $stmt;

    public function __construct(string $username, string $password, string $database = 'cv')
    {
        $this->pdoConnection = new PDO('mysql:host=127.0.0.1;dbname='.$database, $username, $password);

        $this->pdoConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    public function select(string $sql) : array
    {
        $this->stmt = $this->pdoConnection->prepare($sql);
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function insert(string $table, $data)
    {
        $sql = sprintf('INSERT INTO %s(%s) VALUES ("%s");',
            $table,
            implode(', ', array_keys($data)),
            implode('", "', $data)
        );
        var_dump($sql);
        $this->stmt = $this->pdoConnection->prepare($sql);
        $this->stmt->execute();
   }
    public function delete(string $table)
    {
        $this->stmt = $this->pdoConnection->prepare("DELETE FROM $table WHERE id=".$_GET['delete_id'].";");
        $this->stmt->execute();
    }
}

