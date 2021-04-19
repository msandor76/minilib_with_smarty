<?php
/*require_once LIB_DIR."classes/db.class.php";
DB::$user = DB_USER;
DB::$password = DB_PASS;
DB::$dbName = DB_NAME;
DB::$encoding = DB_ENCODING;*/

require_once(APL_DIR."Classes".DIRECTORY_SEPARATOR."Test.php");

use foo as feline;

$tpl = "home";
$tesztObj = new feline\Test();
$felineSays = feline\Test::says();


$sql = "SELECT * FROM user";
$queryArr = DB::query($sql);

$smarty->assign("title","Lorem Ipsum");
$smarty->assign("felinesays",$felineSays);
$smarty->assign("queryArr",$queryArr);


/*
Example for Namespace:
-------------------------------

index.php:
-------------------

include "Html.php";
use Html as H;
$table = new H\Table();
$table->title = "My table";
$table->numRows = 5;

or:
 
use Html\Table as T;
$table = new T();

--------------------------

Html.php:
---------------

namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;

  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}

class Row {
  public $numCells = 0;
  public function message() {
    echo "<p>The row has {$this->numCells} cells.</p>";
  }
}


*/
?>
