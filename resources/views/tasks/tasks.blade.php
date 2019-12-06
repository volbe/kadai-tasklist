@if (count($tasks) > 0)
    <ul class="list-unstyled">
        @foreach ($tasks as $task)
            <li class="media">
                <div class="media-body">
                    <div>
                        {{ $task->name }}
                    </div>
                    <div>
                        <p>{!! link_to_route('tasks.show', 'タスク一覧', ['id' => $task->id]) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endif