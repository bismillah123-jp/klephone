<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/userguide3/general/hooks.html
|
*/

require_once FCPATH . 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(FCPATH);
$dotenv->load();
