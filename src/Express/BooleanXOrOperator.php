<?php
namespace Express;

/**
 * Represents an exclusive-OR operation.
 * @package default
 */
class BooleanXOrOperator Extends OperatorExpression {
	/**
	 * Returns TRUE if one of the results is ~TRUE, but not both.
	 * @param mixed $leftResult 
	 * @param mixed $rightResult 
	 * @return bool
	 */
	protected function doEvaluation($leftResult, $rightResult) {
		return $leftResult xor $rightResult;
	}
}