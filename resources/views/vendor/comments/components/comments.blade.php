@php
    if (isset($approved) and $approved == true) {
        $comments = $model->approvedComments;
    } else {
        $comments = $model->comments;
    }
@endphp

@auth
@include('comments::_form')
@elseif(Config::get('comments.guest_commenting') == true)
@include('comments::_form', [
'guest_commenting' => true
])
@else
<p class="text-center">Anda harus <a href="{{ route('sign-in') }}">Login</a> untuk mengirim komentar.</p>
<hr>
@endauth

@if($comments->count() < 1)
    <div class="text-center"><h6>Belum ada komentar.</h6></div>
@endif

@isset ($perPage)
    {{ $grouped_comments->links() }}
@endisset
<div>
    @php
    $comments = $comments->sortByDesc('created_at');

    if (isset($perPage)) {
    $page = request()->query('page', 1) - 1;

    $parentComments = $comments->where('child_id', '');

    $slicedParentComments = $parentComments->slice($page * $perPage, $perPage);

    $m = Config::get('comments.model'); // This has to be done like this, otherwise it will complain.
    $modelKeyName = (new $m)->getKeyName(); // This defaults to 'id' if not changed.

    $slicedParentCommentsIds = $slicedParentComments->pluck($modelKeyName)->toArray();

    // Remove parent Comments from comments.
    $comments = $comments->where('child_id', '!=', '');

    $grouped_comments = new \Illuminate\Pagination\LengthAwarePaginator(
    $slicedParentComments->merge($comments)->groupBy('child_id'),
    $parentComments->count(),
    $perPage
    );

    $grouped_comments->withPath(request()->url());
    } else {
    $grouped_comments = $comments->groupBy('child_id');
    }
    @endphp
    @foreach($grouped_comments as $comment_id => $comments)
    {{-- Process parent nodes --}}
    @if($comment_id == '')
    @foreach($comments as $comment)
    @include('comments::_comment', [
    'comment' => $comment,
    'grouped_comments' => $grouped_comments,
    'maxIndentationLevel' => $maxIndentationLevel ?? 3
    ])
    @endforeach
    @endif
    @endforeach
</div>
