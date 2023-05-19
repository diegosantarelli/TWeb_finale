@can('show-discount') <!-- direttiva can che si avvia solo se si avvera la condizione vero/falso del gate show-discount -->
    <p class="price"> {{ number_format($product->getPrice($product->discounted), 2, ',', '.') }} € </p>
    @if ($product->discounted == 1)
        <p class="discprice"> Valore <del>{{ number_format($product->getPrice(false), 2, ',', '.') }} €</del><br>
        Sconto {{ $product->discountPerc }}%</p>
    @endif
@else
    <p class="price"> {{ number_format($product->getPrice(false), 2, ',', '.') }} € </p>
@endcan