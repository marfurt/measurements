<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitArea;

class UnitAreaTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_square_meters_as_base_unit()
	{
		$this->assertTrue(UnitArea::baseUnit() == UnitArea::squareMeters(), "Area should define square meters as its base unit.");
	}

	/** @test */
	public function it_converts_areas()
	{
		$base = new Measurement(1, UnitArea::baseUnit());

		$squareMegameters = $base->convertTo(UnitArea::squareMegameters());
		$squareKilometers = $base->convertTo(UnitArea::squareKilometers());
		$squareMeters = $base->convertTo(UnitArea::squareMeters());
		$squareCentimeters = $base->convertTo(UnitArea::squareCentimeters());
		$squareMillimeters = $base->convertTo(UnitArea::squareMillimeters());
		$squareMicrometers = $base->convertTo(UnitArea::squareMicrometers());
		$squareNanometers = $base->convertTo(UnitArea::squareNanometers());
		$squareInches = $base->convertTo(UnitArea::squareInches());
		$squareFeet = $base->convertTo(UnitArea::squareFeet());
		$squareYards = $base->convertTo(UnitArea::squareYards());
		$squareMiles = $base->convertTo(UnitArea::squareMiles());
		$acres = $base->convertTo(UnitArea::acres());
		$ares = $base->convertTo(UnitArea::ares());
		$hectares = $base->convertTo(UnitArea::hectares());

		$this->assertTrue($squareMegameters->value() == 1.0 / 1E+12, "{$base} converted to square megameters should be equal to 1E-12 Mm² instead of {$squareMegameters}.");
		$this->assertTrue($squareKilometers->value() == 1.0 / 1E+6, "{$base} converted to square kilometers should be equal to 1E-6 km² instead of {$squareKilometers}.");
		$this->assertTrue($squareMeters->value() == 1.0, "{$base} converted to square meters should be equal to 1 m² instead of {$squareMeters}.");
		$this->assertTrue($squareCentimeters->value() == 10000, "{$base} converted to square centimeters should be equal to 10000 cm² instead of {$squareCentimeters}.");
		$this->assertTrue($squareMillimeters->value() == 1.0 / 1E-6, "{$base} converted to square millimeters should be equal to 1000000 mm² instead of {$squareMillimeters}.");
		$this->assertTrue($squareMicrometers->value() == 1.0 / 1E-12, "{$base} converted to square micrometers should be equal to 1E+12 µm² instead of {$squareMicrometers}.");
		$this->assertTrue($squareNanometers->value() == 1.0 / 1E-18, "{$base} converted to square nanometers should be equal to 1E+18 nm² instead of {$squareNanometers}.");
		$this->assertTrue($squareInches->value() == 1.0 / 0.00064516, "{$base} converted to square inches should be equal to 1550.0031 in² instead of {$squareInches}.");
		$this->assertTrue($squareFeet->value() == 1.0 / 0.092903, "{$base} converted to square feet should be equal to 10.763915051 ft² instead of {$squareFeet}.");
		$this->assertTrue($squareYards->value() == 1.0 / 0.836127, "{$base} converted to square yards should be equal to 1.1959905612 yd² instead of {$squareYards}.");
		$this->assertTrue($squareMiles->value() == 1.0 / 2.59E+6, "{$base} converted to square miles should be equal to 2.59E-6 mi² instead of {$squareMiles}.");
		$this->assertTrue($acres->value() == 1.0 / 4046.86, "{$base} converted to acres should be equal to 0.000247105163 ac instead of {$acres}.");
		$this->assertTrue($ares->value() == 0.01, "{$base} converted to ares should be equal to 0.01 a instead of {$ares}.");
		$this->assertTrue($hectares->value() == 0.0001, "{$base} converted to hectares should be equal to 0.0001 ha instead of {$hectares}.");
	}

}