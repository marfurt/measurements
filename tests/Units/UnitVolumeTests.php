<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitVolume;

class UnitVolumeTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_liters_as_base_unit()
	{
		$this->assertTrue(UnitVolume::baseUnit() == UnitVolume::liters(), "Volume should define liters as its base unit.");
	}

	/** @test */
	public function it_converts_volumes()
	{
		$base = new Measurement(1, UnitVolume::baseUnit());

		$liters = $base->convertTo(UnitVolume::liters());
		$megaliters = $base->convertTo(UnitVolume::megaliters());
		$kiloliters = $base->convertTo(UnitVolume::kiloliters());
		$deciliters = $base->convertTo(UnitVolume::deciliters());
		$centiliters = $base->convertTo(UnitVolume::centiliters());
		$milliliters = $base->convertTo(UnitVolume::milliliters());
		$cubicKilometers = $base->convertTo(UnitVolume::cubicKilometers());
		$cubicMeters = $base->convertTo(UnitVolume::cubicMeters());
		$cubicDecimeters = $base->convertTo(UnitVolume::cubicDecimeters());
		$cubicMillimeters = $base->convertTo(UnitVolume::cubicMillimeters());
		$cubicInches = $base->convertTo(UnitVolume::cubicInches());
		$cubicFeet = $base->convertTo(UnitVolume::cubicFeet());
		$cubicYards = $base->convertTo(UnitVolume::cubicYards());
		$cubicMiles = $base->convertTo(UnitVolume::cubicMiles());
		$acreFeet = $base->convertTo(UnitVolume::acreFeet());
		$bushels = $base->convertTo(UnitVolume::bushels());
		$teaspoons = $base->convertTo(UnitVolume::teaspoons());
		$tablespoons = $base->convertTo(UnitVolume::tablespoons());
		$fluidOunces = $base->convertTo(UnitVolume::fluidOunces());
		$cups = $base->convertTo(UnitVolume::cups());
		$pints = $base->convertTo(UnitVolume::pints());
		$quarts = $base->convertTo(UnitVolume::quarts());
		$gallons = $base->convertTo(UnitVolume::gallons());
		$imperialTeaspoons = $base->convertTo(UnitVolume::imperialTeaspoons());
		$imperialTablespoons = $base->convertTo(UnitVolume::imperialTablespoons());
		$imperialFluidOunces = $base->convertTo(UnitVolume::imperialFluidOunces());
		$imperialPints = $base->convertTo(UnitVolume::imperialPints());
		$imperialQuarts = $base->convertTo(UnitVolume::imperialQuarts());
		$imperialGallons = $base->convertTo(UnitVolume::imperialGallons());
		$metricCups = $base->convertTo(UnitVolume::metricCups());

		$this->assertTrue($liters->value() == 1.0, "{$base} converted to liters should be equal to 1 l instead of {$liters}.");
		$this->assertTrue($megaliters->value() == 1.0 / 1000000.0, "{$base} converted to megaliters should be equal to 1000000 Ml instead of {$megaliters}.");
		$this->assertTrue($kiloliters->value() == 1.0 / 1000.0, "{$base} converted to kiloliters should be equal to 0.001 kl instead of {$kiloliters}.");
		$this->assertTrue($deciliters->value() == 1.0 / 0.1, "{$base} converted to deciliters should be equal to 10 dl instead of {$deciliters}.");
		$this->assertTrue($centiliters->value() == 1.0 / 0.01, "{$base} converted to centiliters should be equal to 100 cl instead of {$centiliters}.");
		$this->assertTrue($milliliters->value() == 1.0 / 0.001, "{$base} converted to milliliters should be equal to 1000 ml instead of {$milliliters}.");
		$this->assertTrue($cubicKilometers->value() == 1E-12, "{$base} converted to cubic kilometers should be equal to 1E-12 km³ instead of {$cubicKilometers}.");
		$this->assertTrue($cubicMeters->value() == 1.0 / 1000.0, "{$base} converted to cubic meters should be equal to 0.001 m³ instead of {$cubicMeters}.");
		$this->assertTrue($cubicDecimeters->value() == 1.0, "{$base} converted to cubic decimeters should be equal to 1 dm³ instead of {$cubicDecimeters}.");
		$this->assertTrue($cubicMillimeters->value() == 1000, "{$base} converted to cubic millimeters should be equal to 1000 mm³ instead of {$cubicMillimeters}.");
		$this->assertTrue($cubicInches->value() == 1.0 / 0.0163871, "{$base} converted to cubic inches should be equal to 61.023610035 in³ instead of {$cubicInches}.");
		$this->assertTrue($cubicFeet->value() == 1.0 / 28.3168, "{$base} converted to cubic feet should be equal to 0.03531472483 ft³ instead of {$cubicFeet}.");
		$this->assertTrue($cubicYards->value() == 1.0 / 764.555, "{$base} converted to cubic yards should be equal to 0.001307950376 yd³ instead of {$cubicYards}.");
		$this->assertTrue($cubicMiles->value() == 1.0 / 4.168E+12, "{$base} converted to cubic miles should be equal to 4.168E-12 mi³ instead of {$cubicMiles}.");
		$this->assertTrue($acreFeet->value() == 1.0 / 1.233E+6, "{$base} converted to acre feet should be equal to 1.233E-6 af instead of {$acreFeet}.");
		$this->assertTrue($bushels->value() == 1.0 / 35.2391, "{$base} converted to bushels should be equal to 0.02837756923 bsh instead of {$bushels}.");
		$this->assertTrue($teaspoons->value() == 1.0 / 0.00492892, "{$base} converted to teaspoons should be equal to 202.88420181 tsp instead of {$teaspoons}.");
		$this->assertTrue($tablespoons->value() == 1.0 / 0.0147868, "{$base} converted to tablespoons should be equal to 67.627884329 tbsp instead of {$tablespoons}.");
		$this->assertTrue($fluidOunces->value() == 1.0 / 0.0295735, "{$base} converted to fluid ounces should be equal to 33.814056503 fl oz instead of {$fluidOunces}.");
		$this->assertTrue($cups->value() == 1.0 / 0.24, "{$base} converted to cups should be equal to 4.1666666667 cup instead of {$cups}.");
		$this->assertTrue($pints->value() == 1.0 / 0.473176, "{$base} converted to pints should be equal to 2.1133785315 pt instead of {$pints}.");
		$this->assertTrue($quarts->value() == 1.0 / 0.946353, "{$base} converted to quarts should be equal to 1.0566881491 qt instead of {$quarts}.");
		$this->assertTrue($gallons->value() == 1.0 / 3.78541, "{$base} converted to gallons should be equal to 0.2641721769 gl instead of {$gallons}.");
		$this->assertTrue($imperialTeaspoons->value() == 1.0 / 0.00591939, "{$base} converted to imperial teaspoons should be equal to 168.93632621 tsp instead of {$imperialTeaspoons}.");
		$this->assertTrue($imperialTablespoons->value() == 1.0 / 0.0177582, "{$base} converted to imperial tablespoons should be equal to 56.312013605 tbsp instead of {$imperialTablespoons}.");
		$this->assertTrue($imperialFluidOunces->value() == 1.0 / 0.0284131, "{$base} converted to imperial fluid ounces should be equal to 35.195033277 fl oz instead of {$imperialFluidOunces}.");
		$this->assertTrue($imperialPints->value() == 1.0 / 0.568261, "{$base} converted to imperial pints should be equal to 1.7597547606 pt instead of {$imperialPints}.");
		$this->assertTrue($imperialQuarts->value() == 1.0 / 1.13652, "{$base} converted to imperial quarts should be equal to 0.8798789287 qt instead of {$imperialQuarts}.");
		$this->assertTrue($imperialGallons->value() == 1.0 / 4.54609, "{$base} converted to imperial gallons should be equal to 0.2199692483 gal instead of {$imperialGallons}.");
		$this->assertTrue($metricCups->value() == 4, "{$base} converted to metric cups should be equal to 4 metric cup instead of {$metricCups}.");
	}

}