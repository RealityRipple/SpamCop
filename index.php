<?php

/**
 * index.php
 *
 * This file simply takes any attempt to view source files and sends those
 * people to the login screen. At this point no attempt is made to see if the
 * person is logged in or not.
 *
 * @copyright 1999-2018 The SquirrelMail Project Team
 * @modified 2018 Andrew Sachen
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: index.php 1.1 2018-05-13 02:00:00Z realityripple $
 * @package plugins
 * @subpackage spamcop
 */

header('Location: ../index.php');

?>