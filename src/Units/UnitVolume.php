<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitVolume` class encapsulates units of measure for volume.
 * You typically use instances of `UnitVolume` to represent specific quantities of volume using the `Measurement` class.
 *
 * Volume is a quantity of the extend of matter in three dimensions.
 * The SI accepted unit of volume is the liter (L), which is derived as one cubic decimeter (1 dm3).
 * Volume is also commonly expressed in terms of cubic meters (m3), gallons (gal), and cups (cup).
 *
 * The base unit of `UnitVolume` is defined as liters.
 */
class UnitVolume extends Dimension {

	/**
	 * Returns the base unit of volume, equal to liters.
	 *
	 * @return UnitVolume The base unit of volume.
	 */
	public static function baseUnit()
	{
		return self::liters();
	}

	/**
	 * Returns the liters unit of volume.
	 *
	 * @return UnitVolume The liters unit of volume.
	 */
	public static function liters(): UnitVolume
	{
		return new static("L", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the megaliters unit of volume.
	 *
	 * @return UnitVolume The megaliters unit of volume.
	 */
	public static function megaliters(): UnitVolume
	{
		return new static("ML", new UnitConverterLinear(1000000.0));
	}


	/**
	 * Returns the kiloliters unit of volume.
	 *
	 * @return UnitVolume The kiloliters unit of volume.
	 */
	public static function kiloliters(): UnitVolume
	{
		return new static("kL", new UnitConverterLinear(1000.0));
	}

	/**
	 * Returns the deciliters unit of volume.
	 *
	 * @return UnitVolume The deciliters unit of volume.
	 */
	public static function deciliters(): UnitVolume
	{
		return new static("dL", new UnitConverterLinear(0.1));
	}


	/**
	 * Returns the centiliters unit of volume.
	 *
	 * @return UnitVolume The centiliters unit of volume.
	 */
	public static function centiliters(): UnitVolume
	{
		return new static("cL", new UnitConverterLinear(0.01));
	}

	/**
	 * Returns the milliliters unit of volume.
	 *
	 * @return UnitVolume The milliliters unit of volume.
	 */
	public static function milliliters(): UnitVolume
	{
		return new static("mL", new UnitConverterLinear(0.001));
	}

	/**
	 * Returns the cubic kilometers unit of volume.
	 *
	 * @return UnitVolume The cubic kilometers unit of volume.
	 */
	public static function cubicKilometers(): UnitVolume
	{
		return new static("km³", new UnitConverterLinear(1E+12));
	}

	/**
	 * Returns the cubic meters unit of volume.
	 *
	 * @return UnitVolume The cubic meters unit of volume.
	 */
	public static function cubicMeters(): UnitVolume
	{
		return new static("m³", new UnitConverterLinear(1000.0));
	}

	/**
	 * Returns the cubic decimeters unit of volume.
	 *
	 * @return UnitVolume The cubic decimeters unit of volume.
	 */
	public static function cubicDecimeters(): UnitVolume
	{
		return new static("dm³", new UnitConverterLinear(1.0));
	}

	/**
	 * Returns the cubic millimeters unit of volume.
	 *
	 * @return UnitVolume The cubic millimeters unit of volume.
	 */
	public static function cubicMillimeters(): UnitVolume
	{
		return new static("mm³", new UnitConverterLinear(0.001));
	}

	/**
	 * Returns the cubic inches unit of volume.
	 *
	 * @return UnitVolume The cubic inches unit of volume.
	 */
	public static function cubicInches(): UnitVolume
	{
		return new static("in³", new UnitConverterLinear(0.0163871));
	}

	/**
	 * Returns the cubic feet unit of volume.
	 *
	 * @return UnitVolume The cubic feet unit of volume.
	 */
	public static function cubicFeet(): UnitVolume
	{
		return new static("ft³", new UnitConverterLinear(28.3168));
	}

	/**
	 * Returns the cubic yards unit of volume.
	 *
	 * @return UnitVolume The cubic yards unit of volume.
	 */
	public static function cubicYards(): UnitVolume
	{
		return new static("yd³", new UnitConverterLinear(764.555));
	}

	/**
	 * Returns the cubic miles unit of volume.
	 *
	 * @return UnitVolume The cubic miles unit of volume.
	 */
	public static function cubicMiles(): UnitVolume
	{
		return new static("mi³", new UnitConverterLinear(4.168E+12));
	}

	/**
	 * Returns the acre feet unit of volume.
	 *
	 * @return UnitVolume The acre feet unit of volume.
	 */
	public static function acreFeet(): UnitVolume
	{
		return new static("af", new UnitConverterLinear(1.233E+6));
	}

	/**
	 * Returns the bushels unit of volume.
	 *
	 * @return UnitVolume The bushels unit of volume.
	 */
	public static function bushels(): UnitVolume
	{
		return new static("bsh", new UnitConverterLinear(35.2391));
	}

	/**
	 * Returns the tea spoons unit of volume.
	 *
	 * @return UnitVolume The tea spoons unit of volume.
	 */
	public static function teaspoons(): UnitVolume
	{
		return new static("tsp", new UnitConverterLinear(0.00492892));
	}

	/**
	 * Returns the table spoons unit of volume.
	 *
	 * @return UnitVolume The table spoons unit of volume.
	 */
	public static function tablespoons(): UnitVolume
	{
		return new static("tbsp", new UnitConverterLinear(0.0147868));
	}

	/**
	 * Returns the fluid ounces unit of volume.
	 *
	 * @return UnitVolume The fluid ounces unit of volume.
	 */
	public static function fluidOunces(): UnitVolume
	{
		return new static("fl oz", new UnitConverterLinear(0.0295735));
	}

	/**
	 * Returns the liters cups of volume.
	 *
	 * @return UnitVolume The cups unit of volume.
	 */
	public static function cups(): UnitVolume
	{
		return new static("cup", new UnitConverterLinear(0.24));
	}

	/**
	 * Returns the pints unit of volume.
	 *
	 * @return UnitVolume The pints unit of volume.
	 */
	public static function pints(): UnitVolume
	{
		return new static("pt", new UnitConverterLinear(0.473176));
	}

	/**
	 * Returns the quarts unit of volume.
	 *
	 * @return UnitVolume The quarts unit of volume.
	 */
	public static function quarts(): UnitVolume
	{
		return new static("qt", new UnitConverterLinear(0.946353));
	}

	/**
	 * Returns the gallons unit of volume.
	 *
	 * @return UnitVolume The gallons unit of volume.
	 */
	public static function gallons(): UnitVolume
	{
		return new static("gal", new UnitConverterLinear(3.78541));
	}

	/**
	 * Returns the imperial tea spoons unit of volume.
	 *
	 * @return UnitVolume The imperial tea spoons unit of volume.
	 */
	public static function imperialTeaspoons(): UnitVolume
	{
		return new static("tsp Imp", new UnitConverterLinear(0.00591939));
	}

	/**
	 * Returns the imperial table spoons unit of volume.
	 *
	 * @return UnitVolume The imperial table spoons unit of volume.
	 */
	public static function imperialTablespoons(): UnitVolume
	{
		return new static("tbsp Imp", new UnitConverterLinear(0.0177582));
	}

	/**
	 * Returns the imperial fluid ounces unit of volume.
	 *
	 * @return UnitVolume The imperial fluid ounces unit of volume.
	 */
	public static function imperialFluidOunces(): UnitVolume
	{
		return new static("fl oz Imp", new UnitConverterLinear(0.0284131));
	}

	/**
	 * Returns the imperial pints unit of volume.
	 *
	 * @return UnitVolume The imperial pints unit of volume.
	 */
	public static function imperialPints(): UnitVolume
	{
		return new static("pt Imp", new UnitConverterLinear(0.568261));
	}

	/**
	 * Returns the imperial quarts unit of volume.
	 *
	 * @return UnitVolume The imperial quarts unit of volume.
	 */
	public static function imperialQuarts(): UnitVolume
	{
		return new static("qt Imp", new UnitConverterLinear(1.13652));
	}

	/**
	 * Returns the imperial gallons unit of volume.
	 *
	 * @return UnitVolume The imperial gallons unit of volume.
	 */
	public static function imperialGallons(): UnitVolume
	{
		return new static("gal Imp", new UnitConverterLinear(4.54609));
	}

	/**
	 * Returns the metric cups unit of volume.
	 *
	 * @return UnitVolume The metric cups unit of volume.
	 */
	public static function metricCups(): UnitVolume
	{
		return new static("metric cup", new UnitConverterLinear(0.25));
	}

}
