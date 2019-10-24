<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitFuelEfficiency;

class UnitFuelEfficiencyTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_liters_per_100_kilometers_as_base_unit()
	{
		$this->assertTrue(UnitFuelEfficiency::baseUnit() == UnitFuelEfficiency::litersPer100Kilometers(), "Fuel Efficiency should define liters per 100 kilometers as its base unit.");
	}

	/** @test */
	public function it_converts_fuel_efficiencies()
	{
		$base = new Measurement(1, UnitFuelEfficiency::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitFuelEfficiency::litersPer100Kilometers()), 1.0, $base, "liters per 100 kilometers");
		$this->assertMeasurementEquals($base->convertTo(UnitFuelEfficiency::milesPerGallon()), 235.215, $base, "miles per gallon");
		$this->assertMeasurementEquals($base->convertTo(UnitFuelEfficiency::milesPerImperialGallon()), 282.481, $base, "miles per imperial gallon");
		$this->assertMeasurementEquals($base->convertTo(UnitFuelEfficiency::kilometersPerLiter()), 100.0, $base, "kilometers per liter");

		$base = new Measurement(5, UnitFuelEfficiency::baseUnit());
		$this->assertEquals(20.0, $base->convertTo(UnitFuelEfficiency::kilometersPerLiter())->value());
	}

}
