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

}