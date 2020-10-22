<div>
   @foreach ($productList as $product)
        <div>
            <span>name: {{$product->name}}</span>
            <span>|</span>
            <span>price: {{$product->price}}</span>
            <span>|</span>
            <span>count: {{$product->selected_count}}</span>
            <span>|</span>
            <span wire:click="deleteItem({{$product->name}})">X</span>
        </div>
    @endforeach
</div>
