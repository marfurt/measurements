<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitPower;

class UnitPowerTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_watts_as_base_unit()
	{
		$this->assertTrue(UnitPower::baseUnit() == UnitPower::watts(), "Power should define watts as its base unit.");
	}

	/** @test */
	public function it_converts_powers()
	{
		$base = new Measurement(1, UnitPower::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitPower::terawatts()), 1.0 / 1E+12, $base, "terawatts");
		$this->assertMeasurementEquals($base->convertTo(UnitPower::gigawatts()), 1.0 / 1E+9, $base, "gigawatts");
		$this->assertMeasurementEquals($base->convertTo(UnitPower::megawatts()), 1.0 / 1E+6, $base, "megawatts");
		$this->assertMeasurementEquals($base->convertTo(UnitPower::kilowatts()), 0.001, $base, "kilowatts");
		$this->assertMeasurementEquals($base->convertTo(UnitPower::watts()), 1.0, $base, "watts");
		$this->assertMeasurementEquals($base->convertTo(UnitPower::milliwatts()), 1000, $base, "milliwatts");
		$this->assertMeasurementEquals($base->convertTo(UnitPower::microwatts()), 1.0 / 1E-6, $base, "microwatts");
		$this->assertMeasurementEquals($base->convertTo(UnitPower::nanowatts()), 1.0 / 1E-9, $base, "nanowatts");
		$this->assertMeasurementEquals($base->convertTo(UnitPower::picowatts()), 1.0 / 1E-12, $base, "picowatts");
		$this->assertMeasurementEquals($base->convertTo(UnitPower::femtowatts()), 1.0 / 1E-15, $base, "femtowatts");
		$this->assertMeasurementEquals($base->convertTo(UnitPower::horsepower()), 1.0 / 745.7, $base, "horsepower");
	}

}