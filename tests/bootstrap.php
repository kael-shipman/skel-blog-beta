<?php

$path = '.';

require_once $path.'/vendor/autoload.php';


class Db extends \Skel\Db implements \Skel\Interfaces\AppDb {
  protected function downgradeDatabase(int $from, int $to) {
  }

  protected function upgradeDatabase(int $from, int $to) {
  }

  public function getTemplate(string $name) {
    return new StringTemplate('',false);
  }
}

class Config extends \Skel\Config implements \Skel\Interfaces\AppConfig, \Skel\Interfaces\DbConfig {
  function getContextRoot() { return $this->get('context-root'); }
  function getPublicRoot() { return $this->get('public-root'); }
  function getDbPdo() { return $this->get('db-pdo'); }
  function getDbContentRoot() { return $this->get('db-content-root'); }
}

class App extends \Skel\App {
  protected $cms;

  public function setCms(\Skel\Interfaces\Cms $cms) {
    $this->cms = $cms;
    return $this;
  }
}


?>
