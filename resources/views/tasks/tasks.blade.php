@if (count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($tasks as $task)
            <li class="media">
                <img class="mr-2 rounded" src="{{ Gravatar::src($task->email, 50) }}" alt="">
                <div class="media-body">
                    <div>
                        {{ $task->name }}
                    </div>
                    <div>
                        <p>{!! link_to_route('tasks.show', 'View task', ['id' => $task->id]) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{ $tasks->links('pagination::bootstrap-4') }}
@endif