@extends('layout.app')
@section('content')
<div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-ticket"> My Tickets</i>
            </div>

            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($tickts as $tickt)
                  <tr>
                    <td>{{$tickt->category}}</td>
                    <td>
                      <a href="#">
                        {{$tickt->title}}
                      </a>
                    </td>
                    <td><span class="label label-success">{{$tickt->status}}</span></td>
                    <td>{{$tickt->updated_at}}</td>
                  </tr>
                  @endforeach
                  
                  
                  
                  <!-- <tr>
                    <td>Sales</td>
                    <td>
                      <a href="#">
                        #2123 - Ticket 6
                      </a>
                    </td>
                    <td><span class="label label-success">Open</span></td>
                    <td>2021-11-23 09:06:54</td>
                  </tr> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection