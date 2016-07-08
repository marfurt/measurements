<?php namespace Tests;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitLength;
use Measurements\Units\UnitDuration;

class ConversionTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_checks_whether_a_measurement_can_be_converted_to_a_different_unit()
	{
		$meters = new Measurement(42, UnitLength::meters());

		$this->assertTrue($meters->canBeConvertedToUnit(UnitLength::centimeters()), "Meters should be convertible in centimers.");
		$this->assertFalse($meters->canBeConvertedToUnit(UnitDuration::hours()), "Meters should not be convertible in hours (non length unit).");
	}

	/** @test */
	public function it_converts_a_measurement_to_a_different_unit()
	{
		$meters = new Measurement(42, UnitLength::meters());

		$centimeters = $meters->convertTo(UnitLength::centimeters());

		$this->assertTrue($centimeters->value() == 100 * $meters->value(), "42 m converted to centimeters should be equal to 4200 cm.");
	}

	/** @test */
	public function it_converts_unit_lengths()
	{
		$baseUnit = new Measurement(42, UnitLength::meters());

		// SI Units
		// ...
		$meters = $baseUnit->convertTo(UnitLength::decimeters());
		$decimeters = $baseUnit->convertTo(UnitLength::decimeters());
		$centimeters = $baseUnit->convertTo(UnitLength::centimeters());
		$millimeters = $baseUnit->convertTo(UnitLength::millimeters());
		$micrometers = $baseUnit->convertTo(UnitLength::micrometers());
		$nanometers = $baseUnit->convertTo(UnitLength::nanometers());
		$picometers = $baseUnit->convertTo(UnitLength::picometers());

		// Other units
		$miles = $baseUnit->convertTo(UnitLength::miles());
		// ...

		$this->assertTrue($meters->value() == 10 * $baseUnit->value(), "42 m converted to meters should be equal to 42 m instead of {$meters->value()}.");
		$this->assertTrue($decimeters->value() == 10 * $baseUnit->value(), "42 m converted to decimeters should be equal to 420 dm instead of {$decimeters->value()}.");
		$this->assertTrue($centimeters->value() == 100 * $baseUnit->value(), "42 m converted to centimeters should be equal to 4200 cm instead of {$centimeters->value()}.");
		$this->assertTrue($millimeters->value() == 1000 * $baseUnit->value(), "42 m converted to millimeters should be equal to 42000 mm instead of {$millimeters->value()}.");
		$this->assertTrue($micrometers->value() == 1E+6 * $baseUnit->value(), "42 m converted to micrometers should be equal to 42 * 1E-6 µm instead of {$micrometers->value()}.");
		$this->assertTrue($nanometers->value() == 1E+9 * $baseUnit->value(), "42 m converted to nanometers should be equal to 42 * 1E-9 nm instead of {$nanometers->value()}.");
		$this->assertTrue($picometers->value() == 1E+12 * $baseUnit->value(), "42 m converted to picometers should be equal to 42 * 1E-12 pm instead of {$picometers->value()}.");

		$this->assertTrue($miles->value() == $baseUnit->value() / 1609.34, "42 m converted to miles should be equal to 0.02609765494 mi instead of {$miles->value()}.");
	}

}