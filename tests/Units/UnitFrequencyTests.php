<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitFrequency;

class UnitFrequencyTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_hertz_as_base_unit()
	{
		$this->assertTrue(UnitFrequency::baseUnit() == UnitFrequency::hertz(), "Frequency should define hertz as its base unit.");
	}

	/** @test */
	public function it_converts_frequencies()
	{
		$base = new Measurement(1, UnitFrequency::baseUnit());

		$terahertz = $base->convertTo(UnitFrequency::terahertz());
		$gigahertz = $base->convertTo(UnitFrequency::gigahertz());
		$megahertz = $base->convertTo(UnitFrequency::megahertz());
		$kilohertz = $base->convertTo(UnitFrequency::kilohertz());
		$hertz = $base->convertTo(UnitFrequency::hertz());
		$millihertz = $base->convertTo(UnitFrequency::millihertz());
		$microhertz = $base->convertTo(UnitFrequency::microhertz());
		$nanohertz = $base->convertTo(UnitFrequency::nanohertz());

		$this->assertTrue($terahertz->value() == 1.0 / 1E+12, "{$base} converted to terahertz should be equal to 1E-12 THz instead of {$terahertz}.");
		$this->assertTrue($gigahertz->value() == 1.0 / 1E+9, "{$base} converted to gigahertz should be equal to 1E-9 GHz instead of {$gigahertz}.");
		$this->assertTrue($megahertz->value() == 1.0 / 1E+6, "{$base} converted to megahertz should be equal to 1E-6 MHz instead of {$megahertz}.");
		$this->assertTrue($kilohertz->value() == 0.001, "{$base} converted to kilohertz should be equal to 0.001 kHz instead of {$kilohertz}.");
		$this->assertTrue($hertz->value() == 1.0, "{$base} converted to hertz should be equal to 1 Hz instead of {$hertz}.");
		$this->assertTrue($millihertz->value() == 1000, "{$base} converted to millihertz should be equal to 1000 mHz instead of {$millihertz}.");
		$this->assertTrue($microhertz->value() == 1.0 / 1E-6, "{$base} converted to microhertz should be equal to 1E+6 µHz instead of {$microhertz}.");
		$this->assertTrue($nanohertz->value() == 1.0 / 1E-9, "{$base} converted to nanohertz should be equal to 1E+9 nHz instead of {$nanohertz}.");
	}

}