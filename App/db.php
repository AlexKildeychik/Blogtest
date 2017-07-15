<?php


namespace App;
use \App\Config;

class db
{
      private $dbh;
      public function __construct()
      {
          $instantConnect = Config::instance();
          $this->dbh = new \PDO(
              $this->setDbDsn(),
              $instantConnect->data['db']['user'],
              $instantConnect->data['db']['pass']
          );
      }
    public function setDbDsn()
    {
        $instantConnect = Config::instance();
        $driver = $instantConnect->data['driver'];
        $host = $instantConnect->data['db']['host'];
        $name = $instantConnect->data['db']['name'];
        return $driver . ':host=' . $host . ';dbname=' . $name;
    }
      //Выполнить любой sql запрос(подготовленный statement, результат true false)
      public function execute($sql, $params=[])
      {
          $sth = $this->dbh->prepare($sql);
          return $sth->execute($params);
      }
      //Возвращают данные
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