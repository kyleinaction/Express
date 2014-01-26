<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/OperatorExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanLessThanOperator.php";

use Express;

/**
 * Tests the BooleanOrOperator class
 * @package ExpressTest
 */
class BooleanLessThanOperatorTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Tests the BooleanLessThanOperator class
	 */
	public function testLessThanOperator() {
		$value1 = new Express\LiteralExpression(0);
		$value2 = new Express\LiteralExpression(1);
		$value3	= new Express\LiteralExpression(2);
		$value4 = new Express\LiteralExpression(2);

		// 1 < 0 = FALSE
		$statement1 = new Express\BooleanLessThanOperator($value2, $value1);
		$this->assertFalse($statement1->evaluate());

		// 1 < 2 = TRUE
		$statement2 = new Express\BooleanLEssThanOperator($value2, $value3);
		$this->assertTrue($statement2->evaluate());

		// 2 < 2 = FALSE
		$statement3 = new Express\BooleanLessThanOperator($value3, $value4);
		$this->assertFalse($statement3->evaluate());
	}
}