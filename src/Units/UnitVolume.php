<?php namespace Measurements\Units;

use Measurements\Dimension;
use Measurements\Converters\UnitConverterLinear;

/**
 * The `UnitVolume` class encapsulates units of measure for volume.
 * You typically use instances of `UnitVolume` to represent specific quantities of volume using the `Measurement` class.
 * Volume is a quantity of the extend of matter in three dimensions.
 * The SI accepted unit of volume is the liter (L), which is derived as one cubic decimeter (1 dm3).
 * Volume is also commonly expressed in terms of cubic meters (m3), gallons (gal), and cups (cup).
 * The base unit of `UnitVolume` is defined as liters.
 */
class UnitVolume extends Dimension {

	const SYMBOL_MEGALITERS = "ML";
	const SYMBOL_KILOLITERS = "kL";
	const SYMBOL_LITERS = "L";
	const SYMBOL_DECILITERS = "dL";
	const SYMBOL_CENTILITERS = "cL";
	const SYMBOL_MILLILITERS = "mL";
	const SYMBOL_CUBIC_KILOMETERS = "km³";
	const SYMBOL_CUBIC_METERS = "m³";
	const SYMBOL_CUBIC_DECIMETERS = "dm³";
	const SYMBOL_CUBIC_CENTIMETERS = "cm³";
	const SYMBOL_CUBIC_MILLIMETERS = "mm³";
	const SYMBOL_CUBIC_INCHES = "in³";
	const SYMBOL_CUBIC_FEET = "ft³";
	const SYMBOL_CUBIC_YARDS = "yd³";
	const SYMBOL_CUBIC_MILES = "mi³";
	const SYMBOL_ACRE_FEET = "af";
	const SYMBOL_BUSHELS = "bsh";
	const SYMBOL_TEASPOONS = "tsp";
	const SYMBOL_TABLESPOONS = "tbsp";
	const SYMBOL_FLUID_OUNCES = "fl oz";
	const SYMBOL_CUPS = "cup";
	const SYMBOL_PINTS = "pt";
	const SYMBOL_QUARTS = "qt";
	const SYMBOL_GALLONS = "gal";
	const SYMBOL_IMPERIAL_TEASPOONS = "tsp Imperial";
	const SYMBOL_IMPERIAL_TABLESPOONS = "tbsp Imperial";
	const SYMBOL_IMPERIAL_FLUID_OUNCES = "fl oz Imperial";
	const SYMBOL_IMPERIAL_PINTS = "pt Imperial";
	const SYMBOL_IMPERIAL_QUARTS = "qt Imperial";
	const SYMBOL_IMPERIAL_GALLONS = "gal Imperial";
	const SYMBOL_METRIC_CUPS = "metric cup Imperial";

	const COEFFICIENT_MEGALITERS = 1E+6;
	const COEFFICIENT_KILOLITERS = 1000.0;
	const COEFFICIENT_LITERS = 1.0;
	const COEFFICIENT_DECILITERS = 0.1;
	const COEFFICIENT_CENTILITERS = 0.01;
	const COEFFICIENT_MILLILITERS = 0.001;
	const COEFFICIENT_CUBIC_KILOMETERS = 1E+12;
	const COEFFICIENT_CUBIC_METERS = 1000.0;
	const COEFFICIENT_CUBIC_DECIMETERS = 1.0;
	const COEFFICIENT_CUBIC_CENTIMETERS = 0.01;
	const COEFFICIENT_CUBIC_MILLIMETERS = 0.001;
	const COEFFICIENT_CUBIC_INCHES = 0.0163871;
	const COEFFICIENT_CUBIC_FEET = 28.3168;
	const COEFFICIENT_CUBIC_YARDS = 764.555;
	const COEFFICIENT_CUBIC_MILES = 4.168E+12;
	const COEFFICIENT_ACRE_FEET = 1.233E+6;
	const COEFFICIENT_BUSHELS = 35.2391;
	const COEFFICIENT_TEASPOONS = 0.00492892;
	const COEFFICIENT_TABLESPOONS = 0.0147868;
	const COEFFICIENT_FLUID_OUNCES = 0.0295735;
	const COEFFICIENT_CUPS = 0.24;
	const COEFFICIENT_PINTS = 0.473176;
	const COEFFICIENT_QUARTS = 0.946353;
	const COEFFICIENT_GALLONS = 3.78541;
	const COEFFICIENT_IMPERIAL_TEASPOONS = 0.00591939;
	const COEFFICIENT_IMPERIAL_TABLESPOONS = 0.0177582;
	const COEFFICIENT_IMPERIAL_FLUID_OUNCES = 0.0284131;
	const COEFFICIENT_IMPERIAL_PINTS = 0.568261;
	const COEFFICIENT_IMPERIAL_QUARTS = 1.13652;
	const COEFFICIENT_IMPERIAL_GALLONS = 4.54609;
	const COEFFICIENT_METRIC_CUPS = 0.25;

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
	 * Returns the megaliters unit of volume.
	 *
	 * @return UnitVolume The megaliters unit of volume.
	 */
	public static function megaliters(): UnitVolume
	{
		return new static(static::SYMBOL_MEGALITERS, new UnitConverterLinear(static::COEFFICIENT_MEGALITERS));
	}

	/**
	 * Returns the kiloliters unit of volume.
	 *
	 * @return UnitVolume The kiloliters unit of volume.
	 */
	public static function kiloliters(): UnitVolume
	{
		return new static(static::SYMBOL_KILOLITERS, new UnitConverterLinear(static::COEFFICIENT_KILOLITERS));
	}

	/**
	 * Returns the liters unit of volume.
	 *
	 * @return UnitVolume The liters unit of volume.
	 */
	public static function liters(): UnitVolume
	{
		return new static(static::SYMBOL_LITERS, new UnitConverterLinear(static::COEFFICIENT_LITERS));
	}

	/**
	 * Returns the deciliters unit of volume.
	 *
	 * @return UnitVolume The deciliters unit of volume.
	 */
	public static function deciliters(): UnitVolume
	{
		return new static(static::SYMBOL_DECILITERS, new UnitConverterLinear(static::COEFFICIENT_DECILITERS));
	}

	/**
	 * Returns the centiliters unit of volume.
	 *
	 * @return UnitVolume The centiliters unit of volume.
	 */
	public static function centiliters(): UnitVolume
	{
		return new static(static::SYMBOL_CENTILITERS, new UnitConverterLinear(static::COEFFICIENT_CENTILITERS));
	}

	/**
	 * Returns the milliliters unit of volume.
	 *
	 * @return UnitVolume The milliliters unit of volume.
	 */
	public static function milliliters(): UnitVolume
	{
		return new static(static::SYMBOL_MILLILITERS, new UnitConverterLinear(static::COEFFICIENT_MILLILITERS));
	}

	/**
	 * Returns the cubic kilometers unit of volume.
	 *
	 * @return UnitVolume The cubic kilometers unit of volume.
	 */
	public static function cubicKilometers(): UnitVolume
	{
		return new static(static::SYMBOL_CUBIC_KILOMETERS, new UnitConverterLinear(static::COEFFICIENT_CUBIC_KILOMETERS));
	}

	/**
	 * Returns the cubic meters unit of volume.
	 *
	 * @return UnitVolume The cubic meters unit of volume.
	 */
	public static function cubicMeters(): UnitVolume
	{
		return new static(static::SYMBOL_CUBIC_METERS, new UnitConverterLinear(static::COEFFICIENT_CUBIC_METERS));
	}

	/**
	 * Returns the cubic decimeters unit of volume.
	 *
	 * @return UnitVolume The cubic decimeters unit of volume.
	 */
	public static function cubicDecimeters(): UnitVolume
	{
		return new static(static::SYMBOL_CUBIC_DECIMETERS, new UnitConverterLinear(static::COEFFICIENT_CUBIC_DECIMETERS));
	}

	/**
	 * Returns the cubic millimeters unit of volume.
	 *
	 * @return UnitVolume The cubic millimeters unit of volume.
	 */
	public static function cubicMillimeters(): UnitVolume
	{
		return new static(static::SYMBOL_CUBIC_MILLIMETERS, new UnitConverterLinear(static::COEFFICIENT_CUBIC_MILLIMETERS));
	}

	/**
	 * Returns the cubic inches unit of volume.
	 *
	 * @return UnitVolume The cubic inches unit of volume.
	 */
	public static function cubicInches(): UnitVolume
	{
		return new static(static::SYMBOL_CUBIC_INCHES, new UnitConverterLinear(static::COEFFICIENT_CUBIC_INCHES));
	}

	/**
	 * Returns the cubic feet unit of volume.
	 *
	 * @return UnitVolume The cubic feet unit of volume.
	 */
	public static function cubicFeet(): UnitVolume
	{
		return new static(static::SYMBOL_CUBIC_FEET, new UnitConverterLinear(static::COEFFICIENT_CUBIC_FEET));
	}

	/**
	 * Returns the cubic yards unit of volume.
	 *
	 * @return UnitVolume The cubic yards unit of volume.
	 */
	public static function cubicYards(): UnitVolume
	{
		return new static(static::SYMBOL_CUBIC_YARDS, new UnitConverterLinear(static::COEFFICIENT_CUBIC_YARDS));
	}

	/**
	 * Returns the cubic miles unit of volume.
	 *
	 * @return UnitVolume The cubic miles unit of volume.
	 */
	public static function cubicMiles(): UnitVolume
	{
		return new static(static::SYMBOL_CUBIC_MILES, new UnitConverterLinear(static::COEFFICIENT_CUBIC_MILES));
	}

	/**
	 * Returns the acre feet unit of volume.
	 *
	 * @return UnitVolume The acre feet unit of volume.
	 */
	public static function acreFeet(): UnitVolume
	{
		return new static(static::SYMBOL_ACRE_FEET, new UnitConverterLinear(static::COEFFICIENT_ACRE_FEET));
	}

	/**
	 * Returns the bushels unit of volume.
	 *
	 * @return UnitVolume The bushels unit of volume.
	 */
	public static function bushels(): UnitVolume
	{
		return new static(static::SYMBOL_BUSHELS, new UnitConverterLinear(static::COEFFICIENT_BUSHELS));
	}

	/**
	 * Returns the tea spoons unit of volume.
	 *
	 * @return UnitVolume The tea spoons unit of volume.
	 */
	public static function teaspoons(): UnitVolume
	{
		return new static(static::SYMBOL_TEASPOONS, new UnitConverterLinear(static::COEFFICIENT_TEASPOONS));
	}

	/**
	 * Returns the table spoons unit of volume.
	 *
	 * @return UnitVolume The table spoons unit of volume.
	 */
	public static function tablespoons(): UnitVolume
	{
		return new static(static::SYMBOL_TABLESPOONS, new UnitConverterLinear(static::COEFFICIENT_TABLESPOONS));
	}

	/**
	 * Returns the fluid ounces unit of volume.
	 *
	 * @return UnitVolume The fluid ounces unit of volume.
	 */
	public static function fluidOunces(): UnitVolume
	{
		return new static(static::SYMBOL_FLUID_OUNCES, new UnitConverterLinear(static::COEFFICIENT_FLUID_OUNCES));
	}

	/**
	 * Returns the cups of volume.
	 *
	 * @return UnitVolume The cups unit of volume.
	 */
	public static function cups(): UnitVolume
	{
		return new static(static::SYMBOL_CUPS, new UnitConverterLinear(static::COEFFICIENT_CUPS));
	}

	/**
	 * Returns the pints unit of volume.
	 *
	 * @return UnitVolume The pints unit of volume.
	 */
	public static function pints(): UnitVolume
	{
		return new static(static::SYMBOL_PINTS, new UnitConverterLinear(static::COEFFICIENT_PINTS));
	}

	/**
	 * Returns the quarts unit of volume.
	 *
	 * @return UnitVolume The quarts unit of volume.
	 */
	public static function quarts(): UnitVolume
	{
		return new static(static::SYMBOL_QUARTS, new UnitConverterLinear(static::COEFFICIENT_QUARTS));
	}

	/**
	 * Returns the gallons unit of volume.
	 *
	 * @return UnitVolume The gallons unit of volume.
	 */
	public static function gallons(): UnitVolume
	{
		return new static(static::SYMBOL_GALLONS, new UnitConverterLinear(static::COEFFICIENT_GALLONS));
	}

	/**
	 * Returns the imperial tea spoons unit of volume.
	 *
	 * @return UnitVolume The imperial tea spoons unit of volume.
	 */
	public static function imperialTeaspoons(): UnitVolume
	{
		return new static(static::SYMBOL_IMPERIAL_TEASPOONS, new UnitConverterLinear(static::COEFFICIENT_IMPERIAL_TEASPOONS));
	}

	/**
	 * Returns the imperial table spoons unit of volume.
	 *
	 * @return UnitVolume The imperial table spoons unit of volume.
	 */
	public static function imperialTablespoons(): UnitVolume
	{
		return new static(static::SYMBOL_IMPERIAL_TABLESPOONS, new UnitConverterLinear(static::COEFFICIENT_IMPERIAL_TABLESPOONS));
	}

	/**
	 * Returns the imperial fluid ounces unit of volume.
	 *
	 * @return UnitVolume The imperial fluid ounces unit of volume.
	 */
	public static function imperialFluidOunces(): UnitVolume
	{
		return new static(static::SYMBOL_IMPERIAL_FLUID_OUNCES, new UnitConverterLinear(static::COEFFICIENT_IMPERIAL_FLUID_OUNCES));
	}

	/**
	 * Returns the imperial pints unit of volume.
	 *
	 * @return UnitVolume The imperial pints unit of volume.
	 */
	public static function imperialPints(): UnitVolume
	{
		return new static(static::SYMBOL_IMPERIAL_PINTS, new UnitConverterLinear(static::COEFFICIENT_IMPERIAL_PINTS));
	}

	/**
	 * Returns the imperial quarts unit of volume.
	 *
	 * @return UnitVolume The imperial quarts unit of volume.
	 */
	public static function imperialQuarts(): UnitVolume
	{
		return new static(static::SYMBOL_IMPERIAL_QUARTS, new UnitConverterLinear(static::COEFFICIENT_IMPERIAL_QUARTS));
	}

	/**
	 * Returns the imperial gallons unit of volume.
	 *
	 * @return UnitVolume The imperial gallons unit of volume.
	 */
	public static function imperialGallons(): UnitVolume
	{
		return new static(static::SYMBOL_IMPERIAL_GALLONS, new UnitConverterLinear(static::COEFFICIENT_IMPERIAL_GALLONS));
	}

	/**
	 * Returns the metric cups unit of volume.
	 *
	 * @return UnitVolume The metric cups unit of volume.
	 */
	public static function metricCups(): UnitVolume
	{
		return new static(static::SYMBOL_METRIC_CUPS, new UnitConverterLinear(static::COEFFICIENT_METRIC_CUPS));
	}

}
