<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";
require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";

use Express;

/**
 * Tests the LiteralExpression class
 * @package ExpressTest
 */
class LiteralExpressionTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Tests the LiteralExpression class
	 */
	public function testLiteralExpression() {
		$variable = new Express\LiteralExpression(true);
		$this->assertTrue($variable->evaluate(), "Express\LiteralExpression::evaluate() does not return the correct literal value.");
	}
}