<ul {!! $options !!}>
    @foreach ($menu_nodes as $key => $row)
        <li  @if ($row->css_class || $row->active) class=" @if ($row->has_child) hassub @endif @if ($row->css_class) {{ $row->css_class }} @endif @if ($row->active) current @endif" @endif>
            <a href="{{ url($row->url) }}" @if ($row->target !== '_self') target="{{ $row->target }}" @endif>
                @if ($row->icon_font) <i class="{{ trim($row->icon_font) }}"></i> @endif {{ $row->title }}
            </a>
            @if ($row->has_child)
                {!! Menu::generateMenu([
                    'menu'       => $menu,
                    'menu_nodes' => $row->child
                ]) !!}
            @endif
        </li>
    @endforeach
</ul>
