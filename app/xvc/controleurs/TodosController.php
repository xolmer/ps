<?php
/** 
 * User: Kaveh Aidi
 * Date: 9/14/14
 */
use SaarangSlt\Repositories\UserRepository\UserRepositoryInterface;
use SaarangSlt\Repositories\TodoRepository\TodoRepositoryInterface;
class TodosController extends \BaseController {
    private $todoRepo;
    private $userRepo;
    function __construct(UserRepositoryInterface $userRepo, TodoRepositoryInterface $todoRepo)
    {
        $this->userRepo = $userRepo;
        $this->todoRepo = $todoRepo;
    }


    public function postCreate()
    {
        $this->todoRepo->create(Input::get('newTask'),$this->userRepo->currentUser()->id);
    }
    public function postCheck()
    {

        $task = $this->todoRepo->findById(Input::get('task'));
        $this->todoRepo->check($task);
    }
    public function delete()
    {
        $this->todoRepo->delete($this->userRepo->currentUser());
    }


}