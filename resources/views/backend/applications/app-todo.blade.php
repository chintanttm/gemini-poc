@extends('backend.layouts.app')

@section('title', __('App Todo'))

@section('content')
<div class="row g-3 row-deck">
    <div class="col-12">
        <div class="card my-todo">
            <div class="card-header">
                <h6 class="mb-0">My Todo list</h6>
            </div>
            <div class="bg-light todo-wrapper p-4">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="TodoInput" placeholder="What you need to do, sir?">
                    <label>What you need to do, sir?</label>
                </div>
                <button type="button" class="btn btn-success btn-todo-add">Add</button>
                <button type="button" class="btn btn-secondary btn-todo-hide" onclick="toggleHide()">Delete All</button>
                <span class="todo-error text-danger small ms-3" style="display: none;">Input can't be empty!</span>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0 todo-list">
                    <li>
                        <span>Weekly Bigbazar Shopping</span>
                        <div class="todo-action">
                            <span class="btn done p-1 fa fa-check"></span>
                            <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                        </div>
                    </li>
                    <li class="active">
                        <span>Pay the electricity bills</span>
                        <div class="todo-action">
                            <span class="btn done p-1 fa fa-check"></span>
                            <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                        </div>
                    </li>
                    <li>
                        <span>Contrary to popular belief, Lorem Ipsum is not simply random text</span>
                        <div class="todo-action">
                            <span class="btn done p-1 fa fa-check"></span>
                            <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                        </div>
                    </li>
                    <li>
                        <span>Make dinner reservation</span>
                        <div class="todo-action">
                            <span class="btn done p-1 fa fa-check"></span>
                            <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                        </div>
                    </li>
                    <li class="active">
                        <span>All the Lorem Ipsum generators on the Internet</span>
                        <div class="todo-action">
                            <span class="btn done p-1 fa fa-check"></span>
                            <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                        </div>
                    </li>
                    <li class="active">
                        <span>Many desktop publishing packages and web page editors</span>
                        <div class="todo-action">
                            <span class="btn done p-1 fa fa-check"></span>
                            <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('.btn-todo-add').on('click', function () {
            let item = $('#TodoInput').val();
            if (item) {
                $('.todo-list').append(

                    '<li>'+ '<span>' +
                        item + '</span>' +
                        '<div class="todo-action"><span class="btn done p-1 fa fa-check" onClick="toggleDone(this)"></span><span class="btn text-danger close p-1 fa fa-trash-o" onClick="toggleClose(this)"></span></div>' +
                    '</li>'
                    
                );
                $('input[type="text"]').val('')
                $('.todo-error').hide();
            } else {
                $('.todo-error').show();
            }
        });
        $('.todo-list .close').on('click', function () {
            toggleClose(this);
        });

        $('.todo-list .done').on('click', function () {
            toggleDone(this);
        });
        
    });

    function toggleHide() {
        $('.todo-list li').hide();
    }

    function toggleClose(ele) {
        $(ele).parent().parent().toggle();
    }

    function toggleDone(ele) {
        $(ele).parent().parent().toggleClass('active');
    }
</script>
@endsection
