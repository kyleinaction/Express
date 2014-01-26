<?php
namespace Express;

/**
 * Abstract operation performed on two expressions.
 * @package Express
 */ 
abstract class OperatorExpression implements ExpressionInterface {
	/**
	 * @var Express\ExpressionInterface
	 */
	protected $leftExpression = null;

	/**
	 * @var Express\ExpressionInterface
	 */
	protected $rightExpression = null;

	/**
	 * @param Express\ExpressionInterface $leftExpression 
	 * @param Express\ExpressionInterface $rightExpression
	 */
	public function __construct(ExpressionInterface $leftExpression, ExpressionInterface $rightExpression) {
		$this->leftExpression 	= $leftExpression;
		$this->rightExpression 	= $rightExpression;
	}

	/**
	 * Evaluates both sides of the expression and returns the
	 * evaluated result.
	 * @return bool
	 */
	public function evaluate() {
		$leftResult 	= $this->leftExpression->evaluate();
		$rightResult 	= $this->rightExpression->evaluate();
		return $this->doEvaluation($leftResult, $rightResult);
	}

	/**
	 * Abstract function which must evaluate both expression results and return
	 * a boolean result.
	 * @param mixed $leftResult 
	 * @param mixed $rightResult 
	 * @return bool
	 */
	abstract protected function doEvaluation($leftResult, $rightResult);
}