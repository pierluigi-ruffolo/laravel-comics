<div class="comic-card h-100">
    <div class="img-container">
        <img src="{{ $img }}" alt="{{ $title }}">
        @if(isset($price))
        <div class="price-badge">{{ $price }}</div>
        @endif
    </div>

    <div class="card-body pt-2">

        <h5 class="comic-title">
            {{ $title }}
        </h5>
        @if(isset($series))
        <span class="comic-series">{{ $series }}</span>
        @endif
    </div>
    {{$slot}}
</div>