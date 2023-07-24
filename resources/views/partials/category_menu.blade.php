<ul class="submenu {{ $index >= 2 ? 'ulSubMenu' : '' }}">
    @php
        $index++;
    @endphp
    @foreach ($categories as $category)
        <li>
            <a class="submenu-link" href="">{{ $category->name }}</a>
            @if ($category->children->count() > 0)
                @include('partials.category_menu', [
                    'categories' => $category->children,
                    'index' => $index,
                ])
            @endif
        </li>
    @endforeach
</ul>
