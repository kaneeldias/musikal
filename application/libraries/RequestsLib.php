<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."/third_party/Requests/Requests.php";
require_once APPPATH."/third_party/Requests/Requests/Hooker.php";
require_once APPPATH."/third_party/Requests/Requests/Hooks.php";

class RequestsLib {
    public function __construct() {
        Requests::register_autoloader();
    }
}

?>