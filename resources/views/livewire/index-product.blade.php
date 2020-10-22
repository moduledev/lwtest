<div style="width: 250px" class="d-flex flex-column justify-content-center text-center" x-data="{count:1, product:'{{$product->id}}'}">
    <h1>{{$product->name}}</h1>
    <span>price: {{$product->price}}</span>
{{--    <p>{{$product->category}}</p>--}}
{{--    <button wire:click.defer="addProductToCount">+</button><input wire:model="selected_count" type="text">--}}
    <button x-on:click="count < 99 ? count++ : ''">+</button>
{{--    <input wire:model="selected_count" type="text">--}}
    <span x-text="count"></span>
    <button x-on:click="count > 1 ? count-- : ''">-</button>
{{--    <button wire:click="addProduct({{$product}})">Buy</button>--}}
    <button x-on:click="$wire.addToCart(product)">Buy</button>
</div>
