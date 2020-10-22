<div>
    <span>{{$product->name}}</span><span>{{$product->price}}</span><span wire:click="deleteItem({{$product->id}})">X</span>
</div>
