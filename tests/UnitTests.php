<?php namespace Tests;

use PHPUnit\Framework\TestCase;
use Measurements\Units\UnitLength;
use Measurements\Units\UnitDuration;

class UnitTests extends TestCase {

	/** @test */
	public function units_can_be_checked_for_equality()
	{
		$meters = UnitLength::meters();
		$kilometers = UnitLength::kilometers();
		$hours = UnitDuration::hours();

		$this->assertFalse($meters->isEqualTo($kilometers), "Meters unit should not be equal to kilometers unit.");
		$this->assertFalse($meters->isEqualTo($hours), "Meters unit should not be equal to hours unit.");
		$this->assertTrue($meters->isEqualTo(UnitLength::meters()), "An instance of meters unit should be equal to another instance of meters unit.");
	}

}