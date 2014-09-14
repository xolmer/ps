<?php
/** EloquentMailRepository
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 8/29/14 11:15 PM
 */

namespace SaarangSlt\Repositories\TodoRepository;

use SaarangSlt\Repositories\BaseRepositoryInterface;

interface TodoRepositoryInterface extends BaseRepositoryInterface{


    /**
     * Create a Todo Task
     */
    public function create();

    /**
     * Check the Task as completed.
     */
    public function done();

    /**
     * Uncheck the completed Task
     */
    public function undone();

    /**
     * Delete the Task
     */
    public function delete();


    



} 