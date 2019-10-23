<?php namespace Measurements\Quantities;

use Measurements\Unit;
use Measurements\Measurement;
use Measurements\Units\UnitArea;
use Measurements\Units\UnitLength;
use Measurements\Exceptions\UnitException;

/**
 * The `Area` class represents a specific quantities of area.
 *
 * @method static Area squareMegameters(float $value)
 * @method static Area squareKilometers(float $value)
 * @method static Area squareMeters(float $value)
 * @method static Area squareCentimeters(float $value)
 * @method static Area squareMillimeters(float $value)
 * @method static Area squareMicrometers(float $value)
 * @method static Area squareNanometers(float $value)
 * @method static Area squareInches(float $value)
 * @method static Area squareFeet(float $value)
 * @method static Area squareYards(float $value)
 * @method static Area squareMiles(float $value)
 * @method static Area acres(float $value)
 * @method static Area ares(float $value)
 * @method static Area hectares(float $value)
 */
class Area extends Measurement {

	/**
	 * Initializes a new speed with a specified floating-point value and unit.
	 *
	 * @param double $value The measurement value.
	 * @param Unit   $unit  The unit of measure.
	 *
	 * @throws \Measurements\Exceptions\UnitException
	 */
	public function __construct($value, Unit $unit)
	{
		if (!$unit instanceof UnitArea) {
			throw new UnitException("Attempt to create an area measurement from an invalid unit [$unit]!");
		}

		parent::__construct($value, $unit);
	}

	/**
	 * Returns the area measurement computed from the specified length.
	 *
	 * @param Length $length A length.
	 *
	 * @return \Measurements\Quantities\Area The area that corresponds to the given length.
	 */
	public static function fromEquivalentLengths(Length $length)
	{
		return static::fromLengthAndWidth($length, $length);
	}

	/**
	 * Returns the area measurement computed from the specified length and width.
	 *
	 * @param Length $length A length.
	 * @param Length $width  A width.
	 *
	 * @return \Measurements\Quantities\Area The area that corresponds to the given length and width.
	 */
	public static function fromLengthAndWidth(Length $length, Length $width)
	{
		$length = $length->convertTo(UnitLength::meters());
		$width = $width->convertTo(UnitLength::meters());

		$area = $length->value() * $width->value();

		return new static($area, UnitArea::squareMeters());
	}

}
