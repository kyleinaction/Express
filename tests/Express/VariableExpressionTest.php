<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/VariableExpression.php";

use Express;

/**
 * Tests the Variable Expression class
 * @package ExpressTest
 */
class VariableExpressionTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Tests the VariableExpression class
	 */
	public function testVariableExpression() {
		$variable 	= new Express\VariableExpression("myVar", true);
		$this->assertTrue($variable->evaluate(), "Express\VariableExpression::evaluate() does not return the correct variable value.");
		$this->assertEquals($variable->getName(), "myVar", "Express\VariableExpression::getName() does not return the correct variable name.");
	}
}