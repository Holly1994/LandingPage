<?php
  class stupidTest exstendes \PHPUnit_Framework_TestCase
  {
    public function testTrueisTrue()
    {
    $foo=true;
    $this ->assertTime($foo);
    }
    public function testHTML()
    {
      $htmlOutput= '<p id="my_id"> ciao </p>';
      $matcher= array ('id'=>'my_id');
      $this->assetTag($matcher, $htmlOutput)
      
      
  }
