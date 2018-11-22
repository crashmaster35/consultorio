    <div id="content-header">
    	<div id="breadcrumb"> 
    		@foreach ($breadcrumb['first'] as $crumb) 
	    		<a href="{{$crumb['url']}}" title="Ir a {{$crumb['name']}}" class="tip-bottom"><i class="icon-home"></i> {{$crumb['name']}}</a> 
    		@endforeach
    		@if (isset($breadcrumb['middle']))
    			@foreach ($breadcrumb['middle'] as $crumb)
    				<a href="{{$crumb['url']}}"> {{$crumb['name']}}</a> 
    			@endforeach
    		@endif
    		@if (isset($breadcrumb['last']))
    			@foreach ($breadcrumb['last'] as $crumb)
    				@if ($crumb['name'] != '')
    					<a href="{{$crumb['url']}}" class="current">{{$crumb['name']}}</a> 
    				@endif
    			@endforeach
    		@endif
    	</div>
        @if (isset($title))
            <h1>{{$title}}</h1>
        @endif
    </div>