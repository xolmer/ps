<?php
/**
 * EloquentMailRepository.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 8/29/14 11:15 PM
 */

namespace SaarangSlt\Repositories\TodoRepository;



use Illuminate\Support\Facades\Redirect;

class EloquentTodoRepository implements TodoRepositoryInterface {

   
    
   

    function all()
    {
        // TODO: Implement all() method.
    }

    function findById($id)
    {

        return \Todo::findOrFail($id);


    }
    /**
     * @param $task
     * @param $user_id
     * @return mixed
     */
    public function create($task,$user_id)
    {
        $newMail = \Todo::create(array(
            'title' => $task,
            'user_id' => $user_id
        ));
        return Redirect::back()->send();
    }

    /**
     * Check the Task as completed.
     */
    public function check($todoID,$isDone)
    {
        $this->findById($todoID)->update(['done' => $isDone]);
    }

    /**
     * @param $user
     * @return mixed
     */
    public function delete($user)
    {
        $user->todos()->where('done',true)->delete();
        return Redirect::back()->send();
    }


}