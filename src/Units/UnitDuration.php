<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * Duration is a quantity of time.
 * The SI unit for time and `UnitDuration` base unit is the second (sec). Duration is also commonly expressed in terms of minutes (min) and hours (hr).
 */
class UnitDuration extends Dimension {

	/**
	 * Returns the second unit of duration.
	 *
	 * @return UnitDuration The second unit of duration.
	 */
	public static function seconds(): UnitDuration
	{
		return new static("sec", new UnitConverterLinear(1));
	}

	/**
	 * Returns the minute unit of duration.
	 *
	 * @return UnitDuration The minute unit of duration.
	 */
	public static function minutes(): UnitDuration
	{
		return new static("min", new UnitConverterLinear(60));
	}

	/**
	 * Returns the hour unit of duration.
	 *
	 * @return UnitDuration The hour unit of duration.
	 */
	public static function hours(): UnitDuration
	{
		return new static("hr", new UnitConverterLinear(3600));
	}

	/**
	 * Returns the base unit of duration, equal to seconds.
	 *
	 * @return UnitDuration The the base unit of duration.
	 */
	public static function baseUnit()
	{
		return self::seconds();
	}

}
