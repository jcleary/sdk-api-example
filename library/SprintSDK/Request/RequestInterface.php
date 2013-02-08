<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jcleary
 * Date: 08/02/2013
 * Time: 09:03
 * To change this template use File | Settings | File Templates.
 */


namespace SprintSDK\Request;

interface RequestInterface
{

   /**
    * talks to the end point to get the data
    */
   public function fetch();



}