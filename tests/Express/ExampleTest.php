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

require_once dirname(__FILE__) . "/../../src/Express/BooleanGreaterThanOperator.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanGreaterThanOrEqualsOperator.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanLessThanOperator.php";
require_once dirname(__FILE__) . "/../../src/Express/BooleanLessThanOrEqualsOperator.php";
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

	/**
	 * if ($pizzaIsHot === TRUE && $hungerLevel >= 10 || !$sober)
	 */
	public function testWhenToEatPizza() {
		// Warm Pizza, Hungry and Not Drunk
		$trueLiteral 	= new Express\LiteralExpression(TRUE);
		$hungerNeeded 	= new Express\LiteralExpression(10);

		// Warm Pizza, Hungry but Not Drunk
		$pizzaIsHot 	= new Express\VariableExpression("pizzaIsHot", TRUE);
		$hungerLevel 	= new Express\VariableExpression("hungerLevel", 10);
		$sober  		= new Express\VariableExpression("sober", TRUE);

		$statement1 = new Express\BooleanOrOperator(
			new Express\BooleanAndOperator(
				new Express\BooleanStrictEqualsOperator($pizzaIsHot, $trueLiteral),
				new Express\BooleanGreaterThanOrEqualsOperator($hungerLevel, $hungerNeeded)
			),
			new Express\BooleanNotOperator($sober)
		);

		$this->assertTrue($statement1->evaluate());

		// Cold Pizza, Not Hungry, But Drunk
		$pizzaIsHot 	= new Express\VariableExpression("pizzaIsHot", FALSE);
		$hungerLevel 	= new Express\VariableExpression("hungerLevel", 0);
		$sober  		= new Express\VariableExpression("sober", FALSE);

		$statement2 = new Express\BooleanOrOperator(
			new Express\BooleanAndOperator(
				new Express\BooleanStrictEqualsOperator($pizzaIsHot, $trueLiteral),
				new Express\BooleanGreaterThanOrEqualsOperator($hungerLevel, $hungerNeeded)
			),
			new Express\BooleanNotOperator($sober)
		);

		$this->assertTrue($statement2->evaluate());

		// Warm Pizza, Not Hungry and Not Drunk
		$pizzaIsHot 	= new Express\VariableExpression("pizzaIsHot", TRUE);
		$hungerLevel 	= new Express\VariableExpression("hungerLevel", 2);
		$sober  		= new Express\VariableExpression("sober", TRUE);

		$statement3 = new Express\BooleanOrOperator(
			new Express\BooleanAndOperator(
				new Express\BooleanStrictEqualsOperator($pizzaIsHot, $trueLiteral),
				new Express\BooleanGreaterThanOrEqualsOperator($hungerLevel, $hungerNeeded)
			),
			new Express\BooleanNotOperator($sober)
		);

		$this->assertFalse($statement3->evaluate());
	}
}