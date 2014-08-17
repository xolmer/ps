<?php
/**
 * BaseRepositoryInterface.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 7/26/14 5:11 PM
 */

namespace SaarangSlt\Repositories;


interface BaseRepositoryInterface {

    function all();

    function findById($id);
} 