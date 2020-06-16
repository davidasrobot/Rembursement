@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="py-5">
            <div class="card outline-primary">
                <div class="card-header">
                    List Rembursements
                    <a href="/rembursement/create" class="btn btn-primary float-right"><i class="fa fa-plus"></i></a>
                </div>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Status</th>
                    </tr>
                    @foreach ($rembursements as $item)    
                        <tr>
                            <td>{{Auth::user()->name}}</td>
                            <td>
                                <img class="img-fluid" width="100" src="{{asset('storage/'.$item->image)}}" alt="tester">
                            </td>
                            <td>
                                @if ($item->status == '1')
                                    Accepted
                                @else
                                    Pending
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection