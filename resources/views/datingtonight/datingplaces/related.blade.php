<aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
	<div class="right-blog-info text-left">
		<div class="tech-btm">
			<h4>Categories</h4>
			<ul class="list-group single">
				@foreach($arrType as $getName)
				@php
					$cslug = str_slug($getName['name']);
					$cid = $getName['cid'];
				@endphp
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<a href="{{route('datingtonight.datingplaces.cat',['cslug' => $cslug, 'cid' => $cid])}}" title="">{{$getName['name']}}</a>
					<span class="badge badge-primary badge-pill">{{$getName['count']}}</span>
				</li>
				@endforeach
			</ul>
		</div>
		<div class="tech-btm">
			<h4>Related News of Dating Places</h4>
			@foreach($relatedNews as $new)
			@php
				$name = $new->name_place;
				$slug = str_slug($name);
				$id = $new->id_place;
			@endphp
			<div class="blog-grids row mb-3">
				<div class="col-md-5 blog-grid-left">
					<a href="{{route('datingtonight.datingplaces.detail',['slug' => $slug, 'id' => $id])}}">
						<img src="/storage/app/files/datingplaces/{{$new->picture}}" class="img-fluid" alt="">
					</a>
				</div>
				<div class="col-md-7 blog-grid-right">
					<h5>
						<a href="{{route('datingtonight.datingplaces.detail',['slug' => $slug, 'id' => $id])}}">{{$new->name_place}}</a>
					</h5>
						<a style="font-size:13px;" href="{{route('datingtonight.datingplaces.detail',['slug' => $slug, 'id' => $id])}}">{{$new->name_type}}</a>
					<div class="sub-meta">
						@php
							$date = $new->date_created;
							$date_int = strtotime($date);
							//$date_format = date('d-month-Y',$date_int);
							//dd($date_int);
							$date_array = getdate($date_int);
							//dd($date_array);
							$month = $date_array['month'];
							$day = $date_array['mday'];
							$year = $date_array['year'];
						@endphp
						<span>
							<i class="far fa-clock"></i> {{ $month }} {{ $day }}, {{ $year }}
						</span>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="tech-btm">
			<h4>The Most Views Of Dating Places</h4>
			@foreach($mostView as $view)
			@php
				$name = $view->name_place;
				$slug = str_slug($name);
				$id = $view->id_place;
			@endphp
			<div class="blog-grids row mb-3">
				<div class="col-md-5 blog-grid-left">
					<a href="{{route('datingtonight.datingplaces.detail',['slug' => $slug, 'id' => $id])}}">
						<img src="/storage/app/files/datingplaces/{{$view->picture}}" class="img-fluid" alt="">
					</a>
				</div>
				<div class="col-md-7 blog-grid-right">

					<h5>
						<a href="{{route('datingtonight.datingplaces.detail',['slug' => $slug, 'id' => $id])}}">{{$view->name_place}}</a>
					</h5>
						<a style="font-size:13px;" href="{{route('datingtonight.datingplaces.detail',['slug' => $slug, 'id' => $id])}}">{{$view->name_type}}
						</a>
					<div class="sub-meta">
						<span>
							<i class="fa fa-eye"></i> {{$view->count_number}} views </span>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</aside>