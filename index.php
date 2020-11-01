<?php

/**
 * index.php
 *
 * This file simply takes any attempt to view source files and sends those
 * people to the login screen. At this point no attempt is made to see if the
 * person is logged in or not.
 *
 * @copyright 1999-2020 The SquirrelMail Project Team
 * @modified 2018-2020 Andrew Sachen
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: index.php 1.4 2020-11-01 23:50:00Z realityripple $
 * @package plugins
 * @subpackage spamcop
 */

header('Location: ../index.php');

?>