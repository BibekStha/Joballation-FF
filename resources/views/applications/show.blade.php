@extends('layouts.app')

@section('page_title', 'Detail')

@section('content')
<div class="detail_container">
    <div class="left_col">
        <button class="btn back-btn col-md-1 m-0"><i class="fas fa-caret-left mr-2"></i> Back</button>
    </div>
    <div class="right_col">
        <form action="">
            <div class="icon_bar">
                <button type="button" class="detail_delete"><i class="trash-can far fa-trash-alt"></i></button>
                <button type="button" class="detail_edit"><i class="far fa-edit"></i></button>
            </div>
        </form>
        <table class="detail_table">
            <tr class="row">
                <td class="seperate_line col-md-2">Date Applied</td>
                <td class="col-md-10">{{substr($application->created_at,0,10)}}</td> 
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">Job Title</td>
                <td class="col-md-10">{{$application->job_title}}</td> 
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">Company</td>
                <td class="col-md-10">{{$application->company}}</td> 
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">City</td>
                <td class="col-md-10">{{$application->city}}</td> 
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">Province</td>
                <td class="col-md-10">{{$application->province}}</td> 
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">Address</td>
                <td class="col-md-10">{{$application->street_address}}</td> 
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">Salary</td>
                <td class="col-md-10">{{$application->salary}}</td> 
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">Contact</td>
                <td class="col-md-10">{{$application->contact_person}}</td> 
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">Status</td>
                <td class="col-md-10">{{$application->status}}</td>
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">Source</td>
                <td class="col-md-10">{{$application->source}}</td> 
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">Link</td>
                <td class="col-md-10"><a href="{{ url('$application->link')}}" target="_blank">{{$application->link}}</a></td> 
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">Description</td>
                <td class="col-md-10">{{$application->description}}</td> 
            </tr>
            <tr class="row">
                <td class="seperate_line col-md-2">&nbsp;</td>
                <td class="col-md-10">&nbsp;</td> 
            </tr>
        </table>
    </div>
</div>


@endsection