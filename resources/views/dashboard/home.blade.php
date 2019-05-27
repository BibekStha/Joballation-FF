@extends('layouts.app')

@section('page_title', 'Home')


@section('content')

<div>
  <form action="/logout" method="post">
    <button type="submit">Logout</button>
  </form>
</div>

<div class="row">
  <div id="app-search" class="col-md-3 col-sm-12">
       <form id="app-search-form">
              <p class="pt-3">Enter your reference and put them in priority</p>
           <div class="form-group">
              <label for="job-title">Job Title</label>
              <input type="text" class="form-control" id="job-title">
          </div>
          <div class="row">
              <div class="col-md-2">
                  <i class="job-title-icon fas fa-medal"></i>
              </div>
              <div class="col-md-10">
                  <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn job-search-option">
                          <input type="checkbox" autocomplete="off"> + Web Developer
                      </label>
                  </div>

                  <div class="btn-group-toggle" data-toggle="buttons">
                          <label class="btn">
                              <input type="checkbox" autocomplete="off"> + Web Designer
                          </label>
                  </div>
              </div>   
      </div>
       </form>
      </div>

  <div id="app-listings" class="col-md-9 col-sm-12">
          <p class="pagination float-right pt-3"><i class="fas fa-caret-left"></i><span id="current-page-number">1</span>out of <span id="total-page-number"> 1</span><i class="fas fa-caret-right"></i></p>
      <div class="table-responsive">
          <table class="table table-borderless table-hover">
              <thead>
                  <tr>
                      <th scope="col">Favourite</th>
                      <th scope="col">Date Added</th>
                      <th scope="col">Job Title</th>
                      <th scope="col">Company</th>
                      <th scope="col">Location</th>
                      <th scope="col">Salary</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><input type="checkbox"></td>
                      <td>05-12-2019</td>
                      <td>Front End Developer</td>
                      <td>Elite Digital Agency</td>
                      <td>Toronto ON</td>
                      <td>$27 per hour</td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>
@endsection