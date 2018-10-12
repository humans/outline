<aside class="app-sidebar" :class="{ '-open': sidebar.open }">
    <h1 class="title">{{ config('outline.name') }}</h1>

    <nav class="navigation sidebar-navigation mb-4">
        <ul class="links">
            @foreach($sidebar->items() as $item)
            <li class="item {{ $item->active() }}">
                <a class="link" href="{{ $item->link }}">
                    <i class="icon {{ $item->icon }}"></i>

                    {{ $item->name }}
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</aside>
