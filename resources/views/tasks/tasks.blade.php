@if (count($tasks) > 0)
    <ul class="list-unstyled">
        @foreach ($tasks as $task)
            <li class="media">
                <div class="media-body">
                    <div>
                        {!! link_to_route('tasks.show', $task->user->name, ['id' => $task->user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
                    </div>
                    <div>
                        <p class="mb-0">{!! nl2br(e($task->content)) !!}</p>
                    </div>
                    <div>
                        @if (Auth::id() == $task->user_id)
                            {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endif