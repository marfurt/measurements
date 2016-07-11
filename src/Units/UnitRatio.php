<?php namespace Measurements\Units;

use Measurements\Unit;

/**
 * The `UnitRatio` class is a dimension-less unit that represents a ratio.
 */
class UnitRatio extends Unit {

	/**
	 * Returns a ratio in percent.
	 *
	 * @return UnitRatio The ratio in percent.
	 */
	public static function percent(): UnitRatio
	{
		return new static("%");
	}

}
