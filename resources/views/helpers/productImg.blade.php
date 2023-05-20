@php
        if (empty($imgFile)) {
            $imgFile = 'default.png';
        }
        if (null !== $attrs) {
            $attrs = 'class="' . $attrs . '"';
        }

@endphp
<img src="{{ ('img/product/' . $imgFile) }}" {!! $attrs !!}> 
