<?php
namespace Express;
/**
 * Represents a variable value. Ex. "myVar": "a string" or "myVar": TRUE.
 * @package Express
 */
class VariableExpression implements ExpressionInterface {
	/**
	 * @var string
	 */
	protected $name = "";

	/**
	 * @var value
	 */
	protected $value = null;

	/**
	 * @param string $name 
	 * @param mixed $value
	 */
	public function __construct($name, $value) {
		$this->name 	= $name;
		$this->value 	= $value;
	}

	/**
	 * Returns the variable name
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Returns the variables value.
	 * @return mixed
	 */
	public function evaluate() {
		return $this->value;
	}
}