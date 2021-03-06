<?php

/**
 * FedEx Integration for Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2015 Rhyme Digital, LLC.
 *
 * @author		Blair Winans <blair@rhyme.digital>
 * @author		Adam Fisher <adam@rhyme.digital>
 * @link		http://rhyme.digital
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Shipping modules
 */
$GLOBALS['TL_LANG']['MODEL']['tl_iso_shipping.fedex_single'] 	= array('FedEx Live Rates and Service shipping');
$GLOBALS['TL_LANG']['MODEL']['tl_iso_shipping.fedex_multiple']	= array('FedEx Live Rates and Service shipping (with Multiple destination support)');

/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['MSC']['labelLabel'] = 'Shipping Label';
$GLOBALS['TL_LANG']['MSC']['trackingNumberLabel'] = 'Tracking Number';
$GLOBALS['TL_LANG']['MSC']['submitTimeInTransit'] = 'Submit';
$GLOBALS['TL_LANG']['MSC']['submitTracking'] = 'Track';
$GLOBALS['TL_LANG']['MSC']['serviceTitleLabel'] = 'Service';
$GLOBALS['TL_LANG']['MSC']['guaranteedLabel'] = 'Guaranteed';
$GLOBALS['TL_LANG']['MSC']['estimatedArrivalLabel'] = 'Est. Arrival';
$GLOBALS['TL_LANG']['MSC']['pickupDatimLabel'] = 'Pickup Cutoff';
$GLOBALS['TL_LANG']['MSC']['businessTransitDaysLabel'] = '# of Transit Days';
$GLOBALS['TL_LANG']['MSC']['upsTrackDatimLabel'] = 'Date/Time';
$GLOBALS['TL_LANG']['MSC']['upsTrackActivityLabel'] = 'Activity';
$GLOBALS['TL_LANG']['MSC']['upsTrackLocationLabel'] = 'Location';
$GLOBALS['TL_LANG']['MSC']['upsTrackDetailsLabel'] = 'Details';
$GLOBALS['TL_LANG']['MSC']['printShippingLabel'] = 'Print Shipping Label';
$GLOBALS['TL_LANG']['MSC']['noEnabledFedExServices'] = 'No FedEx services have been enabled for this store.';

/**
 * Reference
 */
$GLOBALS['TL_LANG']['MSC']['apiMode']['test']		= 'Test Mode';
$GLOBALS['TL_LANG']['MSC']['apiMode']['live']		= 'Live Mode';