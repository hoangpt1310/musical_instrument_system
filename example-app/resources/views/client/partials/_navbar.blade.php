<nav class="wh-menu">
    <div class="container">
        <ul class="navmenu">
            @foreach ($allCate as $cate)
                @if (is_array($cate))
                    <li>
                        <a href="#">
                            <span><img src="{{ asset('/assets/menu/' . $cate['category_image']) }}"
                                    alt="#">{{ $cate['category_name'] }}</span>
                        </a>
                        @if (count($cate['children']) > 0)
                            <div class="sub-menu">
                                <div class="msm-col col-md-6">
                                    <h3 class="nsm-title">
                                        {{ $cate['category_name'] }}</h3>
                                    <ul class="nsm-list nsm-list-2">
                                        {{-- Sử dụng đệ quy để xây dựng submenu --}}
                                        @foreach ($cate['children'] as $subcategory)
                                            <li>
                                                <a href="#">{{ $subcategory['category_name'] }}</a>
                                                @if (count($cate['children']) > 0)
                                                    {{-- Đệ quy --}}
                                                    @include('client/partials/_submenu', [
                                                        'subcategories' => $cate['children'],
                                                    ])
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>
