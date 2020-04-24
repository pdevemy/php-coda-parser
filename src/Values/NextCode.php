<?php

namespace Codelicious\Coda\Values;

use function Codelicious\Coda\Helpers\validateStringLength;

class NextCode
{
	/** @var string */
	private $value;
	
	public function __construct(string $value)
	{
	    validateStringLength($value, 1, "NextCode");
		
		$this->value = $value;
	}
	
	public function getValue(): string
	{
		return $this->value;
	}
}