<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitElectricPotentialDifference;

class UnitElectricPotentialDifferenceTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_volts_as_base_unit()
	{
		$this->assertTrue(UnitElectricPotentialDifference::baseUnit() == UnitElectricPotentialDifference::volts(), "Electric potential difference should define volts as its base unit.");
	}

	/** @test */
	public function it_converts_electrical_potential_differences()
	{
		$base = new Measurement(1, UnitElectricPotentialDifference::baseUnit());

		$megavolts = $base->convertTo(UnitElectricPotentialDifference::megavolts());
		$kilovolts = $base->convertTo(UnitElectricPotentialDifference::kilovolts());
		$volts = $base->convertTo(UnitElectricPotentialDifference::volts());
		$millivolts = $base->convertTo(UnitElectricPotentialDifference::millivolts());
		$microvolts = $base->convertTo(UnitElectricPotentialDifference::microvolts());

		$this->assertTrue($megavolts->value() == 1E-6, "{$base} converted to megavolts should be equal to 1E-6 MV instead of {$megavolts}.");
		$this->assertTrue($kilovolts->value() == 0.001, "{$base} converted to kilovolts should be equal to 0.001 kV instead of {$kilovolts}.");
		$this->assertTrue($volts->value() == 1.0, "{$base} converted to volts should be equal to 1 V instead of {$volts}.");
		$this->assertTrue($millivolts->value() == 1000.0, "{$base} converted to millivolts should be equal to 1000 mV instead of {$millivolts}.");
		$this->assertTrue($microvolts->value() == 1E+6, "{$base} converted to microvolts should be equal to 1E+6 µV instead of {$microvolts}.");
	}
	
}