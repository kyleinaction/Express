<?php
namespace Express;

/**
 * Represents a GREATER THAN OR EQUAL operation.
 * @package Express
 */
class BooleanGreaterThanOrEqualsOperator extends OperatorExpression {
	/**
	 * Returns TRUE if the left result is greater than, or equal, to the right result.
	 * @param mixed $leftResult 
	 * @param mixed $rightResult 
	 * @return bool
	 */
	protected function doEvaluation($leftResult, $rightResult) {
		return $leftResult >= $rightResult;
	}
}