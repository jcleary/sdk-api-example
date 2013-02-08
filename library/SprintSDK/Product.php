<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jcleary
 * Date: 07/02/2013
 * Time: 14:51
 * To change this template use File | Settings | File Templates.
 */

namespace SprintSDK;


class Product
{

   static public function get_list()
   {
      $request = App::get_resource('RequestFactory')->get();


      return new Collection\ProductCollection($request);

   }

}