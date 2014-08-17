@if(Session::has('flash_notification.message'))
    @if(Session::has('flash_notification.overlay'))
    @include('partiels._modal',array('title' => Session::get('flash_notification.overlayTitle'),'body' => Session::get('flash_notification.message')));
    @else    
        <div class="alert alert-{{Session::get('flash_notification.level')}}">
        <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
        <h4 class="farsi-content">{{Session::get('flash_notification.message')}}</h4>
    </div>
    @endif
@endif