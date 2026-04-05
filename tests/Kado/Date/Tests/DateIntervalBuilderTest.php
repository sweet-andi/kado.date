<?php



namespace Kado\Date\Tests;

if ( ! defined( 'KADO_NO_ERROR_HANDLER' ) )
{
    define( 'KADO_NO_ERROR_HANDLER', 1 );
}

use Kado\Date\DateIntervalBuilder;
use PHPUnit\Framework\TestCase;


class DateIntervalBuilderTest extends TestCase
{

    public function setUp() : void
    {

        parent::setUp();

    }

    /**
     * @throws \Exception
     */
    public function test_Init()
    {

        $interval = DateIntervalBuilder::Init()
                                           ->setYears( 2 )->setMonths( 6 )->setDays( 12 )
                                           ->setHours( 8 )->setMinutes( 27 )->setSeconds( 14 )
                                           ->toDateInterval();

        $this->assertSame( 2, $interval->y );
        $this->assertSame( 6, $interval->m );
        $this->assertSame( 12, $interval->d );
        $this->assertSame( 8, $interval->h );
        $this->assertSame( 27, $interval->i );
        $this->assertSame( 14, $interval->s );

    }


}
