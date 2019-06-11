@extends('layouts.app')

@section('page_title', 'Application Compare')

@section('content')
<meta name="csrf-token" content="{!! csrf_token() !!}">
<div class="row my-4">
    <button class="btn back-btn col-md-2 m-0"><i class="fas fa-caret-left mr-2"></i> Back</button>
        <form class="pl-4 col-md-10" id="compare-form">
            <div id="compare-header-block">
                    <p class="compare-icon"><i class="fas fa-exchange-alt"></i></p>
                    <p class="compare-title">Compare Jobs</p>
                <div class="compare-slogan">
                    <p class="compare-subtitle">Click the details that matter the most to you.</p>
                </div>
            </div>
        <div class="form-inline compare-row">
            <label class="section-title col-md-2"><span class="title-bar">|</span>Date Applied</label>
            <div class="form-group col-md-10">
                @foreach($applications as $application)
                <label class="checkbox-inline col-md-3 compare-option">
                    {{substr($application->created_at,0,10)}}
                </label>
                @endforeach
            </div>
        </div>
        <div class="form-inline compare-row">
            <label class="section-title col-md-2"><span class="title-bar">|</span>Job Title</label>
            <div class="form-group col-md-10">
                @foreach($applications as $application)
                    <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="jobtitle" data-jobid="{{$application->id}}">{{$application->job_title}}
                </label>
                @endforeach
            </div>
        </div>
        <div class="form-inline compare-row">
                <label class="section-title col-md-2"><span class="title-bar">|</span>Company</label>
            <div class="form-group col-md-10">
                @foreach($applications as $application)
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="company" data-jobid="{{$application->id}}">{{$application->company}}
                </label>
                @endforeach
            </div>
        </div>
        <div class="form-inline compare-row">
            <label class="section-title col-md-2"><span class="title-bar">|</span>City</label>
            <div class="form-group col-md-10">
                    @foreach($applications as $application)
                    <label class="checkbox-inline col-md-3 compare-option">
                        <input type="checkbox" name="city" data-jobid="{{$application->id}}">{{$application->city}}, {{$application->province}}
                    </label>
                    @endforeach
            </div>
        </div>
        <div class="form-inline compare-row">
            <label class="section-title col-md-2"><span class="title-bar">|</span>Salary</label>
            <div class="form-group col-md-10">
                    @foreach($applications as $key=>$application)
                    <label class="checkbox-inline col-md-3 compare-option">
                        @if($application->salary != NULL)
                            <input type="checkbox" name="salary" data-jobid="{{$application->id}}">{{$application->salary}}
                        @else
                            <input type="checkbox" name="salary" data-jobid="{{$application->id}}">N/A
                        @endif
                    </label>
                    @endforeach
            </div>
        </div>
        <!--End of Options-->
        <div class="form-inline compare-row">
                <label class="section-title col-md-2"></label>
            <div class="form-group mobile-score col-md-10">
                @foreach($applications as $key=>$application)
                <div class="score-container job{{$key+1}} col-md-3 col-sm-12">
                    {{-- <span><i class="trash-can far fa-trash-alt"></i></span> --}}
                    <span class="compare-score{{$key+1}}" data-jobid="{{$application->id}}">0</span>
                </div>
                @endforeach
            </div>
        </div>
        {{-- <button class="btn float-right save-btn">Save <i class="fas fa-star"></i></button> --}}
    </form>
</div>
@endsection