<ul class="list-unstyled">
    @foreach ($tasklists as $tasklist)
        <li class="media mb-3">
            <img class="mr-2 rounded" src="{{ Gravatar::src($tasklist->user->email, 50) }}" alt="">
            <div class="media-body">
                <div>
                    {!! link_to_route('tasks.show', $tasklist->user->name, ['id' => $tasklist->user->id]) !!} <span class="text-muted">posted at {{ $tasklist->created_at }}</span>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($tasklist->content)) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $tasklists->links('pagination::bootstrap-4') }}