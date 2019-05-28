@extends('layouts.app')

@section('page_title', 'Home')

@section('content')
  {{ Auth::user()->name }}
  <a href="/logout">Logout</a>

<div class="row mb-5">
  <div id="app-search" class="col-md-3 col-sm-12 pb-5">
       <form id="app-search-form">
            <p class="pt-3">Enter your reference and put them in priority</p>
           <div class="form-group">
              <label for="job-title">Job Title</label>
              <input type="text" class="form-control" id="job-title" data-role="tagsinput">
          </div>
          <div class="row">
              <div class="col-md-2">
                  <i class="job-title-icon fas fa-medal"></i>
              </div>
              <div class="col-md-10">
                  <div class="btn-group-toggle job-title-check" data-toggle="buttons">
                      <label class="btn job-search-option">
                          <input type="checkbox" autocomplete="off"> + Web Developer
                      </label>
                  </div>

                  <div class="btn-group-toggle job-title-check" data-toggle="buttons">
                        <label class="btn">
                            <input type="checkbox" autocomplete="off"> + Web Designer
                        </label>
                  </div>
              </div>   
            </div>
           <div class="form-group">
              <label for="job-location">City</label>
              <input type="text" class="form-control" id="job-location">
          </div>
          <div class="row">
              <div class="col-md-2">
                  <i class="job-title-icon fas fa-medal"></i>
              </div>
              <div class="col-md-10">
                  <div class="btn-group-toggle job-title-check" data-toggle="buttons">
                      <label class="btn job-search-option">
                          <input type="checkbox" autocomplete="off"> + Toronto
                      </label>
                  </div>

                  <div class="btn-group-toggle job-title-check" data-toggle="buttons">
                        <label class="btn">
                            <input type="checkbox" autocomplete="off"> + Markham
                        </label>
                  </div>
                  <div class="btn-group-toggle job-title-check" data-toggle="buttons">
                        <label class="btn">
                            <input type="checkbox" autocomplete="off"> + Mississauga
                        </label>
                  </div>
              </div>   
            </div>
            <div class="row slide-container w-100">
                <div class="form-group">
                    <label for="job-salary">Salary Range</label>        
                    <input class="form-control" type="text" id="job-salary" name="job-salary" value="" />
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
                      <td>
                          <div class="btn-group-toggle favourite-check" data-toggle="buttons">
                            <label class="btn favourite">
                                <input type="checkbox" autocomplete="off">
                            </label>
                        </div>
                    </td>
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