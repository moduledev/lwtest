<div x-data="
    actions()
">
    <ul class="">
        <li>Categories</li>
        @foreach($categories as $category)
            <li>
                <label for="category">{{$category->name}}</label>
                <input type="checkbox"
                       :key="{{$category->id}}"
                       id="selectedAttr-{{$category->id}}"
                       name="attr-{{$category->id}}"
                       wire:click="selectAttribute()"
                       wire:model="selectedAttr.{{$category->name}}"
                       @click="changeUrl({{$category->name}})"
                >
            </li>
        @endforeach
    </ul>
</div>
<script !src="">
    function actions() {
        return {
            changeUrl(name){
                var urlParams = new URLSearchParams(window.location.search);
                console.log(urlParams.append('category', name)); // "?post=1234&action=edit&active=1"
            }
        }
    }
</script>
