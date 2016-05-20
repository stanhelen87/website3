<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 08.04.2016
 * Time: 15:54
 */

require_once(dirname(__FILE__)."/Include_lena/logging.php");
require_once(dirname(__FILE__)."/Include_lena/system.php");
require_once(dirname(__FILE__)."/Include_lena/geoip.php");
require_once(dirname(__FILE__)."/Include_lena/geoip/geoip.inc");
require_once(dirname(__FILE__)."/Include_lena/geoip/geoipcity.inc");
require_once(dirname(__FILE__)."/Include_lena/geoip/geoipregionvars.php");


$detected_country = get_countrycode_by_ip();
var_dump($detected_country);