<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/OperatorExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanLessThanOrEqualsOperator.php";

use Express;

/**
 * Tests the BooleanOrOperator class
 * @package ExpressTest
 */
class BooleanLessThanOrEqualsOperatorTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Tests the BooleanLessThanOrEqualsOperator class
	 */
	public function testLessThanOrEqualsOperator() {
		$value1 = new Express\LiteralExpression(0);
		$value2 = new Express\LiteralExpression(1);
		$value3	= new Express\LiteralExpression(2);
		$value4 = new Express\LiteralExpression(2);

		// 0 <= 1 = TRUE
		$statement1 = new Express\BooleanLessThanOrEqualsOperator($value1, $value2);
		$this->assertTrue($statement1->evaluate());

		// 2 <= 1 = FALSE
		$statement2 = new Express\BooleanLessThanOrEqualsOperator($value3, $value2);
		$this->assertFalse($statement2->evaluate());

		// 2 <= 2 = TRUE
		$statement3 = new Express\BooleanLessThanOrEqualsOperator($value3, $value4);
		$this->assertTrue($statement3->evaluate());
	}
}