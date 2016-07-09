<?php namespace Tests;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitLength;

class UnitLengthTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_meters_as_base_unit()
	{
		$this->assertTrue(UnitLength::baseUnit() == UnitLength::meters(), "Length should define meters as its base unit.");
	}

	/** @test */
	public function it_converts_lengths()
	{
		$baseUnit = new Measurement(1, UnitLength::meters());

		// SI units
		$megameters = $baseUnit->convertTo(UnitLength::megameters());
		$kilometers = $baseUnit->convertTo(UnitLength::kilometers());
		$hectometers = $baseUnit->convertTo(UnitLength::hectometers());
		$decameters = $baseUnit->convertTo(UnitLength::decameters());
		$meters = $baseUnit->convertTo(UnitLength::meters());
		$decimeters = $baseUnit->convertTo(UnitLength::decimeters());
		$centimeters = $baseUnit->convertTo(UnitLength::centimeters());
		$millimeters = $baseUnit->convertTo(UnitLength::millimeters());
		$micrometers = $baseUnit->convertTo(UnitLength::micrometers());
		$nanometers = $baseUnit->convertTo(UnitLength::nanometers());
		$picometers = $baseUnit->convertTo(UnitLength::picometers());

		// Other units
		$inches = $baseUnit->convertTo(UnitLength::inches());
		$feet = $baseUnit->convertTo(UnitLength::feet());
		$yards = $baseUnit->convertTo(UnitLength::yards());
		$miles = $baseUnit->convertTo(UnitLength::miles());
		$lightyears = $baseUnit->convertTo(UnitLength::lightyears());
		$nauticalMiles = $baseUnit->convertTo(UnitLength::nauticalMiles());

		$this->assertTrue($megameters->value() == 1E-6, "1 m converted to meters should be equal to 1E-6 m instead of {$megameters}.");
		$this->assertTrue($kilometers->value() == 0.001, "1 m converted to meters should be equal to 0.001 m instead of {$kilometers}.");
		$this->assertTrue($hectometers->value() == 0.01, "1 m converted to meters should be equal to 0.001 m instead of {$hectometers}.");
		$this->assertTrue($decameters->value() == 0.1, "1 m converted to meters should be equal to 0.001 m instead of {$decameters}.");
		$this->assertTrue($meters->value() == 1, "1 m converted to meters should be equal to 1 m instead of {$meters}.");
		$this->assertTrue($decimeters->value() == 10, "1 m converted to decimeters should be equal to 10 dm instead of {$decimeters}.");
		$this->assertTrue($centimeters->value() == 100, "1 m converted to centimeters should be equal to 100 cm instead of {$centimeters}.");
		$this->assertTrue($millimeters->value() == 1000, "1 m converted to millimeters should be equal to 1000 mm instead of {$millimeters}.");
		$this->assertTrue($micrometers->value() == 1E+6, "1 m converted to micrometers should be equal to 1E+6 µm instead of {$micrometers}.");
		$this->assertTrue($nanometers->value() == 1.0/1E-9, "1 m converted to nanometers should be equal to 1E+9 nm instead of {$nanometers}.");
		$this->assertTrue($picometers->value() == 1E+12, "1 m converted to picometers should be equal to 1E+12 pm instead of {$picometers}.");

		$this->assertTrue($inches->value() == 1.0 / 0.0254, "1 m converted to miles should be equal to 0.02609765494 in instead of {$inches}.");
		$this->assertTrue($feet->value() == 1.0 / 0.3048, "1 m converted to miles should be equal to 0.02609765494 ft instead of {$feet}.");
		$this->assertTrue($yards->value() == 1.0 / 0.9144, "1 m converted to miles should be equal to 0.02609765494 yd instead of {$yards}.");
		$this->assertTrue($miles->value() == 1.0 / 1609.34, "1 m converted to miles should be equal to 0.02609765494 mi instead of {$miles}.");
		$this->assertTrue($lightyears->value() == 1.0 / 9.461E+15, "1 m converted to miles should be equal to 0.02609765494 ly instead of {$lightyears}.");
		$this->assertTrue($nauticalMiles->value() == 1.0 / 1852.0, "1 m converted to miles should be equal to 0.02609765494 NM instead of {$nauticalMiles}.");
	}

}