@foreach($children as $subcategory)
    <ul class="list-links">
        @if(count($subcategory->$children))
            <li>{{$subcategory->title}}</li>
            <ul class="list-links">
                @include('home.categorytree',['$children'=>$subcategory->$children])
            </ul>
        @else
            <li><a href="{{'categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->slug]}}">{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach
