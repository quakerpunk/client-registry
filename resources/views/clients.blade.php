@extends('layout')

@section('title', 'Client Registry')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
    <div class="panel panel-default">
      <div class="panel-body">
        <h1>Client Registry</h1>

        <form class="form-horizontal search-form" role="form" method="GET" action"/clients">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-1 control-label">Name</label>

            <div class="col-md-6">
              <input type="text" id="name" name="name" class="form-control" required>

              @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
              @endif
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary">
                  Search
              </button>
            </div>
          </div>
        </form>

        <table class="registry">
          <thead>
            <th>Name</th>
            <th>Company</th>
            <th>Email</th>
          </thead>
          <tbody>
            @foreach ($clients as $client)
            <tr>
              <td><strong><a href="clients/{{ $client->id }}">{{ $client->full_name }}</a></strong></td>
              <td>{{ $client->company_name }}</td>
              <td><a href="mailto:{{ $client->email }}">{{ $client->email }}</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>

        {{ $clients->appends(Request::only('name'))->links() }}
      </div>
    </div>
  </div>
@endsection