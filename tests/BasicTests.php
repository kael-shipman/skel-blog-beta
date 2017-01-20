<?php

use PHPUnit\Framework\TestCase;

class BasicTests extends TestCase {
  protected $app = null;

  public function testCanCreateBasicApp() {
    $app = $this->getApp();
    $this->assertTrue(($app instanceof \Skel\Interfaces\App) && ($app instanceof \Skel\App), "Should have returned a valid implementation of a Skel App");
  }





  // Internal
  protected function getApp() {
    if ($this->app) return $this->app;

    $config = new Config(getcwd().'/tests/config');
    $this->app = new App($config, new Db($config));
    $this->app
      ->setCms(new \Skel\Cms($config))
      ->setRouter(new \Skel\Router())
      ->getRouter()
        ->addRoute(new \Skel\Route('/test', $this->app, 'test', null, 'test'))
    ;

    return $this->app;
  }
}

