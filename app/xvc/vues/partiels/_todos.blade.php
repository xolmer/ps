<div class="col-sm-3">

    <div class="tile-block" id="todo_tasks">

        <div class="tile-header">
            <i class="entypo-list"></i>

            <a href="#">
                {{Lang::get('words.thingsIMustDo')}}
            <span>{{Lang::get('words.checkDoneItems')}}</span>
            </a>
        </div>

        <div class="tile-content">
        {{Form::hidden('createtodourl',URL::route('todos.create'),array('id' => 'createtodourl'))}}
        {{Form::hidden('checktodourl',URL::route('todos.check'),array('id' => 'checktodourl'))}}
        {{Form::hidden('deletetodourl',URL::route('todos.delete'),array('id' => 'deletetodourl'))}}
            <input type="text" name="newtodo" class="form-control"  placeholder="{{Lang::get('words.newItem')}}"/>
            <ul class="todo-list">
                @foreach($todos as $todo)
                    <li data-todo-id="{{$todo->id}}">
                       <div class="checkbox checkbox-replace color-white ">
                            <input name="task" value="{{$todo->id}}" type="checkbox" {{$todo->done ? 'checked' : ''}}/>
                            <label>{{$todo->title}}</label>
                       </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="tile-footer">
            <a href="#" id="deleteDoneTodos" >{{Lang::get('words.deleteDoneItems')}}</a>
        </div>

    </div>


</div>