@if(Session::has('toastr.alerts'))
    <div id="toastr">
    @foreach(Session::get('toastr.alerts') as $alert)

        <div class='alert alert-{{ $alert['type'] }} @if(array_get($alert,'params.important') == true) important @endif'>
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>

            @if( ! empty($alert['title']))
                <div><strong>{{ $alert['title'] }}</strong></div>                
            @endif

            {{ $alert['message'] }}

            @if(array_get($alert,'params.important')) (This alert is marked as important) @endif

        </div>

    @endforeach
    </div>
@endif