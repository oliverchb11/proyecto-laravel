@if (session('status'))
    <div class="alert alert-primary" role="alert">
        {{session('status')}}
        <button type="button" class="close" data-dismiss='alert' area-label='Close'>
            <span area-hidden='true'>&times;</span>
        </button>
    </div>
@endif
