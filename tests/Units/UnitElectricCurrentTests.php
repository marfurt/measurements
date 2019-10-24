<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitElectricCurrent;

class UnitElectricCurrentTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_amperes_as_base_unit()
	{
		$this->assertTrue(UnitElectricCurrent::baseUnit() == UnitElectricCurrent::amperes(), "Electric current should define amperes as its base unit.");
	}

	/** @test */
	public function it_converts_electric_currents()
	{
		$base = new Measurement(1, UnitElectricCurrent::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitElectricCurrent::megaamperes()), 1E-6, $base, "megaamperes");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricCurrent::kiloamperes()), 0.001, $base, "kiloamperes");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricCurrent::amperes()), 1.0, $base, "amperes");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricCurrent::milliamperes()), 1000, $base, "milliamperes");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricCurrent::microamperes()), 1E+6, $base, "microamperes");
	}

}