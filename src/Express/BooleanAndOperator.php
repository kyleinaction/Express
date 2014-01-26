<?php
namespace Express;

/**
 * Represents a boolean AND operation.
 * @package Express
 */
class BooleanAndOperator extends OperatorExpression {
	/**
	 * Evaluates the result of two expressions and returns
 	 * TRUE if they both evaluate to ~TRUE.
	 * @param mixed $leftResult 
	 * @param mixed $rightResult 
	 * @return bool
	 */
	protected function doEvaluation($leftResult, $rightResult) {
		return $leftResult && $rightResult;
	}
}