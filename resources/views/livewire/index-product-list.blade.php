<div class="d-flex flex-row justify-content-between w-75 flex-wrap">
   <div class="col-12">
       @foreach ($products as $product)
           <livewire:index-product :product="$product" :key="$product->id">
       @endforeach
   </div>
<div class="col-12">
    {{ $products->links() }}

</div>

</div>
