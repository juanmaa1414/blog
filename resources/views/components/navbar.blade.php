<nav class="bg-{{ app('theme')->getMainColor() }} lg:h-24 my-8 lg:my-0">
    <div class="container mx-auto h-full">
        <div class="lg:flex items-center justify-between lg:h-24">
            <div class="lg:mr-6 block text-center">
                <a href="{{ url('/') }}" class="no-underline w-full text-center mx-auto">
                    <img class="shadow-md rounded-full w-16" src="{{ url('img/thumbnail.jpg') }}" alt="{{ config('app.name') }}">
                </a>
            </div>
            <div class="flex-1 lg:w-3/4 text-center lg:text-left m-8 uppercase text-sm no-underline">
                @foreach($navbarMenu as $menuElement)
                    <a class="no-underline rounded p-4 text-{{ app('theme')->getHighlightColor() }} {{ $menuElement->active ? 'text-'.app('theme')->getHighlightColorText().' shadow-md bg-'.app('theme')->getHighlightColor() : '' }}" href="{{ $menuElement->url }}">
                        {{ $menuElement->title }}
                    </a>
                @endforeach
            </div>
            <div class="flex-1 block text-center lg:text-right">
                <input type="text" class="inline-block shadow-md rounded p-4 lg:w-64" placeholder="Search..." name="search">
            </div>
        </div>
    </div>
</nav>