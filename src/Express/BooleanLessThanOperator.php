<?php
namespace Express;

/**
 * Represents a GREATER THAN OR EQUAL operation.
 * @package Express
 */
class BooleanLessThanOperator extends OperatorExpression {
	/**
	 * Returns TRUE if the left result is less than the right result.
	 * @param mixed $leftResult 
	 * @param mixed $rightResult 
	 * @return bool
	 */
	protected function doEvaluation($leftResult, $rightResult) {
		return $leftResult < $rightResult;
	}
}