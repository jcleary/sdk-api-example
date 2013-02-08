<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jcleary
 * Date: 07/02/2013
 * Time: 14:53
 * To change this template use File | Settings | File Templates.
 */

namespace SprintSDK;

class App
{
   private $resources = array();

   private static $instance = null;


   private function __construct()
   {
      // just private
   }

   public function get_instance()
   {
      if (self::$instance === null) {
         self::$instance = new App();
      }
      return self::$instance;
   }

   public function set_resource($name, $resource)
   {
      self::get_instance()->resources[$name] = $resource;
   }

   public function get_resource($name)
   {
      return self::get_instance()->resources[$name];
   }



}