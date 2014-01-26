<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/OperatorExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanStrictEqualsOperator.php";

use Express;

/**
 * Tests the LiteralExpression class
 * @package ExpressTest
 */
class BooleanStrictEqualsOperatorTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Tests the BooleanStrictEquals class
	 */
	public function testBooleanStrictEquals() {
		// Create literal values
		$value1 	= new Express\LiteralExpression(1);
		$value2 	= new Express\LiteralExpression(1);
		$value3 	= new Express\LiteralExpression("1");
		$value4 	= new Express\LiteralExpression(2);
		$value5 	= new Express\LiteralExpression("2");
		$value6     = new Express\LiteralExpression("1");

		// 1 and 1 are strictly equal
		$statement1 = new Express\BooleanStrictEqualsOperator($value1, $value2);
		$this->assertTrue($statement1->evaluate());

		// 1 and "1" are not strictly equal
		$statement2 = new Express\BooleanStrictEqualsOperator($value1, $value3);
		$this->assertFalse($statement2->evaluate());

		// 1 and 2 are not strictly equal
		$statement3 = new Express\BooleanStrictEqualsOperator($value1, $value4);
		$this->assertFalse($statement3->evaluate());

		// 1 and "2" are not strictly equal
		$statement4 = new Express\BooleanStrictEqualsOperator($value1, $value5);
		$this->assertFalse($statement4->evaluate());

		// "1" and "2" are not strictly equal
		$statement5 = new Express\BooleanStrictEqualsOperator($value3, $value5);
		$this->assertFalse($statement5->evaluate());

		// "1" and "1" are strictly equal
		$statement5 = new Express\BooleanStrictEqualsOperator($value3, $value6);
		$this->assertTrue($statement5->evaluate());
	}
}