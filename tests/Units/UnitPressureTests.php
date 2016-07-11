<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitPressure;

class UnitPressureTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_newtons_per_meter_squared_as_base_unit()
	{
		$this->assertTrue(UnitPressure::baseUnit() == UnitPressure::newtonsPerMeterSquared(), "Pressure should define newtons per meter squared as its base unit.");
	}

	/** @test */
	public function it_converts_pressures()
	{
		$base = new Measurement(1, UnitPressure::baseUnit());

		$newtonsPerMeterSquared = $base->convertTo(UnitPressure::newtonsPerMeterSquared());
		$gigapascals = $base->convertTo(UnitPressure::gigapascals());
		$megapascals = $base->convertTo(UnitPressure::megapascals());
		$kilopascals = $base->convertTo(UnitPressure::kilopascals());
		$hectopascals = $base->convertTo(UnitPressure::hectopascals());
		$pascals = $base->convertTo(UnitPressure::pascals());
		$inchesOfMercury = $base->convertTo(UnitPressure::inchesOfMercury());
		$bars = $base->convertTo(UnitPressure::bars());
		$millibars = $base->convertTo(UnitPressure::millibars());
		$millimetersOfMercury = $base->convertTo(UnitPressure::millimetersOfMercury());
		$poundsPerSquareInch = $base->convertTo(UnitPressure::poundsPerSquareInch());

		$this->assertTrue($newtonsPerMeterSquared->value() == 1.0, "{$base} converted to newtons per meter squared should be equal to 1 N/m² instead of {$newtonsPerMeterSquared}.");
		$this->assertTrue($gigapascals->value() == 1.0 / 1E+9, "{$base} converted to gigapascals should be equal to 1E-9 GPA instead of {$gigapascals}.");
		$this->assertTrue($megapascals->value() == 1E-6, "{$base} converted to megapascals should be equal to 1E-6 MPA instead of {$megapascals}.");
		$this->assertTrue($kilopascals->value() == 0.001, "{$base} converted to kilopascals should be equal to 0.001 kPA instead of {$kilopascals}.");
		$this->assertTrue($hectopascals->value() == 0.01, "{$base} converted to hectopascals should be equal to 0.01 hPA instead of {$hectopascals}.");
		$this->assertTrue($pascals->value() == 1.0, "{$base} converted to pascals should be equal to 1 Pa instead of {$pascals}.");
		$this->assertTrue($inchesOfMercury->value() == 1.0 / 3386.39, "{$base} converted to inches of mercury should be equal to 0.0002952997144 inHg instead of {$inchesOfMercury}.");
		$this->assertTrue($bars->value() == 1E-5, "{$base} converted to bars should be equal to 1E-5 bar instead of {$bars}.");
		$this->assertTrue($millibars->value() == 0.01, "{$base} converted to millibars should be equal to 0.01 mbar instead of {$millibars}.");
		$this->assertTrue($millimetersOfMercury->value() == 1.0 / 133.322, "{$base} converted to millimeters of mercury should be equal to 0.007500637554 mmHg instead of {$millimetersOfMercury}.");
		$this->assertTrue($poundsPerSquareInch->value() == 1.0 / 6894.76, "{$base} converted to pounds per square inch should be equal to 0.0001450376808 psi instead of {$poundsPerSquareInch}.");
	}

}