<aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
	<div class="right-blog-info text-left">
		<div class="tech-btm">
			<h4>Categories</h4>
			<ul class="list-group single">
				@foreach($colection as $getName)
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<a href="#" title="">{{$getName['name']}}</a>
					<span class="badge badge-primary badge-pill">{{$getName['count']}}</span>
				</li>
				@endforeach
			</ul>
		</div>
		<div class="tech-btm">
			<h4>The Most Views Of Dating Places</h4>
			@foreach($mostView as $view)
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
					<div class="sub-meta">
						<span>
							<i class="fa fa-eye"></i> {{$view->count_number}} views </span>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="tech-btm">
			<h4>Dating Places New</h4>
			@foreach($lastestNew as $new)
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
					<div class="sub-meta">
						<span>
							<i class="far fa-clock"></i> {{$new->date_created}}</span>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</aside>