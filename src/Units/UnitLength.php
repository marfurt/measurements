<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * Length is the dimensional extent of matter. The SI unit for length is the meter (m), which is defined in terms of the distance traveled by light in a vacuum.
 * The base unit of `UnitLength` is defined as meters.
 */
class UnitLength extends Dimension {

	/**
	 * Returns the megameters unit of length.
	 *
	 * @return UnitLength The megameters unit of length.
	 */
	public static function megameters(): UnitLength
	{
		return new static("Mm", new UnitConverterLinear(1000000.0));
	}

	/**
	 * Returns the kilometers unit of length.
	 *
	 * @return UnitLength The kilometers unit of length.
	 */
	public static function kilometers(): UnitLength
	{
		return new static("km", new UnitConverterLinear(1000.0));
	}

	/**
	 * Returns the hectometers unit of length.
	 *
	 * @return UnitLength The hectometers unit of length.
	 */
	public static function hectometers(): UnitLength
	{
		return new static("hm", new UnitConverterLinear(100.0));
	}

	/**
	 * Returns the decameters unit of length.
	 *
	 * @return UnitLength The decameters unit of length.
	 */
	public static function decameters(): UnitLength
	{
		return new static("dam", new UnitConverterLinear(10.0));
	}

	/**
	 * Returns the meters unit of length.
	 *
	 * @return UnitLength The meters unit of length.
	 */
	public static function meters(): UnitLength
	{
		return new static("m", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the decimeters unit of length.
	 *
	 * @return UnitLength The decimeters unit of length.
	 */
	public static function decimeters(): UnitLength
	{
		return new static("dm", new UnitConverterLinear(0.1));
	}

	/**
	 * Returns the centimeters unit of length.
	 *
	 * @return UnitLength The centimeters unit of length.
	 */
	public static function centimeters(): UnitLength
	{
		return new static("cm", new UnitConverterLinear(0.01));
	}

	/**
	 * Returns the millimeters unit of length.
	 *
	 * @return UnitLength The millimeters unit of length.
	 */
	public static function millimeters(): UnitLength
	{
		return new static("mm", new UnitConverterLinear(0.001));
	}

	/**
	 * Returns the micrometers unit of length.
	 *
	 * @return UnitLength The micrometers unit of length.
	 */
	public static function micrometers(): UnitLength
	{
		return new static("µm", new UnitConverterLinear(1E-6)); // 0.000001
	}

	/**
	 * Returns the nanometers unit of length.
	 *
	 * @return UnitLength The nanometers unit of length.
	 */
	public static function nanometers(): UnitLength
	{
		return new static("nm", new UnitConverterLinear(1E-9));
	}

	/**
	 * Returns the picometers unit of length.
	 *
	 * @return UnitLength The picometers unit of length.
	 */
	public static function picometers(): UnitLength
	{
		return new static("pm", new UnitConverterLinear(1E-12));
	}

	/**
	 * Returns the inches unit of length.
	 *
	 * @return UnitLength The inches unit of length.
	 */
	public static function inches(): UnitLength
	{
		return new static("in", new UnitConverterLinear(0.0254));
	}

	/**
	 * Returns the feet unit of length.
	 *
	 * @return UnitLength The feet unit of length.
	 */
	public static function feet(): UnitLength
	{
		return new static("ft", new UnitConverterLinear(0.3048));
	}

	/**
	 * Returns the yards unit of length.
	 *
	 * @return UnitLength The yards unit of length.
	 */
	public static function yards(): UnitLength
	{
		return new static("yd", new UnitConverterLinear(0.9144));
	}

	/**
	 * Returns the miles unit of length.
	 *
	 * @return UnitLength The miles unit of length.
	 */
	public static function miles(): UnitLength
	{
		return new static("mi", new UnitConverterLinear(1609.34));
	}

	/**
	 * Returns the lightyears unit of length.
	 *
	 * @return UnitLength The lightyears unit of length.
	 */
	public static function lightyears(): UnitLength
	{
		return new static("ly", new UnitConverterLinear(9.461E+15));
	}

	/**
	 * Returns the nauticalMiles unit of length.
	 *
	 * @return UnitLength The nauticalMiles unit of length.
	 */
	public static function nauticalMiles(): UnitLength
	{
		return new static("NM", new UnitConverterLinear(1852.0));
	}

	/**
	 * Returns the base unit of duration, equal to seconds.
	 *
	 * @return UnitLength The the base unit of duration.
	 */
	public static function baseUnit()
	{
		return self::meters();
	}

}
