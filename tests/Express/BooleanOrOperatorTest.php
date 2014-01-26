<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/OperatorExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanOrOperator.php";

use Express;

/**
 * Tests the BooleanOrOperator class
 * @package ExpressTest
 */
class BooleanOrOperatorTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Tests the BooleanOrOperator class
	 */
	public function testBooleanOr() {
		$value1 = new Express\LiteralExpression(TRUE);
		$value2 = new Express\LiteralExpression(TRUE);
		$value3 = new Express\LiteralExpression(FALSE);
		$value4 = new Express\LiteralExpression(FALSE);

		// TRUE or TRUE = TRUE
		$statement1 = new Express\BooleanOrOperator($value1, $value2);
		$this->assertTrue($statement1->evaluate());

		// TRUE or FALSE = TRUE
		$statement2 = new Express\BooleanOrOperator($value1, $value3);
		$this->assertTrue($statement2->evaluate());

		// FALSE OR FALSE = FALSE
		$statement3 = new Express\BooleanOrOperator($value3, $value4);
		$this->assertFalse($statement3->evaluate());
	}
}