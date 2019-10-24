<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitPressure;

class UnitPressureTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_newtons_per_meter_squared_as_base_unit()
	{
		$this->assertTrue(UnitPressure::baseUnit() == UnitPressure::newtonsPerMeterSquared(), "Pressure should define newtons per meter squared as its base unit.");
	}

	/** @test */
	public function it_converts_pressures()
	{
		$base = new Measurement(1, UnitPressure::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitPressure::newtonsPerMeterSquared()), 1.0, $base, "newtons per meter squared");
		$this->assertMeasurementEquals($base->convertTo(UnitPressure::gigapascals()), 1.0 / 1E+9, $base, "gigapascals");
		$this->assertMeasurementEquals($base->convertTo(UnitPressure::megapascals()), 1E-6, $base, "megapascals");
		$this->assertMeasurementEquals($base->convertTo(UnitPressure::kilopascals()), 0.001, $base, "kilopascals");
		$this->assertMeasurementEquals($base->convertTo(UnitPressure::hectopascals()), 0.01, $base, "hectopascals");
		$this->assertMeasurementEquals($base->convertTo(UnitPressure::pascals()), 1.0, $base, "pascals");
		$this->assertMeasurementEquals($base->convertTo(UnitPressure::inchesOfMercury()), 1.0 / 3386.39, $base, "inches of mercury");
		$this->assertMeasurementEquals($base->convertTo(UnitPressure::bars()), 1E-5, $base, "bars");
		$this->assertMeasurementEquals($base->convertTo(UnitPressure::millibars()), 0.01, $base, "millibars");
		$this->assertMeasurementEquals($base->convertTo(UnitPressure::millimetersOfMercury()), 1.0 / 133.322, $base, "millimeters of mercury");
		$this->assertMeasurementEquals($base->convertTo(UnitPressure::poundsPerSquareInch()), 1.0 / 6894.76, $base, "pounds per square inch");
	}

}