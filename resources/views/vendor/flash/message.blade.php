@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
    	<div class="container-fluid">
			<div class="row">
        		<div class="alert alert-{{ Session::get('flash_notification.level') }} flashbar">
            		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            		{{ Session::get('flash_notification.message') }}
        		</div>
        	</div>
        </div>
    @endif
@endif
