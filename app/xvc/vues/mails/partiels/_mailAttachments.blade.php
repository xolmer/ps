			@if($attachments)
			@foreach($attachments as $attach)
				<li>
					<a href="{{$attach->link}}" class="name">
						{{$attach->filename}}
					</a>

					<div class="links">
						<a href="{{$attach->link}}">{{Lang::get('ui.buttons.download')}}</a>
					</div>
				</li>
			@endforeach
			@endif