@extends('layouts.app')

@section('page_title', 'Application List')

@section('content')
<meta name="csrf-token" content="{!! csrf_token() !!}">
<p id="errors"></p>
<div class="row mb-5">
  <div id="app-search" class="col-md-3 col-sm-12 pb-5">
    <div class="pt-3 toggle-filter">
        <p>Click to Filter Your Applications</p>
        <ol>
          <li>Enter Job/City manually</li>
          <li>And/Or select your filters from each list</li>
        </ol>
        <p><i class="fas fa-angle-down"></i></p>
    </div>  
    <form id="app-search-form" method="post"> 
        @csrf
            <div class="form-group mt-2">
              <label for="app-searchbar">Search Applications</label>
              <input type="text" class="form-control" id="app-searchbar" data-role="tagsinput" placeholder="Search for applications containing keywords">
            </div>
            <div class="form-group mt-2">
                <label for="job-location">Job Title</label>
            </div> 
            <div class="row"> 
                <div class="col-md-10 ml-2">
                  @if(count($applications) > 0)
                      @foreach($applications as $application)
                      <div class="btn-group-toggle job-title-check" data-toggle="buttons">
                          <label class="btn job-search-option">
                              <input class="job_filter" type="checkbox" autocomplete="off" data-jobtitle='{{$application->job_title}}'>+ {{$application->job_title}}
                          </label>
                      </div>
                     @endforeach
                  @endif
                  </div>   
                </div><!--End of Job Checkboxes-->
           <div class="form-group mt-2">
              <label for="job-location">City</label>
          </div> 
          <div class="row">
              <div class="col-md-10 ml-2">
                @if(count($applications) > 0)
                  @foreach($applications as $application)
                    <div class="btn-group-toggle job-city-check" data-toggle="buttons">
                        <label class="btn job-search-option">
                            <input class="city_filter" type="checkbox" autocomplete="off" data-city='{{$application->city}}, {{$application->province}}'> + {{$application->city}}, {{$application->province}}
                        </label>
                    </div>
                  @endforeach
                  @endif
              </div>   
            </div> <!--End of City Checkboxes-->
            <div class="form-inline my-2">
                <label for="job-salary">Salary</label>
                <div class="row mx-1">
                    <label for="salary-min">Min:</label>
                    <input type="text" class="col-md-4 mx-2 form-control" id="job-salary-min" placeholder="$" pattern="\d{1,7}" max="999999">
                    <label for="salary-max">Max:</label>
                    <input type="text" class="col-md-4 mx-2 form-control" id="job-salary-max" placeholder="$" pattern="\d{1,7}" max="1000000">
                </div>
            </div><!--End of Salary-->
        </form>
    </div> <!--End of Filter-->
    <div id="app-listings" class="col-md-9 col-sm-12">
          <button class="btn float-left add-app-button mt-3">+ New Application</button>
          <p class="pagination float-right pt-3"><i class="fas fa-caret-left"></i><span id="current-page-number">1</span>out of <span id="total-page-number"> 1</span><i class="fas fa-caret-right"></i></p>
          <div class="table-responsive">
          <form action="{{url('dashboard/applications/compare/')}}" method="POST">
            @csrf
                <button class="btn float-right mr-4 compare-button">Compare</button>
            <table class="table table-borderless table-hover">
              <thead>
                  <tr>
                      <th scope="col">Favourite</th>
                      <th scope="col">Date Added</th>
                      <th scope="col">Job Title</th>
                      <th scope="col">Company</th>
                      <th scope="col">Location</th>
                      <th scope="col">Salary</th>
                      <th scope="col">Select</th>
                  </tr>
              </thead>
              <tbody>
                  @if(count($applications) > 0)
                    @foreach($applications as $application)
                    <tr>
                      @if($application->favourite == 1)
                        <td><i class="ml-3 favourite fas fave fa-star" data-jobid="{{$application->id}}"></i></td>
                      @else
                        <td><i class="ml-3 favourite far fa-star" data-jobid="{{$application->id}}"></i></td>
                      @endif
                      <td>{{substr($application->created_at,0,10)}}</td>
                      <td><a href="/dashboard/applications/{{$application->id}}">{{$application->job_title}}</a></td>
                      <td>{{$application->company}}</</td>
                      <td>{{$application->city}}, {{$application->province}}</td>
                      @if($application->salary != NULL)
                        <td>${{$application->salary}} per hour</td>
                      @else
                        <td>N/A</td>
                      @endif
                      <td>
                        <div class="ml-2 btn-group-toggle compare-check" data-toggle="buttons">
                          <label class="btn select">
                          <input name="compareOptions[]" class="compare-options" type="checkbox" autocomplete="off" value="{{$application->id}}">
                          </label>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                    @else
                      <tr><td rowspan="7">No results to display. Add your applications <a href="/dashboard/applications/create">here</a></td></tr>
                  @endif
              </tbody>
          </table>
        </form>
      </div>
  </div>
</div>
@endsection