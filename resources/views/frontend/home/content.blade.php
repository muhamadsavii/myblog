@foreach($article as $article)
	<div class="cd-timeline-block">
		<div class="cd-timeline-img cd-picture">
			<img src="{{ asset('assets/frontend/images/'.$article->category) }}" alt="Picture">
		</div> 

		<div class="cd-timeline-content">
			<h2 class="title-center mycolor">{{ $article->title }}</h2>
			@if($article->category == 'cd-icon-picture.svg')
				<img class="center-blok margin-img" src="{{ asset('photos/photo-articles/'.$article->title_img) }}">
			@else
				<img class="center-blok margin-img" src="{!!asset($article->title_img)!!}">
			@endif
			<a href="javascript:void(0)" class="cd-read-more mybacground" data-categori="{{$article->category}}" data-id="{{ $article->id }}" >Read more</a>
			<span class="cd-date">{{ date('d M Y', strtotime($article->created_at)) }}</span>
		</div> 
	</div>
@endforeach 