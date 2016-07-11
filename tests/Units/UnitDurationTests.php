<?php namespace Tests\Units;

use PHPUnit_Framework_TestCase;
use Measurements\Measurement;
use Measurements\Units\UnitDuration;

class UnitDurationTests extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_defines_seconds_as_base_unit()
	{
		$this->assertTrue(UnitDuration::baseUnit() == UnitDuration::seconds(), "Duration should define seconds as its base unit.");
	}

	/** @test */
	public function it_converts_durations()
	{
		$base = new Measurement(3600, UnitDuration::baseUnit());

		$seconds = $base->convertTo(UnitDuration::seconds());
		$minutes = $base->convertTo(UnitDuration::minutes());
		$hours = $base->convertTo(UnitDuration::hours());

		$this->assertTrue($seconds->value() == 3600, "{$base} converted to seconds should be equal to 3600 sec instead of {$seconds}.");
		$this->assertTrue($minutes->value() == 60, "{$base} converted to seconds should be equal to 60 min instead of {$minutes}.");
		$this->assertTrue($hours->value() == 1, "{$base} sec converted to seconds should be equal to 1 hr instead of {$hours}.");
	}

}