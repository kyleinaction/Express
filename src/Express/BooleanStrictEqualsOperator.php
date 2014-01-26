<?php
namespace Express;

/**
 * Represents a strict EQUAL operation.
 * @package Express
 */
class BooleanStrictEqualsOperator extends OperatorExpression {
	/**
	 * Return TRUE if both results are the same type and equal
	 * each other.
	 * @param mixed $leftResult 
	 * @param mixed $rightResult 
	 * @return mixed
	 */
	protected function doEvaluation($leftResult, $rightResult) {
		return $leftResult === $rightResult;
	}
}