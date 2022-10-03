<?php

namespace App\Support;

use Brick\Money\Money;

class RideCalculator
{
	public function __construct(
		protected int $passengers,
	) {
	}
	
	public function costByBus(): Money
	{
		return Money::ofMinor($this->passengers * 325, 'USD');
	}
}
