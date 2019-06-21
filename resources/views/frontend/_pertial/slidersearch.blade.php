
<link href="{{asset('assets/css/slider.css')}}" rel="stylesheet">
<!-- begin:header -->
    <div id="header" class="header-slide">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="quick-search">
              <div class="row">
                 <form name="search_form" id="search_form" method="post" role="form">
                    <div class="col-sm-offset-2 col-sm-9">
                        <div class="mainmenu">
                            <form class="form-inline" action="/product/listing" method="get">
                                <div class="price-rang form-group"><!--price-range-->
                                    @php 
                                        $prices = '[1500,2500]';
                                        if(request('price')){
                                            $prices = explode(',',request('price'));
                                            $prices = '['.$prices[0].','.$prices[1].']';
                                        }
                                    @endphp
                                    <div class="wel text-center" style="padding-right:10px">
                                        <input type="text" class="span2" value="" name="price" 
                                        data-slider-min="1000" data-slider-max="5000" 
                                        data-slider-step="500" data-slider-value="{{$prices}}" id="sl2"><br/>
                                        <b class="pull-left">₦1000</b> <b class="pull-right">₦5000</b>
                                    </div>
                                </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="search" 
                                    placeholder="What ?" value="{{request('search')}}">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="category">
                                    <option value="0">All</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" 
                                            {{request('category') == $category->id?'selected':''}}>
                                            {{$category->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="bt btn-info" 
                                    style="height: 35px;border-radius:5%;">
                                        Search
                            </button>
                            </form>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end:header -->