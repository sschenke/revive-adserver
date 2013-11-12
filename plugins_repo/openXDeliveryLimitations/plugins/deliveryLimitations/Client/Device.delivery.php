<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

/**
 * @package    OpenXPlugin
 * @subpackage DeliveryLimitations
 * @author     Chris Nutting <chris.nutting@openx.org>
 * @author     Andrzej Swedrzynski <andrzej.swedrzynski@openx.org>
 * @author     Sascha Schenke <sschenke@chip.de>
 */
require_once MAX_PATH . '/lib/max/Delivery/limitations.delivery.php';
/**
 * Check to see if this impression contains the valid device.
 *
 * @param string $limitation The device (or comma list of devices) limitation
 * @param string $op The operator ('==', '!=', '=~', '!~')
 * @param array $aParams An array of additional parameters to be checked
 * @return boolean Whether this impression's device passes this limitation's test.
 */
function MAX_checkClient_Device($limitation, $op, $aParams = array())
{
    if (empty($aParams)) {
        $aParams = $GLOBALS['_MAX']['CLIENT'];
    }
    return MAX_limitationsMatchArray('device', $limitation, $op, $aParams);
}
?>