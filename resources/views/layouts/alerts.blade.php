@if (session('successMessage'))
    <div class="">
        <div class="alert alert-success">
            {{ session('successMessage') }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
    </div>
@endif
@if (session('warningMessage'))
    <div class="panel-body">
        <div class="alert alert-warning">
            {{ session('warningMessage') }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
    </div>
@endif
@if (session('errorMessage'))
    <div class="panel-body">
        <div class="alert alert-danger">
            {{ session('errorMessage') }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
    </div>
@endif
