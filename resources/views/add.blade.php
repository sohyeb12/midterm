@extends('layout.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Open New Ticket</div>

                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{url('addshift')}}">
                             @csrf
                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="">

                                </div>
                            </div>

                            <div class="form-group">
                                
                                <label for="category" class="col-md-4 control-label">Category</label>
                                @csrf
                                <div class="col-md-6">
                                    <select id="category" type="category" class="form-control" name="category">
                                        <option value="">Select Category</option>
                                        <option value="1">Technical</option>
                                        <option value="1">Sales</option>
                                        <option value="1">Shipping</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="priority" class="col-md-4 control-label">Priority</label>

                                <div class="col-md-6">
                                    <select id="priority" type="" class="form-control" name="priority">
                                        <option value="">Select Priority</option>
                                        <option value="low">Low</option>
                                        <option value="medium">Medium</option>
                                        <option value="high">High</option>
                                    </select>
                                    @csrf
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message" class="col-md-4 control-label">Message</label>

                                <div class="col-md-6">
                                    <textarea rows="10" id="message" class="form-control" name="message"></textarea>
                                    @csrf
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-ticket"></i> Open Ticket
                                    </button>
                                    @csrf
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection