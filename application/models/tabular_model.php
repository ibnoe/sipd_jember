<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * @author Mahendri Winata <mahen.0112@gmail.com>
 */

class Tabular_model extends App_Model {

  public $table = 'tabulars';

  function __construct() {
    parent::__construct();
  }

}

?>