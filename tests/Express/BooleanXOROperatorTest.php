<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/OperatorExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanXOrOperator.php";

use Express;

/**
 * Tests the LiteralExpression class
 * @package ExpressTest
 */
class BooleanXOrOperatorTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Tests the BooleanXOrOperator class
	 */
	public function testBooleanXOr() {
		$value1 = new Express\LiteralExpression(TRUE);
		$value2 = new Express\LiteralExpression(TRUE);
		$value3 = new Express\LiteralExpression(FALSE);
		$value4 = new Express\LiteralExpression(FALSE);

		// TRUE xor TRUE = FALSE
		$statement1 = new Express\BooleanXOrOperator($value1, $value2);
		$this->assertFalse($statement1->evaluate());

		// TRUE xor FALSE = TRUE
		$statement2 = new Express\BooleanXOrOperator($value1, $value3);
		$this->assertTrue($statement2->evaluate());

		// FALSE xor FALSE = FALSE
		$statement3 = new Express\BooleanXOrOperator($value3, $value4);
		$this->assertFalse($statement3->evaluate());
	}
}