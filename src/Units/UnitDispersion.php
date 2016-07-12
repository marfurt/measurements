<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitDispersion` class encapsulates units of measure for an amount-of-substance fraction.
 * You typically use instances of `UnitDispersion` to represent specific quantities of dispersion using the `Measurement` class.
 *
 * Dispersion describes the the amount of a constituent divided by the amount of all other constituents in a mixture.
 * Dispersion is a dimensionless quantity that is commonly expressed in “parts-per” notation, such as “parts per million” (ppm), to describe small relative quantities.

 * The base unit of `UnitDispersion` is defined as parts per million.
 */
class UnitDispersion extends Dimension {

	const SYMBOL_PARTS_PER_MILLION = "ppm";

	const COEFFICIENT_PARTS_PER_MILLION = 1.0;

	/**
	 * Returns the base dispersion unit, equal to parts per million.
	 *
	 * @return UnitDispersion The base dispersion unit.
	 */
	public static function baseUnit()
	{
		return self::partsPerMillion();
	}

	/**
	 * Returns the parts per million unit.
	 *
	 * @return UnitDispersion The parts per million unit.
	 */
	public static function partsPerMillion(): UnitDispersion
	{
		return new static(static::SYMBOL_PARTS_PER_MILLION, new UnitConverterLinear(static::COEFFICIENT_PARTS_PER_MILLION));
	}

}
