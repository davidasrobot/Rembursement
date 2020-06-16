@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="card my-5">
            <div class="card-header">
                Add new Rebursement
            </div>
            <div class="card-body">
                <form action="/rembursement" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="file" class="form-control" id="customFile" name="image">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection