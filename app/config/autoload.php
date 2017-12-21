<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('pagination', 'xmlrpc', 'form_validation', 'email', 'upload');

$autoload['drivers'] = array();

$autoload['helper'] = array('url', 'file', 'form', 'security', 'string', 'inflector', 'directory', 'download', 'multi_language', 'imronreviady');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('email_model', 'core_model', 'sms_model');
