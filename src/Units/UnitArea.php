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
		return new static("Mm²", new UnitConverterLinear(1E+12));
	}

	/**
	 * Returns the square kilometers unit of area.
	 *
	 * @return UnitArea The square kilometers unit of area.
	 */
	public static function squareKilometers(): UnitArea
	{
		return new static("km²", new UnitConverterLinear(1000000.0));
	}

	/**
	 * Returns the square meters unit of area.
	 *
	 * @return UnitArea The square meters unit of area.
	 */
	public static function squareMeters(): UnitArea
	{
		return new static("m²", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the square centimeters unit of area.
	 *
	 * @return UnitArea The square centimeters unit of area.
	 */
	public static function squareCentimeters(): UnitArea
	{
		return new static("cm²", new UnitConverterLinear(0.0001));
	}

	/**
	 * Returns the square millimeters unit of area.
	 *
	 * @return UnitArea The square millimeters unit of area.
	 */
	public static function squareMillimeters(): UnitArea
	{
		return new static("mm²", new UnitConverterLinear(0.000001));
	}

	/**
	 * Returns the square micrometers unit of area.
	 *
	 * @return UnitArea The square micrometers unit of area.
	 */
	public static function squareMicrometers(): UnitArea
	{
		return new static("µm²", new UnitConverterLinear(1E-12));
	}

	/**
	 * Returns the square nanometers unit of area.
	 *
	 * @return UnitArea The square nanometers unit of area.
	 */
	public static function squareNanometers(): UnitArea
	{
		return new static("nm²", new UnitConverterLinear(1E-18));
	}

	/**
	 * Returns the square inches unit of area.
	 *
	 * @return UnitArea The square inches unit of area.
	 */
	public static function squareInches(): UnitArea
	{
		return new static("in²", new UnitConverterLinear(0.00064516));
	}

	/**
	 * Returns the square feet unit of area.
	 *
	 * @return UnitArea The square feet unit of area.
	 */
	public static function squareFeet(): UnitArea
	{
		return new static("ft²", new UnitConverterLinear(0.092903));
	}

	/**
	 * Returns the square yards unit of area.
	 *
	 * @return UnitArea The square yards unit of area.
	 */
	public static function squareYards(): UnitArea
	{
		return new static("yd²", new UnitConverterLinear(0.836127));
	}

	/**
	 * Returns the square miles unit of area.
	 *
	 * @return UnitArea The square miles unit of area.
	 */
	public static function squareMiles(): UnitArea
	{
		return new static("mi²", new UnitConverterLinear(2.59E+6));
	}

	/**
	 * Returns the acres unit of area.
	 *
	 * @return UnitArea The acres unit of area.
	 */
	public static function acres(): UnitArea
	{
		return new static("ac", new UnitConverterLinear(4046.86));
	}

	/**
	 * Returns the ares unit of area.
	 *
	 * @return UnitArea The ares unit of area.
	 */
	public static function ares(): UnitArea
	{
		return new static("a", new UnitConverterLinear(100));
	}

	/**
	 * Returns the hectares unit of area.
	 *
	 * @return UnitArea The hectares unit of area.
	 */
	public static function hectares(): UnitArea
	{
		return new static("ha", new UnitConverterLinear(10000));
	}

}
