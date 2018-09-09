<aside>
    <div class="inner-box">
        <div class="user-panel-sidebar">
            <div class="collapse-box">
            	<h5 class="collapse-title"> 
            		NewNaija 
            		<a class="pull-right" data-toggle="collapse" 
            			href="#MyAds">
            			<i class="fa fa-angle-down"></i>
            		</a>
            	</h5>

                <div id="MyAds" class="panel-collapse collapse in">
                    <ul class="acc-list">
                    	@foreach($sidenavs as $nav)
                        	{!!$nav!!}
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>