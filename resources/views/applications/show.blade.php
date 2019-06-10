@extends('layouts.app')

@section('page_title', 'Detail')

@section('content')
<div class="detail_container row">
    <button class="btn back-btn col-md-2"><i class="fas fa-caret-left mr-2"></i>Back</button>
        <div class="right_col col-md-10">
            <button type="button" class="detail_delete"><a href="/dashboard/applications/{{$application->id}}/delete"><i class="trash-can far fa-trash-alt"></i></a></button>
            <button type="button" class="detail_edit"><a href="/dashboard/applications/{{$application->id}}/edit"><i class="far fa-edit"></i></a></button>
            <div class="table-responsive">
            <table class="detail_table container">
                <tr class="row">
                <td class="seperate_line col-3">Date Applied</td>
                <td class="col-9">{{substr($application->created_at,0,10)}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Job Title</td>
                <td class="col-9">{{$application->job_title}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Company</td>
                <td class="col-9">{{$application->company}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">City</td>
                <td class="col-9">{{$application->city}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Province</td>
                <td class="col-9">{{$application->province}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Address</td>
                <td class="col-9">{{$application->street_address}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Salary</td>
                <td class="col-9">{{$application->salary}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Status</td>
                <td class="col-9">{{$application->status}}</td>
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Job Type</td>
                <td class="col-9">{{$application->job_type}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Contact</td>
                <td class="col-9">{{$application->contact_person}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Email</td>
                <td class="col-9">{{$application->email}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Phone</td>
                <td class="col-9">{{$application->phone}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Source</td>
                <td class="col-9">{{$application->source}}</td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Link</td>
                <td class="col-9" id="wrap_link"><a href="{{$application->link}}" target="_blank">Click here to the job posting</a></td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">Description</td>
                <td class="col-9"><?= htmlspecialchars_decode($application->description); ?></td> 
                </tr>
                <tr class="row">
                <td class="seperate_line col-3">&nbsp;</td>
                <td class="col-9">&nbsp;</td> 
                </tr>
            </table>
        </div>
    </div>
</div>


@endsection