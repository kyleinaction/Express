<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/OperatorExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanGreaterThanOrEqualsOperator.php";

use Express;

/**
 * Tests the BooleanOrOperator class
 * @package ExpressTest
 */
class BooleanGreaterThanOrEqualsOperatorTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Tests the BooleanGreaterThanOrEqualsOperator class
	 */
	public function testGreaterThanOrEqualsOperator() {
		$value1 = new Express\LiteralExpression(0);
		$value2 = new Express\LiteralExpression(1);
		$value3	= new Express\LiteralExpression(2);
		$value4 = new Express\LiteralExpression(2);

		// 0 >= 1 = FALSE
		$statement1 = new Express\BooleanGreaterThanOrEqualsOperator($value1, $value2);
		$this->assertFalse($statement1->evaluate());

		// 2 >= 1 = TRUE
		$statement2 = new Express\BooleanGreaterThanOrEqualsOperator($value3, $value2);
		$this->assertTrue($statement2->evaluate());

		// 2 >= 2 = TRUE
		$statement3 = new Express\BooleanGreaterThanOrEqualsOperator($value3, $value4);
		$this->assertTrue($statement3->evaluate());
	}
}