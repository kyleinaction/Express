<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanNotOperator.php";

use Express;

/**
 * Tests the BooleanNotOperator class
 * @package ExpressTest
 */
class BooleanNotOperatorTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Tests the BooleanNotOperator class
	 */
	public function testBooleanNot() {
		$value1 	= new Express\LiteralExpression(TRUE);
		$value2 	= new Express\LiteralExpression(FALSE);

		$statement1 = new Express\BooleanNotOperator($value1);
		$this->assertFalse($statement1->evaluate());

		$statement2 = new Express\BooleanNotOperator($value2);
		$this->assertTrue($statement2->evaluate());
	}
}