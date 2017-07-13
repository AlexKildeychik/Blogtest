<?php


namespace App;


class db
{
      protected $dbh;
      public function __construct()
      {
          $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
      }

      public function execute($sql, $params=[])
      {
          $sth = $this->dbh->prepare($sql);
          return $sth->execute($params);
      }

      public function query($sql, $class = stdClass::class, $params=[])
      {
          $sth = $this->dbh->prepare($sql);
          $res = $sth->execute($params);
          if (true === $res) {
              return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
          }
          return false;
      }
}