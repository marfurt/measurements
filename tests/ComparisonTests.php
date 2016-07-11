<?php namespace Tests;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitLength;
use Measurements\Units\UnitDuration;
use Measurements\Exceptions\UnitException;

class ComparisonTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function compared_measurements_must_have_same_units()
	{
		$meters = new Measurement(10, UnitLength::meters());
		$centimeters = new Measurement(10, UnitLength::centimeters());
		$seconds = new Measurement(10, UnitDuration::seconds());

		$comparison = function($lhs, $rhs) { return 0; };

		$this->assertTrue($meters->compareTo($centimeters, $comparison) == 0, "Meters should be compared to centimeters.");

		$this->setExpectedException(UnitException::class);
		$meters->compareTo($seconds, $comparison);
	}

	/** @test */
	public function a_measurement_can_be_compared()
	{
		$big = new Measurement(10, UnitLength::meters());
		$small = new Measurement(5, UnitLength::meters());
		$smaller = new Measurement(20, UnitLength::centimeters());
		$equal = new Measurement(1000, UnitLength::centimeters());

		$this->assertTrue($big->isGreaterThan($small), "{$big} should be greater than {$small}");
		$this->assertTrue($big->isGreaterThan($smaller), "{$big} should be greater than {$smaller}");

		$this->assertTrue($small->isLessThan($big), "{$small} should be less than {$big}");
		$this->assertTrue($smaller->isLessThan($big), "{$smaller} should be less than {$big}");

		$this->assertTrue($big->isEqualTo($equal), "{$big} should be equal to {$equal}");
		$this->assertTrue($big->isGreaterThanOrEqualTo($equal), "{$big} should be greater than or equal to {$equal}");
		$this->assertTrue($big->isLessThanOrEqualTo($equal), "{$big} should be less than or equal to {$equal}");
	}

}