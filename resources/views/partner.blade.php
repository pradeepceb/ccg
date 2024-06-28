@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Partner Registration</div>
                  <div class="card-body">
  
                      <form action="{{ route('partner.register.post') }}" method="POST">
                          @csrf
                          <h3>Partner Information</h3>
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Prefix</label>
                              <div class="col-md-6">
                                  <select id="prefix" class="form-control" name="prefix" required autofocus>
                                      <option value="Mr">Mr</option>
                                      <option value="Mrs">Mrs</option>
                                  </select>    
                                  @if ($errors->has('prefix'))
                                      <span class="text-danger">{{ $errors->first('prefix') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Job Category</label>
                              <div class="col-md-6">
                                  <select id="jobcategory" class="form-control" name="jobcategory" required autofocus>
                                      <option value="">-- None --</option>
                                      <option value="software">Software</option>
                                      <option value="marketing">Marketing</option>
                                  </select>    
                                  @if ($errors->has('jobcategory'))
                                      <span class="text-danger">{{ $errors->first('jobcategory') }}</span>
                                  @endif
                              </div>
                          </div>
                          <h4>Contact Info</h4>
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="firstname" class="form-control" name="firstname" required autofocus>
                                  @if ($errors->has('firstname'))
                                      <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Last Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="lastname" class="form-control" name="lastname" required autofocus>
                                  @if ($errors->has('lastname'))
                                      <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Work Phone</label>
                              <div class="col-md-6">
                                  <input type="text" id="workphone" class="form-control" name="workphone" required autofocus>
                                  @if ($errors->has('workphone'))
                                      <span class="text-danger">{{ $errors->first('workphone') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Cell Phone</label>
                              <div class="col-md-6">
                                  <input type="text" id="cellphone" class="form-control" name="cellphone" required autofocus>
                                  @if ($errors->has('cellphone'))
                                      <span class="text-danger">{{ $errors->first('cellphone') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                           <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Prefered Language</label>
                              <div class="col-md-6">
                                  <select id="language" class="form-control" name="language" required autofocus>
                                      <option value="">-- None --</option>
                                      <option value="english">English</option>
                                      <option value="spanish">Spanish</option>
                                  </select>    
                                  @if ($errors->has('language'))
                                      <span class="text-danger">{{ $errors->first('language') }}</span>
                                  @endif
                              </div>
                          </div>
                        
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection