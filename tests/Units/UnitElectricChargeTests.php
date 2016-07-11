<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitElectricCharge;

class UnitElectricChargeTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_coulombs_as_base_unit()
	{
		$this->assertTrue(UnitElectricCharge::baseUnit() == UnitElectricCharge::coulombs(), "Electric charge should define coulombs as its base unit.");
	}

	/** @test */
	public function it_converts_electric_charges()
	{
		$base = new Measurement(1, UnitElectricCharge::baseUnit());

		$coulombs = $base->convertTo(UnitElectricCharge::coulombs());
		$megaampereHours = $base->convertTo(UnitElectricCharge::megaampereHours());
		$kiloampereHours = $base->convertTo(UnitElectricCharge::kiloampereHours());
		$ampereHours = $base->convertTo(UnitElectricCharge::ampereHours());
		$milliampereHours = $base->convertTo(UnitElectricCharge::milliampereHours());
		$microampereHours = $base->convertTo(UnitElectricCharge::microampereHours());

		$this->assertTrue($coulombs->value() == 1.0, "{$base} converted to coulombs should be equal to 1 C instead of {$coulombs}.");
		$this->assertTrue($megaampereHours->value() == 1.0 / 3.6E+9, "{$base} converted to megaampere hours should be equal to 3.6E-9 MAh instead of {$megaampereHours}.");
		$this->assertTrue($kiloampereHours->value() == 1.0 / 3.6E+6, "{$base} converted to kiloampere hours should be equal to 3.6E-6 kAh instead of {$kiloampereHours}.");
		$this->assertTrue($ampereHours->value() == 1.0 / 3600.0, "{$base} converted to ampere hours should be equal to 0.0002777777778 Ah instead of {$ampereHours}.");
		$this->assertTrue($milliampereHours->value() == 1.0 / 3.6, "{$base} converted to milliampere hours should be equal to 0.2777777778 mAh instead of {$milliampereHours}.");
		$this->assertTrue($microampereHours->value() == 1.0 / 0.0036, "{$base} converted to microampere hours should be equal to 277.77777778 µAh instead of {$microampereHours}.");
	}

}