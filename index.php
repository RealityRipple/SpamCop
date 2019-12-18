<?php

/**
 * index.php
 *
 * This file simply takes any attempt to view source files and sends those
 * people to the login screen. At this point no attempt is made to see if the
 * person is logged in or not.
 *
 * @copyright 1999-2018 The SquirrelMail Project Team
 * @modified 2018-2019 Andrew Sachen
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: index.php 1.3 2019-12-18 00:30:00Z realityripple $
 * @package plugins
 * @subpackage spamcop
 */

header('Location: ../index.php');

?>