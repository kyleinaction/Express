<?php
namespace Express;

/**
 * Represent a literal value. Ex. "a string" or TRUE.
 * @package Express
 */
class LiteralExpression implements ExpressionInterface {
	/**
	 * @var mixed;
	 */
	protected $value = null;

	/**
	 * @param mixed $value
	 */
	public function __construct($value) {
		$this->value = $value;
	}

	/**
	 * {@inheritdoc}
	 */
	public function evaluate() {
		return $this->value;
	}
}