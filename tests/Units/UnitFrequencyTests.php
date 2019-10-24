<?php namespace Tests\Units;

use PHPUnit\Framework\TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitFrequency;

class UnitFrequencyTests extends TestCase {

	use InteractsWithUnits;

	/** @test */
	public function it_defines_hertz_as_base_unit()
	{
		$this->assertTrue(UnitFrequency::baseUnit() == UnitFrequency::hertz(), "Frequency should define hertz as its base unit.");
	}

	/** @test */
	public function it_converts_frequencies()
	{
		$base = new Measurement(1, UnitFrequency::baseUnit());

		$this->assertMeasurementEquals($base->convertTo(UnitFrequency::terahertz()), 1.0 / 1E+12, $base, "terahertz");
		$this->assertMeasurementEquals($base->convertTo(UnitFrequency::gigahertz()), 1.0 / 1E+9, $base, "gigahertz");
		$this->assertMeasurementEquals($base->convertTo(UnitFrequency::megahertz()), 1.0 / 1E+6, $base, "megahertz");
		$this->assertMeasurementEquals($base->convertTo(UnitFrequency::kilohertz()), 0.001, $base, "kilohertz");
		$this->assertMeasurementEquals($base->convertTo(UnitFrequency::hertz()), 1.0, $base, "hertz");
		$this->assertMeasurementEquals($base->convertTo(UnitFrequency::millihertz()), 1000, $base, "millihertz");
		$this->assertMeasurementEquals($base->convertTo(UnitFrequency::microhertz()), 1.0 / 1E-6, $base, "microhertz");
		$this->assertMeasurementEquals($base->convertTo(UnitFrequency::nanohertz()), 1.0 / 1E-9, $base, "nanohertz");
	}

}