@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="py-5">
            <div class="card outline-primary">
                <div class="card-header">
                    List Rembursements
                </div>
                <table class="table">
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Name</th>
                        <th>Nominal</th>
                        <th>Keterangan</th>
                        <th>Image</th>
                        <th>Status</th>
                    </tr>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($rembursements as $item)    
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{Auth::user()->name}}</td>
                            <td>{{$item->nominal}}</td>
                            <td>{{$item->description}}</td>
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
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection