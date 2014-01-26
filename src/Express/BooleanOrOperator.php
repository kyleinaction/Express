<?php
namespace Express;

/**
 * Represents a boolean OR operation.
 * @package Express
 */
class BooleanOrOperator extends OperatorExpression {
	/**
	 * Evaluates the results and returns TRUE if either
	 * evaluates to ~TRUE.
	 * @param mixed $leftResult 
	 * @param mixed $rightResult 
	 * @return type
	 */
	protected function doEvaluation($leftResult, $rightResult) {
		return $leftResult || $rightResult;
	}
}