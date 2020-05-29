@extends('layouts.app')
@section('content')
    <div class="container-fluid app-body">
        <h3>New Page</h3>
        <form id="search-form">
            <div class="form-row">
                <div class="col-7">
                    <input name="searchText" id="searchText" type="text" class="form-control" placeholder="Search">
                </div>
                <div class="input-group date" data-provide="datepicker">
                    <label for="sel1">Date:</label>
                    <input name="searchDate" type="text" class="form-control datepicker" data-provide="datepicker" id="searchDate">
                    <div class="input-group-addon">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sel1">Groups:</label>
                    <select name="group" class="form-control" id="group">
                        <option>All Group</option>
                        @foreach($groups as $group)
                        <option>{{$group->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover social-accounts">
                    <thead>
                    <tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text</th> <th>Time</th> </tr>
                    </thead>
                    <tbody>
                    @if(!empty($bufferPostings))
                        @foreach ($bufferPostings as $posting)
                            <tr>
                                <td width="350">
                                    <div class="media">
                                        <div class="media-body media-middle" style="width: 180px;">
                                            {{$posting->groupInfo->name}}
                                        </div>
                                    </div>
                                </td>
                                <td>{{$posting->groupInfo->type}}</td>
                                <td>
                                    <div class="media-left">
                                        <a href="">
                                            <span class="fa fa-{{$posting->accountInfo->type}}"></span>
                                            <img width="50" class="media-object img-circle" src="{{$posting->accountInfo->avatar}}" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    {{ $posting->post_text }}
                                </td>
                                <td>
                                    {{ $posting->sent_at }}
                                </td>
                            </tr>
                        @endforeach
                        <tr><td>{{$bufferPostings->links()}}</td></tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
