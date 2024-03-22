<div class="pagination">
    @if ($product->lastPage() > 1)
        <ul class="join">
            <li class="join-item btn {{ ($product->currentPage() == 1) ? 'disabled' : '' }}">
                <a href="{{ $product->url(1) }}">Đầu</a>
            </li>
            @for ($i = 1; $i <= $product->lastPage(); $i++)
                @if(abs($product->currentPage() - $i) <= 2)
                    <li class="join-item btn {{ ($product->currentPage() == $i) ? 'btn-active' : '' }}">
                        <a href="{{ $product->url($i) }}">{{ $i }}</a>
                    </li>
                @elseif($i == 1 || $i == $product->lastPage())
                    <li class="join-item btn">
                        <span>...</span>
                    </li>
                @endif
            @endfor
            <li class="join-item btn {{ ($product->currentPage() == $product->lastPage()) ? 'disabled' : '' }}">
                <a href="{{ $product->url($product->lastPage()) }}">Cuối</a>
            </li>
        </ul>
    @endif
</div>
