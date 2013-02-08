<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jcleary
 * Date: 07/02/2013
 * Time: 14:52
 * To change this template use File | Settings | File Templates.
 */


namespace SprintSDK\Request;


class Factory
{
   /**
    * Returns an object conforming to RequestInterface, the type
    * of which is dependant on configuration
    *
    * @return RestInterface
    */
   public function get()
   {
      return new Rest();
   }


}