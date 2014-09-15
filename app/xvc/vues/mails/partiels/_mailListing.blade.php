@foreach($mails as $mail)
				<tr  class="{{$mail->is_read ?'': 'unread'}} mail-row" data-remoteid="{{$mail->id}}">
					<td>
                        <div class="checkbox checkbox-replace">
        					<input type="checkbox" id="chk-1">
        				</div>
        			</td>

					<td class="col-name">
					@if(!Route::is('mail.sentbox'))
						<a href="#" class="star {{$mail->is_stared ?'stared': ''}}">
							<i class="entypo-star"></i>
						</a>
					@endif
						<a href="mailbox-message.html" class="col-name">
						<img src="{{$mail->sender->small_avatar}}" class="img-circle" width="44"/>   {{$mail->sender_name}}
						 </a>
					</td>


					<td class="col-subject">

						<a href="mailbox-message.html" >
                            @unless($mail->priority < 2)
                                <span  class="label {{priorityToClass($mail->priority)}} farsi">{{Lang::get('words.priorities.' . $mail->priority)}}</span>
                            @endunless

                            @if(!empty($mail->subject))
                                <strong>{{$mail->subject}}</strong> <br/>
                            @endif

                            {{{$mail->gist}}}
						</a>

					</td>

					<td class="col-options">
						<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
					</td>

					<td class="col-time">
					{{Html::dateblock($mail->created_at)}}
					</td>
				</tr>
@endforeach