<?php
namespace Express;

/**
 * An expression is any object or collection of objects 
 * which can be evaluated.
 * @package Express
 */
interface ExpressionInterface {
	/**
	 * Evaluates the expression and returns the evaluated
	 * result.
	 * @return mixed
	 */
	public function evaluate();
}