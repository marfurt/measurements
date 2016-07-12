<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitEnergy;

class UnitEnergyTests extends PHPUnit_Framework_TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_joules_as_base_unit()
	{
		$this->assertTrue(UnitEnergy::baseUnit() == UnitEnergy::joules(), "Energy should define joules as its base unit.");
	}

	/** @test */
	public function it_converts_energies()
	{
		$base = new Measurement(1, UnitEnergy::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitEnergy::kilojoules()), 0.001, $base, "kilojoules");
		$this->assertMeasurementEquals($base->convertTo(UnitEnergy::joules()), 1.0, $base, "joules");
		$this->assertMeasurementEquals($base->convertTo(UnitEnergy::kilocalories()), 1.0 / 4184.0, $base, "kilocalories");
		$this->assertMeasurementEquals($base->convertTo(UnitEnergy::calories()), 1.0 / 4.184, $base, "calories");
		$this->assertMeasurementEquals($base->convertTo(UnitEnergy::kilowattHours()), 1.0 / 3600000.0, $base, "kilowatt");
	}

}