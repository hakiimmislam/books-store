@if (session('successMessage'))
    <div class="panel-body">
        <div class="alert alert-success">
            {{ session('successMessage') }}
        </div>
    </div>
@endif
@if (session('warningMessage'))
    <div class="panel-body">
        <div class="alert alert-warning">
            {{ session('warningMessage') }}
        </div>
    </div>
@endif
@if (session('errorMessage'))
    <div class="panel-body">
        <div class="alert alert-danger">
            {{ session('errorMessage') }}
        </div>
    </div>
@endif
