@extends('layouts.app')

@section('page_title', 'Application Compare')

@section('content')


<div class="row my-4">
    <button class="btn back-btn col-md-1 m-0"><i class="fas fa-caret-left mr-2"></i> Back</button>
        <form class="pl-4 col-md-11" id="compare-form">
            <div id="compare-header-block">
                    <p class="compare-icon"><i class="fas fa-exchange-alt"></i></p>
                    <p class="compare-title">Compare Jobs</p>
                <div class="compare-slogan">
                    <p class="compare-subtitle">Click the details that matter the most to you.</p>
                </div>
            </div>
        <div class="form-inline compare-row ml-4">
            <label class="section-title col-md-1"><span class="title-bar">|</span>Job Title</label>
            <div class="form-group col-md-11">
                <label class="radio-inline col-md-3 compare-option">
                    <input type="radio" name="jobtitle" data-jobid="1">Option 1
                </label>
                <label class="radio-inline col-md-3 compare-option">
                    <input type="radio" name="jobtitle" data-jobid="2">Option 2
                </label>
                <label class="radio-inline col-md-3 compare-option">
                    <input type="radio" name="jobtitle" data-jobid="3">Option 3
                </label>
            </div>
        </div>
        <div class="form-inline compare-row ml-4">
                <label class="section-title col-md-1"><span class="title-bar">|</span>Job Title</label>
            <div class="form-group col-md-11">
                <label class="radio-inline col-md-3 compare-option">
                    <input type="radio" name="company" data-jobid="1">Option 1
                </label>
                <label class="radio-inline col-md-3 compare-option">
                    <input type="radio" name="company" data-jobid="2">Option 2
                </label>
                <label class="radio-inline col-md-3 compare-option">
                    <input type="radio" name="company" data-jobid="3">Option 3
                </label>
            </div>
        </div>
        <!--End of Options-->
        <div class="form-inline compare-row ml-4">
                <label class="section-title col-md-1"></label>
            <div class="form-group col-md-11">
                <div class="score-container job1 col-md-3">
                    <span><i class="far fa-trash-alt"></i></span>
                    <span class="compare-score1 float-right" data-jobid="1">0</span>
                </div>
                <div class="score-container job2 col-md-3">
                        <span><i class="far fa-trash-alt"></i></span>
                        <span class="compare-score2 float-right" data-jobid="2">0</span>
                    </div>
                    <div class="score-container job3 col-md-3">
                    <span><i class="far fa-trash-alt"></i></span>
                    <span class="compare-score3 float-right" data-jobid="3">0</span>
                </div>
            </div>
        </div>
        <button class="btn float-right save-btn col-md-1">Save <i class="fas fa-star"></i></button>
    </form>
   
</div>
@endsection