<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitArea` class encapsulates units of measure for area.
 * You typically use instances of `UnitArea` to represent specific quantities of area using the `Measurement` class.
 *
 * Area is a quantity of extent in two dimensions. Area can be expressed by SI derived units in terms of square meters (m2).
 * Area is also commonly measured in square feet (ft2) and acres (ac).
 *
 * The base unit of `UnitArea` is defined as square meters.
 */
class UnitArea extends Dimension {

	const SYMBOL_SQUARE_MEGAMETERS = "Mm²";
	const SYMBOL_SQUARE_KILOMETERS = "km²";
	const SYMBOL_SQUARE_METERS = "m²";
	const SYMBOL_SQUARE_CENTIMETERS = "cm²";
	const SYMBOL_SQUARE_MILLIMETERS = "mm²";
	const SYMBOL_SQUARE_MICROMETERS = "µm²";
	const SYMBOL_SQUARE_NANOMETERS = "nm²";
	const SYMBOL_SQUARE_INCHES = "in²";
	const SYMBOL_SQUARE_FEET = "ft²";
	const SYMBOL_SQUARE_YARDS = "yd²";
	const SYMBOL_SQUARE_MILES = "mi²";
	const SYMBOL_SQUARE_ACRES = "ac";
	const SYMBOL_SQUARE_ARES = "a";
	const SYMBOL_SQUARE_HECTARES = "ha";

	const COEFFICIENT_SQUARE_MEGAMETERS = 1E+12;
	const COEFFICIENT_SQUARE_KILOMETERS = 1E+6;
	const COEFFICIENT_SQUARE_METERS = 1.0;
	const COEFFICIENT_SQUARE_CENTIMETERS = 1E-4;
	const COEFFICIENT_SQUARE_MILLIMETERS = 1E-6;
	const COEFFICIENT_SQUARE_MICROMETERS = 1E-12;
	const COEFFICIENT_SQUARE_NANOMETERS = 1E-18;
	const COEFFICIENT_SQUARE_INCHES = 0.00064516;
	const COEFFICIENT_SQUARE_FEET = 0.092903;
	const COEFFICIENT_SQUARE_YARDS = 0.836127;
	const COEFFICIENT_SQUARE_MILES = 2.59E+6;
	const COEFFICIENT_SQUARE_ACRES = 4046.86;
	const COEFFICIENT_SQUARE_ARES = 100.0;
	const COEFFICIENT_SQUARE_HECTARES = 10000.0;

	/**
	 * Returns the base unit of area, equal to square meters.
	 *
	 * @return UnitArea The base unit of area.
	 */
	public static function baseUnit()
	{
		return self::squareMeters();
	}

	/**
	 * Returns the square megameters unit of area.
	 *
	 * @return UnitArea The square megameters unit of area.
	 */
	public static function squareMegameters(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_MEGAMETERS, new UnitConverterLinear(static::COEFFICIENT_SQUARE_MEGAMETERS));
	}

	/**
	 * Returns the square kilometers unit of area.
	 *
	 * @return UnitArea The square kilometers unit of area.
	 */
	public static function squareKilometers(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_KILOMETERS, new UnitConverterLinear(static::COEFFICIENT_SQUARE_KILOMETERS));
	}

	/**
	 * Returns the square meters unit of area.
	 *
	 * @return UnitArea The square meters unit of area.
	 */
	public static function squareMeters(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_METERS, new UnitConverterLinear(static::COEFFICIENT_SQUARE_METERS));
	}

	/**
	 * Returns the square centimeters unit of area.
	 *
	 * @return UnitArea The square centimeters unit of area.
	 */
	public static function squareCentimeters(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_CENTIMETERS, new UnitConverterLinear(static::COEFFICIENT_SQUARE_CENTIMETERS));
	}

	/**
	 * Returns the square millimeters unit of area.
	 *
	 * @return UnitArea The square millimeters unit of area.
	 */
	public static function squareMillimeters(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_MILLIMETERS, new UnitConverterLinear(static::COEFFICIENT_SQUARE_MILLIMETERS));
	}

	/**
	 * Returns the square micrometers unit of area.
	 *
	 * @return UnitArea The square micrometers unit of area.
	 */
	public static function squareMicrometers(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_MICROMETERS, new UnitConverterLinear(static::COEFFICIENT_SQUARE_MICROMETERS));
	}

	/**
	 * Returns the square nanometers unit of area.
	 *
	 * @return UnitArea The square nanometers unit of area.
	 */
	public static function squareNanometers(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_NANOMETERS, new UnitConverterLinear(static::COEFFICIENT_SQUARE_NANOMETERS));
	}

	/**
	 * Returns the square inches unit of area.
	 *
	 * @return UnitArea The square inches unit of area.
	 */
	public static function squareInches(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_INCHES, new UnitConverterLinear(static::COEFFICIENT_SQUARE_INCHES));
	}

	/**
	 * Returns the square feet unit of area.
	 *
	 * @return UnitArea The square feet unit of area.
	 */
	public static function squareFeet(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_FEET, new UnitConverterLinear(static::COEFFICIENT_SQUARE_FEET));
	}

	/**
	 * Returns the square yards unit of area.
	 *
	 * @return UnitArea The square yards unit of area.
	 */
	public static function squareYards(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_YARDS, new UnitConverterLinear(static::COEFFICIENT_SQUARE_YARDS));
	}

	/**
	 * Returns the square miles unit of area.
	 *
	 * @return UnitArea The square miles unit of area.
	 */
	public static function squareMiles(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_MILES, new UnitConverterLinear(static::COEFFICIENT_SQUARE_MILES));
	}

	/**
	 * Returns the acres unit of area.
	 *
	 * @return UnitArea The acres unit of area.
	 */
	public static function acres(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_ACRES, new UnitConverterLinear(static::COEFFICIENT_SQUARE_ACRES));
	}

	/**
	 * Returns the ares unit of area.
	 *
	 * @return UnitArea The ares unit of area.
	 */
	public static function ares(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_ARES, new UnitConverterLinear(static::COEFFICIENT_SQUARE_ARES));
	}

	/**
	 * Returns the hectares unit of area.
	 *
	 * @return UnitArea The hectares unit of area.
	 */
	public static function hectares(): UnitArea
	{
		return new static(static::SYMBOL_SQUARE_HECTARES, new UnitConverterLinear(static::COEFFICIENT_SQUARE_HECTARES));
	}

}
