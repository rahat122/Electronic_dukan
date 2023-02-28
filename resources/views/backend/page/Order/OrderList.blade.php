@extends('backend.master')
@section('contents')
<table class="table">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Order Name</th>
                      <th scope="col">Order Email</th>
                      <th scope="col">Order Phone</th>
                      <th scope="col">Order Amount</th>
                      <th scope="col">Order Status</th>
                      <th scope="col">Order Address</th>
                      <th scope="col">Order Transaction_id</th>
                      <th scope="col">Order Currency</th>
                      <th scope="col">action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Orders as $Order)
                    <tr>
                      <th scope="row">{{$Order->id}}</th>
                      <td>{{$Order->name}}</td>
                      <td>{{$Order->email}}</td>
                      <td>{{$Order->phone}}</td>
                      <td>{{$Order->amount}}</td>
                      <td>{{$Order->status}}</td>
                      <td>{{$Order->address}}</td>
                      <td>{{$Order->transaction_id}}</td>
                      <td>{{$Order->crrency}} BDT</td>
                      <td>
                        <a href="{{route('order.update',$Order->id)}}" class="btn btn-primary">
                          Approve
                        </a>
                      </td>
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                {{$Orders->links()}}
@endsection