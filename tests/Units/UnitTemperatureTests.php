<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitTemperature;

class UnitTemperatureTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_kelvin_as_base_unit()
	{
		$this->assertTrue(UnitTemperature::baseUnit() == UnitTemperature::kelvin(), "Temperature should define kelvin as its base unit.");
	}

	/** @test */
	public function it_converts_temperatures()
	{
		$base = new Measurement(1, UnitTemperature::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitTemperature::kelvin()), 1.0, $base, "kelvin");
		$this->assertMeasurementEquals($base->convertTo(UnitTemperature::celsius()), -272.15, $base, "degree Celsius");
		$this->assertMeasurementEquals($base->convertTo(UnitTemperature::fahrenheit()), -457.87, $base, "degree Fahrenheit");
	}

}