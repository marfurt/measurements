<?php namespace Tests;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitLength;

class OperationTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_adds_measurements()
	{
		$first = new Measurement(42, UnitLength::meters());
		$second = new Measurement(8, UnitLength::meters());

		$sum = $first->add($second);

		$this->assertTrue($sum->value() == 50, "42 m + 8 m should be equal to 50 m");
		$this->assertTrue($sum->unit()->isEqualTo($first->unit()), "Resulting measurement should have the same unit as the initial one.");
	}

	/** @test */
	public function it_adds_measurements_by_value()
	{
		$measurement = new Measurement(42, UnitLength::meters());

		$sum = $measurement->addValue(8);

		$this->assertTrue($sum->value() == 50, "42 m + 8 should be equal to 50 m");
	}

	/** @test */
	public function it_adds_measurements_with_different_units()
	{
		$decimeters = new Measurement(42, UnitLength::decimeters());
		$centimeters = new Measurement(80, UnitLength::centimeters());

		$sum = $decimeters->add($centimeters);

		$this->assertTrue($sum->value() == 5, "42 dm + 8 cm should be equal to 5 m");
		$this->assertTrue($sum->unit()->isEqualTo($decimeters->unit()->getBaseUnit()), "Adding measurements with different units should result in a measurement with a base unit.");
	}

}