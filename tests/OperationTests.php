<?php namespace Tests;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitLength;

class OperationTests extends TestCase {

	/** @test */
	public function it_adds_measurements()
	{
		$first = new Measurement(42, UnitLength::meters());
		$second = new Measurement(8, UnitLength::meters());

		$sum = $first->add($second);

		$this->assertTrue($sum->value() == 50, "42 m + 8 m should be equal to 50 m");
		$this->assertTrue($sum->unit()->isEqualTo($first->unit()), "Resulting measurement should have the same unit as the initial one after addtion.");
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

	/** @test */
	public function it_subtracts_measurements()
	{
		$first = new Measurement(42, UnitLength::meters());
		$second = new Measurement(8, UnitLength::meters());

		$subtraction = $first->subtract($second);

		$this->assertTrue($subtraction->value() == 34, "42 m - 8 m should be equal to 34 m");
		$this->assertTrue($subtraction->unit()->isEqualTo($first->unit()), "Resulting measurement should have the same unit as the initial one after subtraction.");
	}

	/** @test */
	public function it_subtracts_measurements_by_value()
	{
		$measurement = new Measurement(42, UnitLength::meters());

		$subtraction = $measurement->subtractValue(8);

		$this->assertTrue($subtraction->value() == 34, "42 m - 8 should be equal to 34 m");
	}

	/** @test */
	public function it_subtracts_measurements_with_different_units()
	{
		$decimeters = new Measurement(42, UnitLength::decimeters());
		$centimeters = new Measurement(20, UnitLength::centimeters());

		$subtraction = $decimeters->subtract($centimeters);

		$this->assertTrue($subtraction->value() == 4, "42 dm - 20 cm should be equal to 4 m");
		$this->assertTrue($subtraction->unit()->isEqualTo($decimeters->unit()->getBaseUnit()), "Subtracting measurements with different units should result in a measurement with a base unit.");
	}

	/** @test */
	public function it_multiplies_measurements()
	{
		$first = new Measurement(4, UnitLength::meters());
		$second = new Measurement(2, UnitLength::meters());

		$multiplication = $first->multiplyBy($second);

		$this->assertTrue($multiplication->value() == 8, "4 m * 2 m should be equal to 8 m");
		$this->assertTrue($multiplication->unit()->isEqualTo($first->unit()), "Resulting measurement should have the same unit as the initial one after multiplication.");
	}

	/** @test */
	public function it_multiplies_measurements_by_value()
	{
		$measurement = new Measurement(4, UnitLength::meters());

		$multiplication = $measurement->multiplyByValue(2);

		$this->assertTrue($multiplication->value() == 8, "4 m * 2 should be equal to 8 m");
	}

	/** @test */
	public function it_multiplies_measurements_with_different_units()
	{
		$decimeters = new Measurement(40, UnitLength::decimeters());
		$centimeters = new Measurement(200, UnitLength::centimeters());

		$multiplication = $decimeters->multiplyBy($centimeters);

		$this->assertTrue($multiplication->value() == 8, "40 dm - 200 cm should be equal to 8 m");
		$this->assertTrue($multiplication->unit()->isEqualTo($decimeters->unit()->getBaseUnit()), "Multiplying measurements with different units should result in a measurement with a base unit.");
	}

	/** @test */
	public function it_divides_measurements()
	{
		$first = new Measurement(4, UnitLength::meters());
		$second = new Measurement(2, UnitLength::meters());

		$division = $first->divideBy($second);

		$this->assertTrue($division->value() == 2, "4 m / 2 m should be equal to 2 m");
		$this->assertTrue($division->unit()->isEqualTo($first->unit()), "Resulting measurement should have the same unit as the initial one after division.");
	}

	/** @test */
	public function it_divides_measurements_by_value()
	{
		$measurement = new Measurement(4, UnitLength::meters());

		$division = $measurement->divideByValue(2);

		$this->assertTrue($division->value() == 2, "4 m / 2 should be equal to 2 m");
	}

	/** @test */
	public function it_divides_measurements_with_different_units()
	{
		$decimeters = new Measurement(40, UnitLength::decimeters());
		$centimeters = new Measurement(200, UnitLength::centimeters());

		$division = $decimeters->divideBy($centimeters);

		$this->assertTrue($division->value() == 2, "40 dm / 200 cm should be equal to 2 m");
		$this->assertTrue($division->unit()->isEqualTo($decimeters->unit()->getBaseUnit()), "Dividing measurements with different units should result in a measurement with a base unit.");
	}
}