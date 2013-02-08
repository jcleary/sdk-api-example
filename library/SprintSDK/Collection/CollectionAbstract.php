<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jcleary
 * Date: 07/02/2013
 * Time: 14:46
 * To change this template use File | Settings | File Templates.
 */

namespace SprintSDK\Collection;

class CollectionAbstract implements \Iterator
{

   protected $request;


   public function __construct(\SprintSDK\Request\RequestInterface $request)
   {
      $this->request = $request;
   }

   public function current() {}

   public function key() {}

   public function next() {}

   public function rewind() {}

   public function valid() {}




   public function filter($field, $value)
   {
      // do stuff
      return $this;
   }


}