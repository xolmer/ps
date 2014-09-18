@extends('disposition.principal')
@section('content')
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb bc-2 farsi">
            <li>
                <a href="{{URL::route('index')}}">
                    <i class="entypo-home"></i>
                    {{Lang::get('ui.menu_items.home')}}
                </a>
            </li>

            <li class="active">
                <a>
                    <i class="entypo-paper-plane"></i>
                    {{Lang::get('ui.menu_items.sentbox')}}
                </a>
            </li>
        </ol>
    </div>
</div>

{{--Mail --Start--}}
<div class="mail-env">
<h2 class="farsi-content"> {{Lang::get('words.sentbox')}} </h2>
        <hr/>
	<!-- compose new email button -->
	<div class="mail-sidebar-row visible-xs">
		<a href="mailbox-compose.html" class="btn btn-success btn-icon btn-block">
			{{Lang::get('words.compose_mail')}}
			<i class="entypo-pencil"></i>
		</a>
	</div>


	<!-- Mail Body -->
	<div class="mail-body">
		<!-- mail table -->
		<table class="table mail-table">
			<!-- mail table header -->
			<thead>
				<tr>
					<th width="5%">
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</th>
					<th colspan="4">

						<div class="mail-select-options">Mark as Read</div>

						<div class="mail-pagination" colspan="2">
							<strong>1-30</strong> <span>of 789</span>

							<div class="btn-group">
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-left-open"></i></a>
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-right-open"></i></a>
							</div>
						</div>
					</th>
				</tr>
			</thead>

			<!-- email list -->
			<tbody>
            			    {{View::make('mails.partiels._mailListing')->with('mails',$mails)}}
            </tbody>

			<!-- mail table footer -->
			<tfoot>
				<tr>
					<th width="5%">
						<div class="checkbox checkbox-replace neon-cb-replacement">
							<label class="cb-wrapper"><input type="checkbox"><div class="checked"></div></label>
						</div>
					</th>
					<th colspan="4">

						<div class="mail-pagination" colspan="2">
							<strong>1-30</strong> <span>of 789</span>

							<div class="btn-group">
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-left-open"></i></a>
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-right-open"></i></a>
							</div>
						</div>
					</th>
				</tr>
			</tfoot>
		</table>
	</div>

	<!-- Sidebar -->
@include('mails.partiels._mailSideBar')

</div>
{{--Mail --End--}}

@stop
