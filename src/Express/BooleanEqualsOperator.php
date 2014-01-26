<?php
namespace Express;

/**
 * Represents an EQUAL operation.
 * @package Express
 */
class BooleanEqualsOperator extends OperatorExpression {
	/**
	 * Returns TRUE if both results are ~=.
	 * @param mixed $leftResult 
	 * @param mixed $rightResult 
	 * @return bool
	 */
	protected function doEvaluation($leftResult, $rightResult) {
		return $leftResult == $rightResult;
	}
}