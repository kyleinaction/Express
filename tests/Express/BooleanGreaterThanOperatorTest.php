<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/OperatorExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanGreaterThanOperator.php";

use Express;

/**
 * Tests the BooleanOrOperator class
 * @package ExpressTest
 */
class BooleanGreaterThanOperatorTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Tests the BooleanGreaterThanOperator class
	 */
	public function testGreaterThanOperator() {
		$value1 = new Express\LiteralExpression(0);
		$value2 = new Express\LiteralExpression(1);
		$value3	= new Express\LiteralExpression(2);
		$value4 = new Express\LiteralExpression(2);

		// 0 > 1 = FALSE
		$statement1 = new Express\BooleanGreaterThanOperator($value1, $value2);
		$this->assertFalse($statement1->evaluate());

		// 2 > 1 = TRUE
		$statement2 = new Express\BooleanGreaterThanOperator($value3, $value2);
		$this->assertTrue($statement2->evaluate());

		// 2 > 2 = FALSE
		$statement3 = new Express\BooleanGreaterThanOperator($value3, $value4);
		$this->assertFalse($statement3->evaluate());
	}
}