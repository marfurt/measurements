<?php namespace Tests;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitLength;

class MeasurementTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_creates_a_measurement()
	{
		$length = new Measurement(42, UnitLength::meters());

		$this->assertNotNull($length);
		$this->assertTrue($length == '42 m', "Measurement should print <42 m>.");
	}

	/** @test */
	public function it_returns_a_measurement_value()
	{
		$length = new Measurement(42, UnitLength::meters());

		$this->assertTrue($length->value() == 42, "Measurement value should be 42.");
	}

	/** @test */
	public function it_returns_a_measurement_unit()
	{
		$length = new Measurement(42, UnitLength::meters());

		$this->assertTrue($length->unit() == UnitLength::meters(), "Measurement unit should be length.");
	}

	/** @test */
	public function it_checks_equality_of_measures_with_same_unit()
	{
		$first = new Measurement(42, UnitLength::meters());
		$second = new Measurement(42.0, UnitLength::meters());
		$third = new Measurement(37, UnitLength::meters());

		$this->assertTrue($first->isEqualTo($second), "Measurements should be equal.");
		$this->assertFalse($first->isEqualTo($third), "Measurements should not be equal.");
	}

	/** @test */
	public function it_checks_equality_of_measures_with_different_unit()
	{
		$meters = new Measurement(42, UnitLength::meters());
		$centimeters = new Measurement(4200, UnitLength::centimeters());
		$other = new Measurement(420, UnitLength::centimeters());

		$this->assertTrue($meters->isEqualTo($centimeters), "Measurements should be equal.");
		$this->assertFalse($meters->isEqualTo($other), "Measurements should not be equal.");
	}

}