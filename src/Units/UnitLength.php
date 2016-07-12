<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitLength` class encapsulates units of measure for length.
 * You typically use instances of `UnitLength` to represent specific quantities of length using the `Measurement` class.
 *
 * Length is the dimensional extent of matter.
 * The SI unit for length is the meter (m), which is defined in terms of the distance traveled by light in a vacuum.
 * 
 * The base unit of `UnitLength` is defined as meters.
 */
class UnitLength extends Dimension {

	const SYMBOL_MEGAMETERS = "Mm";
	const SYMBOL_KILOMETERS = "km";
	const SYMBOL_HECTOMETERS = "hm";
	const SYMBOL_DECAMETERS = "dam";
	const SYMBOL_METERS = "m";
	const SYMBOL_DECIMETERS = "dm";
	const SYMBOL_CENTIMETERS = "cm";
	const SYMBOL_MILLIMETERS = "mm";
	const SYMBOL_MICROMETERS = "µm";
	const SYMBOL_NANOMETERS = "nm";
	const SYMBOL_PICOMETERS = "pm";
	const SYMBOL_INCHES = "in";
	const SYMBOL_FEET = "ft";
	const SYMBOL_YARDS = "yd";
	const SYMBOL_MILES = "mi";
	const SYMBOL_LIGHTYEARS = "ly";
	const SYMBOL_NAUTICAL_MILES = "NM";
	const SYMBOL_FATHOMS = "ftm";
	const SYMBOL_FURLONGS = "fur";
	const SYMBOL_ASTRONOMIC_UNITS = "ua";
	const SYMBOL_PARSECS = "pc";

	const COEFFICIENT_MEGAMETERS = 1E+6;
	const COEFFICIENT_KILOMETERS = 1000.0;
	const COEFFICIENT_HECTOMETERS = 100.0;
	const COEFFICIENT_DECAMETERS = 10.0;
	const COEFFICIENT_METERS = 1.0;
	const COEFFICIENT_DECIMETERS = 0.1;
	const COEFFICIENT_CENTIMETERS = 0.01;
	const COEFFICIENT_MILLIMETERS = 0.001;
	const COEFFICIENT_MICROMETERS = 1E-6;
	const COEFFICIENT_NANOMETERS = 1E-9;
	const COEFFICIENT_PICOMETERS = 1E-12;
	const COEFFICIENT_INCHES = 0.0254;
	const COEFFICIENT_FEET = 0.3048;
	const COEFFICIENT_YARDS = 0.9144;
	const COEFFICIENT_MILES = 1609.34;
	const COEFFICIENT_LIGHTYEARS = 9.461E+15;
	const COEFFICIENT_NAUTICAL_MILES = 1852.0;
	const COEFFICIENT_FATHOMS = 1.8288;
	const COEFFICIENT_FURLONGS = 201.168;
	const COEFFICIENT_ASTRONOMIC_UNITS = 1.496E+11;
	const COEFFICIENT_PARSECS = 3.086E+16;

	/**
	 * Returns the base unit of length, equal to seconds.
	 *
	 * @return UnitLength The base unit of length.
	 */
	public static function baseUnit()
	{
		return self::meters();
	}

	/**
	 * Returns the megameters unit of length.
	 *
	 * @return UnitLength The megameters unit of length.
	 */
	public static function megameters(): UnitLength
	{
		return new static(static::SYMBOL_MEGAMETERS, new UnitConverterLinear(static::COEFFICIENT_MEGAMETERS));
	}

	/**
	 * Returns the kilometers unit of length.
	 *
	 * @return UnitLength The kilometers unit of length.
	 */
	public static function kilometers(): UnitLength
	{
		return new static(static::SYMBOL_KILOMETERS, new UnitConverterLinear(static::COEFFICIENT_KILOMETERS));
	}

	/**
	 * Returns the hectometers unit of length.
	 *
	 * @return UnitLength The hectometers unit of length.
	 */
	public static function hectometers(): UnitLength
	{
		return new static(static::SYMBOL_HECTOMETERS, new UnitConverterLinear(static::COEFFICIENT_HECTOMETERS));
	}

	/**
	 * Returns the decameters unit of length.
	 *
	 * @return UnitLength The decameters unit of length.
	 */
	public static function decameters(): UnitLength
	{
		return new static(static::SYMBOL_DECAMETERS, new UnitConverterLinear(static::COEFFICIENT_DECAMETERS));
	}

	/**
	 * Returns the meters unit of length.
	 *
	 * @return UnitLength The meters unit of length.
	 */
	public static function meters(): UnitLength
	{
		return new static(static::SYMBOL_METERS, new UnitConverterLinear(static::COEFFICIENT_METERS));
	}

	/**
	 * Returns the decimeters unit of length.
	 *
	 * @return UnitLength The decimeters unit of length.
	 */
	public static function decimeters(): UnitLength
	{
		return new static(static::SYMBOL_DECIMETERS, new UnitConverterLinear(static::COEFFICIENT_DECIMETERS));
	}

	/**
	 * Returns the centimeters unit of length.
	 *
	 * @return UnitLength The centimeters unit of length.
	 */
	public static function centimeters(): UnitLength
	{
		return new static(static::SYMBOL_CENTIMETERS, new UnitConverterLinear(static::COEFFICIENT_CENTIMETERS));
	}

	/**
	 * Returns the millimeters unit of length.
	 *
	 * @return UnitLength The millimeters unit of length.
	 */
	public static function millimeters(): UnitLength
	{
		return new static(static::SYMBOL_MILLIMETERS, new UnitConverterLinear(static::COEFFICIENT_MILLIMETERS));
	}

	/**
	 * Returns the micrometers unit of length.
	 *
	 * @return UnitLength The micrometers unit of length.
	 */
	public static function micrometers(): UnitLength
	{
		return new static(static::SYMBOL_MICROMETERS, new UnitConverterLinear(static::COEFFICIENT_MICROMETERS));
	}

	/**
	 * Returns the nanometers unit of length.
	 *
	 * @return UnitLength The nanometers unit of length.
	 */
	public static function nanometers(): UnitLength
	{
		return new static(static::SYMBOL_NANOMETERS, new UnitConverterLinear(static::COEFFICIENT_NANOMETERS));
	}

	/**
	 * Returns the picometers unit of length.
	 *
	 * @return UnitLength The picometers unit of length.
	 */
	public static function picometers(): UnitLength
	{
		return new static(static::SYMBOL_PICOMETERS, new UnitConverterLinear(static::COEFFICIENT_PICOMETERS));
	}

	/**
	 * Returns the inches unit of length.
	 *
	 * @return UnitLength The inches unit of length.
	 */
	public static function inches(): UnitLength
	{
		return new static(static::SYMBOL_INCHES, new UnitConverterLinear(static::COEFFICIENT_INCHES));
	}

	/**
	 * Returns the feet unit of length.
	 *
	 * @return UnitLength The feet unit of length.
	 */
	public static function feet(): UnitLength
	{
		return new static(static::SYMBOL_FEET, new UnitConverterLinear(static::COEFFICIENT_FEET));
	}

	/**
	 * Returns the yards unit of length.
	 *
	 * @return UnitLength The yards unit of length.
	 */
	public static function yards(): UnitLength
	{
		return new static(static::SYMBOL_YARDS, new UnitConverterLinear(static::COEFFICIENT_YARDS));
	}

	/**
	 * Returns the miles unit of length.
	 *
	 * @return UnitLength The miles unit of length.
	 */
	public static function miles(): UnitLength
	{
		return new static(static::SYMBOL_MILES, new UnitConverterLinear(static::COEFFICIENT_MILES));
	}

	/**
	 * Returns the lightyears unit of length.
	 *
	 * @return UnitLength The lightyears unit of length.
	 */
	public static function lightyears(): UnitLength
	{
		return new static(static::SYMBOL_LIGHTYEARS, new UnitConverterLinear(static::COEFFICIENT_LIGHTYEARS));
	}

	/**
	 * Returns the nautical miles unit of length.
	 *
	 * @return UnitLength The nautical miles unit of length.
	 */
	public static function nauticalMiles(): UnitLength
	{
		return new static(static::SYMBOL_NAUTICAL_MILES, new UnitConverterLinear(static::COEFFICIENT_NAUTICAL_MILES));
	}

	/**
	 * Returns the fathoms unit of length.
	 *
	 * @return UnitLength The fathoms unit of length.
	 */
	public static function fathoms(): UnitLength
	{
		return new static(static::SYMBOL_FATHOMS, new UnitConverterLinear(static::COEFFICIENT_FATHOMS));
	}

	/**
	 * Returns the furlongs unit of length.
	 *
	 * @return UnitLength The furlongs unit of length.
	 */
	public static function furlongs(): UnitLength
	{
		return new static(static::SYMBOL_FURLONGS, new UnitConverterLinear(static::COEFFICIENT_FURLONGS));
	}

	/**
	 * Returns the astronomical units unit of length.
	 *
	 * @return UnitLength The astronomical units unit of length.
	 */
	public static function astronomicalUnits(): UnitLength
	{
		return new static(static::SYMBOL_ASTRONOMIC_UNITS, new UnitConverterLinear(static::COEFFICIENT_ASTRONOMIC_UNITS));
	}

	/**
	 * Returns the parsecs unit of length.
	 *
	 * @return UnitLength The parsecs unit of length.
	 */
	public static function parsecs(): UnitLength
	{
		return new static(static::SYMBOL_PARSECS, new UnitConverterLinear(static::COEFFICIENT_PARSECS));
	}

}
