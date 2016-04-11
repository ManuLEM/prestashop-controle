<?php
  define('DEBUG', false);
  define('PS_SHOP_PATH', 'http://localhost/prestashop_controle');
  define('PS_WS_AUTH_KEY', 'DWC9UFHE76KZYNRRB66NS8QGU8LU6SQU');
  require_once('./PSWebServiceLibrary.php');

  try {
      $webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);
  }
  catch (PrestaShopWebserviceException $ex) {
      // Shows a message related to the error
      echo 'Other error: <br />' . $ex->getMessage();
  }

  $opt['resource'] = 'products';

  $obj = $webService->get($opt);
  $resources = $obj->children()->children();
  $products = [];
  foreach ($resources as $res) {
    $opt['id'] = $res->attributes()->id;
    $products.array_push($webService->get($opt)->children()->children());
  }

  var_dump($products);