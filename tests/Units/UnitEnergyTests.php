<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitEnergy;

class UnitEnergyTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_joules_as_base_unit()
	{
		$this->assertTrue(UnitEnergy::baseUnit() == UnitEnergy::joules(), "Energy should define joules as its base unit.");
	}

	/** @test */
	public function it_converts_energies()
	{
		$base = new Measurement(1, UnitEnergy::baseUnit());

		$kilojoules = $base->convertTo(UnitEnergy::kilojoules());
		$joules = $base->convertTo(UnitEnergy::joules());
		$kilocalories = $base->convertTo(UnitEnergy::kilocalories());
		$calories = $base->convertTo(UnitEnergy::calories());
		$kilowattHours = $base->convertTo(UnitEnergy::kilowattHours());

		$this->assertTrue($kilojoules->value() == 0.001, "{$base} converted to kilojoules should be equal to 0.001 kJ instead of {$kilojoules}.");
		$this->assertTrue($joules->value() == 1.0, "{$base} converted to joules should be equal to 1 J instead of {$joules}.");
		$this->assertTrue($kilocalories->value() == 1.0 / 4184.0, "{$base} converted to kilocalories should be equal to 0.0002390057361 kCal instead of {$kilocalories}.");
		$this->assertTrue($calories->value() == 1.0 / 4.184, "{$base} converted to calories should be equal to 0.2390057361 cal instead of {$calories}.");
		$this->assertTrue($kilowattHours->value() == 1.0 / 3600000.0, "{$base} converted to kilowatt hours should be equal to 0.000000277777778 kWh instead of {$kilowattHours}.");
	}

}