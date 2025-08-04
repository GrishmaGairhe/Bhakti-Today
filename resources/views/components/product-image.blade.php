@if(isset($size) && $size === 'table')
    <img 
        src="{{ asset('images/products/' . $product->photopath) }}" 
        alt="{{ $product->name }}" 
        class="w-16 h-16 object-cover rounded-lg"
    >
@elseif(isset($size) && $size === 'medium')
    <img 
        src="{{ asset('images/products/' . $product->photopath) }}" 
        alt="{{ $product->name }}" 
        class="w-full h-64 object-cover rounded-lg"
    >
@elseif(isset($size) && $size === 'xlarge')
    <img 
        src="{{ asset('images/products/' . $product->photopath) }}" 
        alt="{{ $product->name }}" 
        class="w-full h-96 object-cover rounded-lg"
    >
@else
    <img 
        src="{{ asset('images/products/' . $product->photopath) }}" 
        alt="{{ $product->name }}" 
        class="w-full h-48 object-cover rounded-lg"
    >
@endif 