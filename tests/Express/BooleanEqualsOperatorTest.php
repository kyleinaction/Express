<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/OperatorExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanEqualsOperator.php";

use Express;

/**
 * Tests the BooleanEqualsOperator class
 * @package ExpressTest
 */
class BooleanEqualsOperatorTest extends \PHPUnit_Framework_TestCase {
	/**
	 * Tests the BooleanEqualsOperator class
	 */
	public function testBooleanEquals() {
		// Create literal values
		$value1 	= new Express\LiteralExpression(1);
		$value2 	= new Express\LiteralExpression(1);
		$value3 	= new Express\LiteralExpression("1");
		$value4 	= new Express\LiteralExpression(2);
		$value5 	= new Express\LiteralExpression("2");

		// 1 and 1 are equal
		$statement1 = new Express\BooleanEqualsOperator($value1, $value2);
		$this->assertTrue($statement1->evaluate());

		// 1 and "1" are equal
		$statement2 = new Express\BooleanEqualsOperator($value1, $value3);
		$this->assertTrue($statement2->evaluate());

		// 1 and 2 are not equal
		$statement3 = new Express\BooleanEqualsOperator($value1, $value4);
		$this->assertFalse($statement3->evaluate());

		// 1 and "2" are not equal
		$statement4 = new Express\BooleanEqualsOperator($value1, $value5);
		$this->assertFalse($statement4->evaluate());

		// "1" and "2" are not equal
		$statement5 = new Express\BooleanEqualsOperator($value3, $value5);
		$this->assertFalse($statement5->evaluate());
	}
}