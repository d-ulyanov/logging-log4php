<?php
/**
 * Copyright 2004 The Apache Software Foundation.
 *
 * This software is published under the terms of the Apache Software
 * License version 2.0, a copy of which has been included with this
 * distribution in the LICENSE file.
 * 
 * @package tests
 * @author Marco Vassura
 * @subpackage loggers
 * @version $Revision$
 * @since 0.6
 */

/**
 */
require_once('./MyLogger.php');

$mylogger =& MyLogger::getInstance("myTest");

$mylogger->debug('this is a DEBUG log generated by main() function');
$mylogger->info('this is an INFO log generated by main() function');
$mylogger->warn('this is a WARN log generated by main() function');
$mylogger->error('this is an ERROR log generated by main() function');
$mylogger->fatal('this is a FATAL log generated by main() function');

?>