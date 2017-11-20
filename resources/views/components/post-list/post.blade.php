<div class="post lg:flex shadow-md">
    @if ($positionLeft)
        @include('components.post-list.thumbnail', ['rounded' => 'l'])
    @endif
    <div class="post-body lg:rounded-b-none lg:rounded-r">
        <p class="post-date">{{ $post->published_at->format('d/m/Y H:i') }}</p>
        <div class="mb-4">
            <div class="post-title">
                <a href="{{ $post->url }}" class="no-underline post-title">
                    {{ $post->title }}
                </a>
            </div>
            <p class="post-resume">{{ str_limit($post->body, 200) }}</p>
        </div>
        <p class="post-date">
            @foreach($post->tags as $tag)
                <a href="{{ $tag->url }}" class="no-underline lowercase text-sm text-grey-darkest">
                    #{{ $tag->name }}
                </a>
            @endforeach
        </p>
    </div>
    @if (! $positionLeft)
        @include('components.post-list.thumbnail', ['rounded' => 'r'])
    @endif
</div>