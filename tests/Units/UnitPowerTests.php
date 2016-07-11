<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitPower;

class UnitPowerTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_watts_as_base_unit()
	{
		$this->assertTrue(UnitPower::baseUnit() == UnitPower::watts(), "Power should define watts as its base unit.");
	}

	/** @test */
	public function it_converts_powers()
	{
		$base = new Measurement(1, UnitPower::baseUnit());

		$terawatts = $base->convertTo(UnitPower::terawatts());
		$gigawatts = $base->convertTo(UnitPower::gigawatts());
		$megawatts = $base->convertTo(UnitPower::megawatts());
		$kilowatts = $base->convertTo(UnitPower::kilowatts());
		$watts = $base->convertTo(UnitPower::watts());
		$milliwatts = $base->convertTo(UnitPower::milliwatts());
		$microwatts = $base->convertTo(UnitPower::microwatts());
		$nanowatts = $base->convertTo(UnitPower::nanowatts());
		$picowatts = $base->convertTo(UnitPower::picowatts());
		$femtowatts = $base->convertTo(UnitPower::femtowatts());
		$horsepower = $base->convertTo(UnitPower::horsepower());

		$this->assertTrue($terawatts->value() == 1E-12, "{$base} converted to terawatts should be equal to 1E-12 TW instead of {$terawatts}.");
		$this->assertTrue($gigawatts->value() == 1.0 / 1E+9, "{$base} converted to gigawatts should be equal to 1E-9 GW instead of {$gigawatts}.");
		$this->assertTrue($megawatts->value() == 1.0 / 1E+6, "{$base} converted to megawatts should be equal to 1E-6 MW instead of {$megawatts}.");
		$this->assertTrue($kilowatts->value() == 0.001, "{$base} converted to kilowatts should be equal to 0.001 kW instead of {$kilowatts}.");
		$this->assertTrue($watts->value() == 1.0, "{$base} converted to watts should be equal to 1 W instead of {$watts}.");
		$this->assertTrue($milliwatts->value() == 1000, "{$base} converted to milliwatts should be equal to 1000 mW instead of {$milliwatts}.");
		$this->assertTrue($microwatts->value() == 1.0 / 1E-6, "{$base} converted to microwatts should be equal to 1E+6 µW instead of {$microwatts}.");
		$this->assertTrue($nanowatts->value() == 1.0 / 1E-9, "{$base} converted to nanowatts should be equal to 1E+9 Wn instead of {$nanowatts}.");
		$this->assertTrue($picowatts->value() == 1.0 / 1E-12, "{$base} converted to picowatts should be equal to 1E+12 pW instead of {$picowatts}.");
		$this->assertTrue($femtowatts->value() == 1.0 / 1E-15, "{$base} converted to watts femtowatts be equal to 1E+15 fW instead of {$femtowatts}.");
		$this->assertTrue($horsepower->value() == 1.0 / 745.7, "{$base} converted to horsepower should be equal to 0.001341021859 hp instead of {$horsepower}.");
	}

}