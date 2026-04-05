<?php
/**
 * @author         Sweet Andi
 * @copyright    © 2026, Sweet Andi
 * @package        Kado\Date
 * @since          2026-04-05
 * @version        1.0.0
 */


declare( strict_types=1 );


namespace Kado\Date;


/**
 * The Kado\Date\TimeFormat enumeration.
 */
enum TimeFormat : string
{


    /**
     * 24 hour format 'H:i:s' e.g.: '21:24:00'
     */
    case FULL_24H = 'H:i:s';

    /**
     * 24 hour short format 'H:i' e.g: '21:24'
     */
    case SHORT_24H = 'H:i';

    /**
     * 12 hour format 'h:i:s A' e.g.: '09:24:00 AM'
     */
    case FULL_12H = 'h:i:s A';

    /**
     * 12 hour short format 'h:i A' e.g: '09:24 PM'
     */
    case SHORT_12H = 'H:i A';


}

