<?php
namespace Express;

/**
 * Represents a NOT operation.
 * @package Express
 */
class BooleanNotOperator implements ExpressionInterface {
	/**
	 * @var Express\ExpressionInterface
	 */
	protected $expression = null;

	/**
	 * @param Express\ExpressionInterface $expression
	 */
	public function __construct(ExpressionInterface $expression) {
		$this->expression = $expression;
	}

	/**
	 * Returns the NOT equivalent of the expressions evaluated result.
	 * @return bool
	 */
	public function evaluate() {
		return !$this->expression->evaluate();
	}
}