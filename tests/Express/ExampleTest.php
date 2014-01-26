<?php
namespace ExpressTest;

require_once dirname(__FILE__) . "/../../src/Express/ExpressionInterface.php";

require_once dirname(__FILE__) . "/../../src/Express/LiteralExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/VariableExpression.php";

require_once dirname(__FILE__) . "/../../src/Express/OperatorExpression.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanAndOperator.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanOrOperator.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanXOrOperator.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanEqualsOperator.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanStrictEqualsOperator.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanNotOperator.php";

require_once dirname(__FILE__) . "/../../src/Express/BooleanGreaterThanOrEqualsOperator.php";

use Express;

/**
 * Example Test Class
 * @package ExpressTest
 */
class ExampleTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Basic Example
	 */
	public function testExample1() {
		$trueLiteral 		= new Express\LiteralExpression(TRUE);
		$isAuthedVariable 	= new Express\VariableExpression("isAuthed", TRUE);

		$xpLevel 			= new Express\VariableExpression("xp", 11);
		$xpNeeded 			= new Express\LiteralExpression(12);

		$statement = new Express\BooleanAndOperator(
			new Express\BooleanEqualsOperator($isAuthedVariable, $trueLiteral),
			new Express\BooleanGreaterThanOrEqualsOperator($xpLevel, $xpNeeded)
		);

		$this->assertFalse($statement->evaluate());
	}
}