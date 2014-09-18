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
        return $this->todoRepo->create(Input::get('newTodo'),$this->userRepo->currentUser()->id);
    }
    public function postCheck()
    {
        $todoID = Input::get('todo_id');
        $isDone = Input::get('checked') == 'true' ? true : false;
        $this->todoRepo->check($todoID,$isDone);
    }
    public function delete()
    {
        $this->todoRepo->delete($this->userRepo->currentUser());
    }


}