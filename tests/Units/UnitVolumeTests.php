<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitVolume;

class UnitVolumeTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_liters_as_base_unit()
	{
		$this->assertTrue(UnitVolume::baseUnit() == UnitVolume::liters(), "Volume should define liters as its base unit.");
	}

	/** @test */
	public function it_converts_volumes()
	{
		$base = new Measurement(1, UnitVolume::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitVolume::megaliters()), 1.0 / 1000000.0, $base, "megaliters");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::kiloliters()), 1.0 / 1000.0, $base, "kiloliters");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::liters()), 1.0, $base, "liters");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::deciliters()), 1.0 / 0.1, $base, "deciliters");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::centiliters()), 1.0 / 0.01, $base, "centiliters");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::milliliters()), 1.0 / 0.001, $base, "milliliters");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::cubicKilometers()), 1E-12, $base, "cubic kilometers");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::cubicMeters()), 1.0 / 1000.0, $base, "cubic meters");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::cubicDecimeters()), 1.0, $base, "cubic decimeters");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::cubicMillimeters()), 1000, $base, "cubic millimeters");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::cubicInches()), 1.0 / 0.0163871, $base, "cubic inches");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::cubicFeet()), 1.0 / 28.3168, $base, "cubic feet");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::cubicYards()), 1.0 / 764.555, $base, "cubic yards");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::cubicMiles()), 1.0 / 4.168E+12, $base, "cubic miles");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::acreFeet()), 1.0 / 1.233E+6, $base, "acre feet");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::bushels()), 1.0 / 35.2391, $base, "bushels");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::teaspoons()), 1.0 / 0.00492892, $base, "teaspoons");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::tablespoons()), 1.0 / 0.0147868, $base, "tablespoons");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::fluidOunces()), 1.0 / 0.0295735, $base, "fluid ounces");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::cups()), 1.0 / 0.24, $base, "cups");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::pints()), 1.0 / 0.473176, $base, "pints");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::quarts()), 1.0 / 0.946353, $base, "quarts");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::gallons()), 1.0 / 3.78541, $base, "gallons");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::imperialTeaspoons()), 1.0 / 0.00591939, $base, "imperial teaspoons");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::imperialTablespoons()), 1.0 / 0.0177582, $base, "imperial tablespoons");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::imperialFluidOunces()), 1.0 / 0.0284131, $base, "imperial fluid ounces");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::imperialPints()), 1.0 / 0.568261, $base, "imperial pints");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::imperialQuarts()), 1.0 / 1.13652, $base, "imperial quarts");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::imperialGallons()), 1.0 / 4.54609, $base, "imperial gallons");
		$this->assertMeasurementEquals($base->convertTo(UnitVolume::metricCups()), 4, $base, "metric");
	}

}