<?php
/**
 * @Author: WenJun
 * @Date:   13-8-31 下午8:27
 * @Email:  wenjun1055@gmail.com
 * @File:   Cli.php
 * @Desc:   ...
 */
namespace Yaf\Response;

use Yaf;

class Cli extends Response_Abstract {
    /* constants */

    /* properties */
    protected $_header = NULL;
    protected $_body = NULL;
    protected $_sendheader = "";

    /* methods */
    public function __construct() {
    }
    public function __destruct() {
    }
    private function __clone() {
    }
    private function __toString() {
    }
    public function setBody() {
    }
    public function appendBody() {
    }
    public function prependBody() {
    }
    public function clearBody() {
    }
    public function getBody() {
    }
    public function setHeader() {
    }
    protected function setAllHeaders() {
    }
    public function getHeader() {
    }
    public function clearHeaders() {
    }
    public function setRedirect() {
    }
    public function response() {
    }
}