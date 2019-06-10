<div class="brands_products"><!--brands_products-->
    <h2>Category</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
            @foreach($categories as $category)
                <li>
                    <a href="/product/listing?category={{$category->id}}"> 
                        {{$category->subName}}
                        <span class="pull-right">
                            {{$category->shishas_count}}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div><!--/brands_products-->

