@inject('markdown', 'Parsedown')
@php
    // TODO: There should be a better place for this.
    $markdown->setSafeMode(true);
    $setTheme = \DB::table('web_setting')->join('theme_colors', 'theme_colors.id', '=', 'web_setting.theme_id')->first();
@endphp

<div id="comment-{{ $comment->getKey() }}" class="media">
    @if ($comment->commenter->avatar)
        <img class="mr-3 rounded-circle" width="40" height="40" src="/avatar/{{ $comment->commenter->avatar }}" alt="{{ $comment->commenter->name ?? $comment->guest_name }} Avatar">
    @else
        <img class="mr-3 rounded-circle" width="40" height="40" src="https://ui-avatars.com/api/?name={{ $comment->commenter->name }}" alt="{{ $comment->commenter->name ?? $comment->guest_name }} Avatar">
    @endif
    <div class="media-body">
        <h6 class="mt-0 mb-1">{{ $comment->commenter->name ?? $comment->guest_name }} <small class="text-muted">- {{ $comment->created_at->diffForHumans() }}</small></h6>
        <div style="white-space: pre-wrap;">{!! $markdown->line($comment->comment) !!}</div>

        <div>
            @can('reply-to-comment', $comment)
                <button data-toggle="modal" data-target="#reply-modal-{{ $comment->getKey() }}" class="btn btn-sm btn-link">
                    <small>
                        <i class="fas fa-reply"></i>
                        Balas
                    </small>
                </button>
            @endcan
            {{-- @can('edit-comment', $comment)
                <button data-toggle="modal" data-target="#comment-modal-{{ $comment->getKey() }}" class="btn btn-sm btn-link">
                    <small>
                        <i class="fas fa-edit"></i>
                        Ubah
                    </small>
                </button>
            @endcan --}}
            @can('delete-comment', $comment)
                <a href="{{ route('comments.destroy', $comment->getKey()) }}" onclick="event.preventDefault();document.getElementById('comment-delete-form-{{ $comment->getKey() }}').submit();" class="btn btn-sm btn-link text-danger">
                    <small>
                        <i class="fas fa-trash"></i>
                        Hapus
                    </small>
                </a>
                <form id="comment-delete-form-{{ $comment->getKey() }}" action="{{ route('comments.destroy', $comment->getKey()) }}" method="POST" style="display: none;">
                    @method('DELETE')
                    @csrf
                </form>
            @endcan
        </div>

        {{-- @can('edit-comment', $comment)
            <div class="modal fade" id="comment-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.update', $comment->getKey()) }}">
                            @method('PUT')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">@lang('comments::comments.edit_comment')</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">@lang('comments::comments.update_your_message_here')</label>
                                    <textarea required class="form-control" name="message" rows="3">{{ $comment->comment }}</textarea>
                                    <small class="form-text text-muted">@lang('comments::comments.markdown_cheatsheet', ['url' => 'https://help.github.com/articles/basic-writing-and-formatting-syntax'])</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">@lang('comments::comments.cancel')</button>
                                <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">@lang('comments::comments.update')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan --}}

        @can('reply-to-comment', $comment)
            <div class="modal" id="reply-modal-{{ $comment->getKey() }}" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background: {{ $setTheme->secondary_base_color }} !important">
                        <form method="POST" action="{{ route('comments.reply', $comment->getKey()) }}">
                            @csrf
                            <div class="modal-header" style="border-bottom: none">
                                <h5 class="modal-title">Balas Komentar</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span class="text-white">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">Tulis Pesan</label>
                                    <textarea required class="form-control" name="message" rows="3" style="background: {{ $setTheme->tertiary_base_color }};
                                    color: {{ $setTheme->text_color }};"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer" style="border-top: none">
                                <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-sm text-uppercase text-dark" style="background: {{ $setTheme->button_color }} !important">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan

        <br />{{-- Margin bottom --}}

        <?php
            if (!isset($indentationLevel)) {
                $indentationLevel = 1;
            } else {
                $indentationLevel++;
            }
        ?>

        {{-- Recursion for children --}}
        @if($grouped_comments->has($comment->getKey()) && $indentationLevel <= $maxIndentationLevel)
            {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
            @foreach($grouped_comments[$comment->getKey()] as $child)
                @include('comments::_comment', [
                    'comment' => $child,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif

    </div>
</div>

{{-- Recursion for children --}}
@if($grouped_comments->has($comment->getKey()) && $indentationLevel > $maxIndentationLevel)
    {{-- TODO: Don't repeat code. Extract to a new file and include it. --}}
    @foreach($grouped_comments[$comment->getKey()] as $child)
        @include('comments::_comment', [
            'comment' => $child,
            'grouped_comments' => $grouped_comments
        ])
    @endforeach
@endif