<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitElectricCharge;

class UnitElectricChargeTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_coulombs_as_base_unit()
	{
		$this->assertTrue(UnitElectricCharge::baseUnit() == UnitElectricCharge::coulombs(), "Electric charge should define coulombs as its base unit.");
	}

	/** @test */
	public function it_converts_electric_charges()
	{
		$base = new Measurement(1, UnitElectricCharge::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitElectricCharge::coulombs()), 1.0, $base, "coulombs");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricCharge::megaampereHours()), 1.0 / 3.6E+9, $base, "megaampere hours");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricCharge::kiloampereHours()), 1.0 / 3.6E+6, $base, "kiloampere hours");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricCharge::ampereHours()), 1.0 / 3600.0, $base, "ampere hours");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricCharge::milliampereHours()), 1.0 / 3.6, $base, "milliampere hours");
		$this->assertMeasurementEquals($base->convertTo(UnitElectricCharge::microampereHours()), 1.0 / 0.0036, $base, "microampere hours");
	}

}