<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitArea;

class UnitAreaTests extends PHPUnit_Framework_TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_square_meters_as_base_unit()
	{
		$this->assertTrue(UnitArea::baseUnit() == UnitArea::squareMeters(), "Area should define square meters as its base unit.");
	}

	/** @test */
	public function it_converts_areas()
	{
		$base = new Measurement(1, UnitArea::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitArea::squareMegameters()), 1.0 / 1E+12, $base, "square megameters");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::squareKilometers()), 1.0 / 1E+6, $base, "square kilometers");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::squareMeters()), 1.0, $base, "square meters");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::squareCentimeters()), 10000, $base, "square centimeters");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::squareMillimeters()), 1.0 / 1E-6, $base, "square millimeters");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::squareMicrometers()), 1.0 / 1E-12, $base, "square micrometers");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::squareNanometers()), 1.0 / 1E-18, $base, "square nanometers");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::squareInches()), 1.0 / 0.00064516, $base, "square inches");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::squareFeet()), 1.0 / 0.092903, $base, "square feet");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::squareYards()), 1.0/ 0.836127, $base, "square yards");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::squareMiles()), 1.0 / 2.59E+6, $base, "square miles");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::acres()), 1.0 / 4046.86, $base, "acres");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::ares()), 0.01, $base, "ares");
		$this->assertMeasurementEquals($base->convertTo(UnitArea::hectares()), 0.0001, $base, "hectares");
	}

}