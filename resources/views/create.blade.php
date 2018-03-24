@extends('layout')

@section('title', 'Add Client')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">Add Client</div>
      <div class="panel-body">
        <form class="form-horizontal add-client-form" role="form" method="POST" action="/clients/add">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
              <label for="first_name" class="col-md-4 control-label">First Name</label>

              <div class="col-md-6">
                  <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                  @if ($errors->has('first_name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
              <label for="last_name" class="col-md-4 control-label">Last Name</label>

              <div class="col-md-6">
                  <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>

                  @if ($errors->has('last_name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
              <label for="company_name" class="col-md-4 control-label">Company Name</label>

              <div class="col-md-6">
                  <input id="company_name" type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" required>

                  @if ($errors->has('company_name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('company_name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
              <label for="address" class="col-md-4 control-label">Address</label>

              <div class="col-md-6">
                  <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                  @if ($errors->has('address'))
                      <span class="help-block">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
              <label for="city" class="col-md-4 control-label">City</label>

              <div class="col-md-6">
                  <input id="city" type="text" class="form-control" name="city"  value="{{ old('city') }}" required>

                  @if ($errors->has('city'))
                      <span class="help-block">
                          <strong>{{ $errors->first('city') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('county') ? ' has-error' : '' }}">
              <label for="county" class="col-md-4 control-label">County</label>

              <div class="col-md-6">
                  <input id="county" type="text" class="form-control" name="county" value="{{ old('county') }}" required>

                  @if ($errors->has('county'))
                      <span class="help-block">
                          <strong>{{ $errors->first('county') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
              <label for="state" class="col-md-4 control-label">State</label>

              <div class="col-md-2">
                  <select id="state" class="form-control" name="state" value="{{ old('state') }}" required>
                    <option value="AL">AL</option>
                    <option value="AK">AK</option>
                    <option value="AZ">AZ</option>
                    <option value="AR">AR</option>
                    <option value="CA">CA</option>
                    <option value="CO">CO</option>
                    <option value="CT">CT</option>
                    <option value="DE">DE</option>
                    <option value="DC">DC</option>
                    <option value="FL">FL</option>
                    <option value="GA">GA</option>
                    <option value="HI">HI</option>
                    <option value="ID">ID</option>
                    <option value="IL">IL</option>
                    <option value="IN">IN</option>
                    <option value="IA">IA</option>
                    <option value="KS">KS</option>
                    <option value="KY">KY</option>
                    <option value="LA">LA</option>
                    <option value="ME">ME</option>
                    <option value="MD">MD</option>
                    <option value="MA">MA</option>
                    <option value="MI">MI</option>
                    <option value="MN">MN</option>
                    <option value="MS">MS</option>
                    <option value="MO">MO</option>
                    <option value="MT">MT</option>
                    <option value="NE">NE</option>
                    <option value="NV">NV</option>
                    <option value="NH">NH</option>
                    <option value="NJ">NJ</option>
                    <option value="NM">NM</option>
                    <option value="NY">NY</option>
                    <option value="NC">NC</option>
                    <option value="ND">ND</option>
                    <option value="OH">OH</option>
                    <option value="OK">OK</option>
                    <option value="OR">OR</option>
                    <option value="PA">PA</option>
                    <option value="RI">RI</option>
                    <option value="SC">SC</option>
                    <option value="SD">SD</option>
                    <option value="TN">TN</option>
                    <option value="TX">TX</option>
                    <option value="UT">UT</option>
                    <option value="VT">VT</option>
                    <option value="VA">VA</option>
                    <option value="WA">WA</option>
                    <option value="WV">WV</option>
                    <option value="WI">WI</option>
                    <option value="WY">WY</option>
                  </select>

                  @if ($errors->has('state'))
                      <span class="help-block">
                          <strong>{{ $errors->first('state') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
              <label for="zip" class="col-md-4 control-label">ZIP</label>

              <div class="col-md-3">
                  <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}" required>

                  @if ($errors->has('zip'))
                      <span class="help-block">
                          <strong>{{ $errors->first('zip') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('phone1') ? ' has-error' : '' }}">
              <label for="phone1" class="col-md-4 control-label">Phone</label>

              <div class="col-md-6">
                  <input id="phone1" type="text" class="form-control" name="phone1" value="{{ old('phone1') }}" required>

                  @if ($errors->has('phone1'))
                      <span class="help-block">
                          <strong>{{ $errors->first('phone1') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('phone2') ? ' has-error' : '' }}">
              <label for="phone2" class="col-md-4 control-label">Alt. Phone</label>

              <div class="col-md-6">
                  <input id="phone2" type="text" class="form-control" name="phone2" value="{{ old('phone2') }}">

                  @if ($errors->has('phone2'))
                      <span class="help-block">
                          <strong>{{ $errors->first('phone2') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('web') ? ' has-error' : '' }}">
              <label for="web" class="col-md-4 control-label">URL</label>

              <div class="col-md-6">
                  <input id="web" type="web" class="form-control" name="web" value="{{ old('web') }}">

                  @if ($errors->has('web'))
                      <span class="help-block">
                          <strong>{{ $errors->first('web') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Submit
                  </button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection