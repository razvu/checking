<?php
declare(strict_types=1);
include "1.php";
use PHPUnit\Framework\TestCase;
final class EmailTest extends TestCase
{
public function testAdd()
{

	$this->assertEquals(5, add(2,3));
	#return 42;
}
public function testAdd2()
{

	$this->assertEquals(4, add(2,3));
	#return 42;
}

}

?>
