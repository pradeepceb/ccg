@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Company Registration</div>
                  <div class="card-body">
  
                      <form action="{{ route('register.post') }}" method="POST">
                          @csrf
                          <h3>User Information</h3>
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
                                  <select id="category" class="form-control" name="category" required autofocus>
                                      <option value="">-- None --</option>
                                      <option value="software">Software</option>
                                      <option value="marketing">Marketing</option>
                                  </select>    
                                  @if ($errors->has('category'))
                                      <span class="text-danger">{{ $errors->first('category') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Job Title</label>
                              <div class="col-md-6">
                                  <select id="title" class="form-control" name="title" required autofocus>
                                      <option value="">-- None --</option>
                                      <option value="software">Software</option>
                                      <option value="marketing">Marketing</option>
                                  </select>    
                                  @if ($errors->has('title'))
                                      <span class="text-danger">{{ $errors->first('title') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <h4>Provide your Contact and Supplier Information</h4>
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
                                  <input type="text" id="phone" class="form-control" name="phone" required autofocus>
                                  @if ($errors->has('phone'))
                                      <span class="text-danger">{{ $errors->first('phone') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Register Company Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="company_name" class="form-control" name="company_name" required autofocus>
                                  @if ($errors->has('company_name'))
                                      <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Fax Number</label>
                              <div class="col-md-6">
                                  <input type="text" id="fax" class="form-control" name="fax" required autofocus>
                                  @if ($errors->has('fax'))
                                      <span class="text-danger">{{ $errors->first('fax') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Registered Place</label>
                              <div class="col-md-6">
                                  <input type="text" id="registered_place" class="form-control" name="registered_place" required autofocus>
                                  @if ($errors->has('registered_place'))
                                      <span class="text-danger">{{ $errors->first('registered_place') }}</span>
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
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Company Website</label>
                              <div class="col-md-6">
                                  <input type="text" id="website" class="form-control" name="website" required autofocus>
                                  @if ($errors->has('website'))
                                      <span class="text-danger">{{ $errors->first('website') }}</span>
                                  @endif
                              </div>
                          </div>
  
                           <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Are you a Fortune 500 Company</label>
                              <div class="col-md-6">
                                  <select id="fortune" class="form-control" name="fortune" required autofocus>
                                      <option value="">-- None --</option>
                                      <option value="500company">500 Company</option>
                                  </select>    
                                  @if ($errors->has('fortune'))
                                      <span class="text-danger">{{ $errors->first('fortune') }}</span>
                                  @endif
                              </div>
                          </div>
                        
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Estimated Sale Value</label>
                              <div class="col-md-6">
                                  <input type="text" id="sale_value" class="form-control" name="sale_value" required autofocus>
                                  @if ($errors->has('sale_value'))
                                      <span class="text-danger">{{ $errors->first('sale_value') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <h4>Are you a small Business or more SBA small Business categories. i.e. Small Business, Small Disadvantages Business, SDVOSB, Women owned small business etc.</h4>
                          <div class="form-group row">       
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Select</label>
                              <div class="col-md-6">
                                  <select id="fortune" class="form-control" name="fortune" required autofocus>
                                      <option value="">-- None --</option>
                                      <option value="500company">500 Company</option>
                                  </select>    
                                  @if ($errors->has('fortune'))
                                      <span class="text-danger">{{ $errors->first('fortune') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Whats the federal Tax ID</label>
                              <div class="col-md-6">
                                  <input type="text" id="tax_id" class="form-control" name="tax_id" required autofocus>
                                  @if ($errors->has('tax_id'))
                                      <span class="text-danger">{{ $errors->first('tax_id') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Enter DUNS Number</label>
                              <div class="col-md-6">
                                  <input type="text" id="sale_value" class="form-control" name="sale_value" required autofocus>
                                  @if ($errors->has('sale_value'))
                                      <span class="text-danger">{{ $errors->first('sale_value') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Enter CAGE</label>
                              <div class="col-md-6">
                                  <input type="text" id="sale_value" class="form-control" name="sale_value" required autofocus>
                                  @if ($errors->has('sale_value'))
                                      <span class="text-danger">{{ $errors->first('sale_value') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">No. of Months/Years in Business</label>
                              <div class="col-md-6">
                                  <input type="text" id="sale_value" class="form-control" name="sale_value" required autofocus>
                                  @if ($errors->has('sale_value'))
                                      <span class="text-danger">{{ $errors->first('sale_value') }}</span>
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