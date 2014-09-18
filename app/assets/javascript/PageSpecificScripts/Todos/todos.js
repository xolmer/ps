module.exports = function () {

    $(document).ready(function () {
        //Create a new todo
        $('input[name="newtodo"]').on('keypress', function (event) {
            if (event.which == 13) {
                var url = $('#createtodourl').val();
                var newTodo = $(this).val();
                $(this).val('');
                if ($.trim(newTodo).length) {
                    $.post(url, {newTodo: newTodo}).done(function(response){
                        var todo_entry = $('<li data-todo-id="' + response.id + '"><div class="checkbox checkbox-replace color-white"><input type="checkbox" /><label>' + newTodo + '</label></div></li>');
                        var todo_tasks = $("#todo_tasks");
                        todo_entry.prependTo(todo_tasks.find('.todo-list'));
                        todo_entry.hide().slideDown('fast');
                        replaceCheckboxes();
                    });
                }
            }
        });

        //Toggle todo state
        $('.todo-list').on('mouseup', '.cb-wrapper', function () {
            var todoID = $(this).parents('li').data('todo-id');
            var url = $('#checktodourl').val();
            var checkedStatus = !$(this).parent().hasClass('checked');
            $.post(url, {todo_id: todoID, checked: checkedStatus});
        });

        //Delete done todos
        $('#deleteDoneTodos').on('click',function(){
            var url = $('#deletetodourl').val();
            $.post(url).done(function(){
                var checkedTodos = $('.todo-list').find('.checkbox.checked');
                checkedTodos.each(function(index,element){
                    $(element).parent().fadeOut('fast','swing',function(){
                       $(element).remove();
                    });

                });
            });
        });


    });

}