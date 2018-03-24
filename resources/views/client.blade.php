@extends('layout')

@section('title', $client->full_name)

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-body">
        <h1>{{ $client->full_name }}</h1>
        <h2 class="subtitle">{{ $client->company_name }}</h2>

        <table class="client-info">
          <tr>
            <td><strong>Address:</strong></td>
            <td>{{ $client->address }}<br />
                {{ $client->city }}, {{ $client->state }} {{ $client->zip }}</td>
          </tr>
          <tr>
            <td><strong>Phone:</strong></td>
            <td>{{ $client->phone1 }}</td>
          </tr>
          <tr>
            <td><strong>Alt. Phone:</strong></td>
            <td>{{ $client->phone2 }}</td>
          </tr>
          <tr>
            <td><strong>Email:</strong></td>
            <td><a href="mailto:{{ $client->email }}">{{ $client->email }}</a></td>
          </tr>
          <tr>
            <td><strong>Website:</strong></td>
            <td><a href="{{ $client->web }}" target="_blank">{{ $client->web }}</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><p><a href="/clients"><- Back to Client Registry</a></p></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
@endsection