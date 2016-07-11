<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitIlluminance` class encapsulates units of measure for illuminance.
 * You typically use instances of `UnitIlluminance` to represent specific quantities of illuminance using the `Measurement` class.
 *
 * Illuminance is the luminous flux incident on a surface.
 * The SI unit for illuminance is the lux (lx), which is derived as one lumen per square meter (1lm / 1m2).
 *
 * The base unit of `UnitIlluminance` is defined as lux.
 */
class UnitIlluminance extends Dimension {

	/**
	 * Returns the base unit of illuminance.
	 *
	 * @return UnitIlluminance The base unit of illuminance.
	 */
	public static function baseUnit()
	{
		return self::lux();
	}

	/**
	 * Returns the lux unit of illuminance.
	 *
	 * @return UnitIlluminance The lux unit of illuminance.
	 */
	public static function lux(): UnitIlluminance
	{
		return new static("lx", new UnitConverterLinear(1.0));
	}

}
