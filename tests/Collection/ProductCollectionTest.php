<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jcleary
 * Date: 07/02/2013
 * Time: 15:03
 * To change this template use File | Settings | File Templates.
 */

require_once(__DIR__ . '/../../library/SprintSDK/App.php');
require_once(__DIR__ . '/../../library/SprintSDK/Product.php');
require_once(__DIR__ . '/../../library/SprintSDK/Request/Factory.php');
require_once(__DIR__ . '/../../library/SprintSDK/Collection/ProductCollection.php');

class ProductCollectionTest extends PHPUnit_Framework_TestCase
{


   private $mockRequest;


   public function setUp()
   {
      $this->mockRequest = $this->getMockBuilder('\SprintSDK\Request\RequestInterface')
         ->getMock();

      $mockFactory = $this->getMockBuilder('\SprintSDK\Request\Factory')
         ->getMock();

      $mockFactory
         ->expects(($this->any()))
         ->method('get')
         ->will($this->returnValue($this->mockRequest));

      \SprintSDK\App::set_resource('RequestFactory', $mockFactory);
   }


   public function testCanGetProductListFromFactory()
   {
      $list = SprintSDK\Product::get_list();

      $this->assertInstanceOf('SprintSDK\Collection\ProductCollection', $list);
   }

   public function testCanGetProductWithAppliedFilter()
   {
      $list = SprintSDK\Product::get_list()
         ->filter('size', 'XL');

      foreach($list as $item) {
         $this->assertEquals($item->size, 'XL');
      }

   }


}