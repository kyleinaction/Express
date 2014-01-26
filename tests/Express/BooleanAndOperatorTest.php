<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/OperatorExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanAndOperator.php";

use Express;

/**
 * Tests the BooleanAndOperator class
 * @package ExpressTest
 */
class BooleanAndOperatorTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Tests the BooleanAndOperator class
	 */
	public function testBooleanAnd() {
		$value1 = new Express\LiteralExpression(TRUE);
		$value2 = new Express\LiteralExpression(TRUE);
		$value3 = new Express\LiteralExpression(FALSE);
		$value4 = new Express\LiteralExpression(FALSE);

		// TRUE and TRUE = TRUE
		$statement1 = new Express\BooleanAndOperator($value1, $value2);
		$this->assertTrue($statement1->evaluate());

		// TRUE and FALSE = FALSE
		$statement2 = new Express\BooleanAndOperator($value1, $value3);
		$this->assertFalse($statement2->evaluate());

		// FALSE and FALSE = FALSE
		$statement3 = new Express\BooleanAndOperator($value3, $value4);
		$this->assertFalse($statement3->evaluate());
	}
}