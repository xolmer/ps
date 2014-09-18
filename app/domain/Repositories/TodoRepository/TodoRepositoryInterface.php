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
     * @param $task
     * @param $user_id
     * @return mixed
     */
    public function create($task,$user_id);


    /**
     * @param $task
     * @return mixed
     */
    public function check($todoID,$isDone);


    /**
     * @param $user
     * @return mixed
     */
    public function delete($user_id);


    



} 