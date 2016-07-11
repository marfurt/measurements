<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitTemperature;

class UnitTemperatureTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_kelvin_as_base_unit()
	{
		$this->assertTrue(UnitTemperature::baseUnit() == UnitTemperature::kelvin(), "Temperature should define kelvin as its base unit.");
	}

	/** @test */
	public function it_converts_temperatures()
	{
		$base = new Measurement(1, UnitTemperature::baseUnit());

		$kelvin = $base->convertTo(UnitTemperature::kelvin());
		$celsius = $base->convertTo(UnitTemperature::celsius());
		$fahrenheit = $base->convertTo(UnitTemperature::fahrenheit());

		$this->assertTrue($kelvin->value() == 1.0, "{$base} converted to kelvin should be equal to 1 k instead of {$kelvin}.");
		$this->assertTrue(round($celsius->value(), 2) == -272.15, "{$base} converted to degree Celsius should be equal to -272.15 °C instead of {$celsius}.");
		$this->assertTrue(round($fahrenheit->value(), 2) == -457.87, "{$base} converted to degree Fahrenheit should be equal to -457.87 °F instead of {$fahrenheit}.");
	}

}