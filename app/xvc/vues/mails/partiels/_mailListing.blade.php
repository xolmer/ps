@foreach($mails as $mail)
				<tr @unless($mail->is_read) class="unread" @endunless>
					<td>
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star stared">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">
						 {{$mail->sender_name}}
						 </a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
						@unless($mail->priority < 2)
							<span class="label {{priorityToClass($mail->priority)}} farsi">{{Lang::get('words.priorities.' . $mail->priority)}}</span>
						@endunless
							{{$mail->gist}}
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