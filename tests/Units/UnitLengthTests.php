<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitLength;

class UnitLengthTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_meters_as_base_unit()
	{
		$this->assertTrue(UnitLength::baseUnit() == UnitLength::meters(), "Length should define meters as its base unit.");
	}

	/** @test */
	public function it_converts_lengths()
	{
		$base = new Measurement(1, UnitLength::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitLength::megameters()), 1E-6, $base, "megameters");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::kilometers()), 0.001, $base, "kilometers");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::hectometers()), 0.01, $base, "hectometers");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::decameters()), 0.1, $base, "decameters");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::meters()), 1, $base, "meters");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::decimeters()), 10, $base, "decimeters");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::centimeters()), 100, $base, "centimeters");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::millimeters()), 1000, $base, "millimeters");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::micrometers()), 1E+6, $base, "micrometers");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::nanometers()), 1.0 / 1E-9, $base, "nanometers");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::picometers()), 1E+12, $base, "picometers");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::inches()), 1.0 / 0.0254, $base, "inches");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::feet()), 1.0 / 0.3048, $base, "feet");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::yards()), 1.0 / 0.9144, $base, "yards");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::miles()), 1.0 / 1609.34, $base, "miles");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::lightyears()), 1.0 / 9.461E+15, $base, "lightyears");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::nauticalMiles()), 1.0 / 1852.0, $base, "nautical miles");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::fathoms()), 1.0 / 1.8288, $base, "fathoms");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::furlongs()), 1.0 / 201.168, $base, "furlongs");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::astronomicalUnits()), 1.0 / 1.496E+11, $base, "astronomical units");
		$this->assertMeasurementEquals($base->convertTo(UnitLength::parsecs()), 1.0 / 3.086E+16, $base, "parsecs");
	}

}