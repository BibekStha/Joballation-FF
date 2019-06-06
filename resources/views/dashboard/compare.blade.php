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
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="jobtitle" data-jobid="1">Front End Developer
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="jobtitle" data-jobid="2">Web Designer
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="jobtitle" data-jobid="3">Back End Developer
                </label>
            </div>
        </div>
        <div class="form-inline compare-row ml-4">
                <label class="section-title col-md-1"><span class="title-bar">|</span>Company</label>
            <div class="form-group col-md-11">
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="company" data-jobid="1">Elite Digital Agency
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="company" data-jobid="2">HOMESHOWOFF Inc.
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="company" data-jobid="3">Flywheel Strategic
                </label>
            </div>
        </div>
        <div class="form-inline compare-row ml-4">
            <label class="section-title col-md-1"><span class="title-bar">|</span>City</label>
            <div class="form-group col-md-11">
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="city" data-jobid="1">Toronto
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="city" data-jobid="2">Markham
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="city" data-jobid="3">Toronto
                </label>
            </div>
        </div>
        <div class="form-inline compare-row ml-4">
            <label class="section-title col-md-1"><span class="title-bar">|</span>Travel Time</label>
            <div class="form-group col-md-11">
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="travelTime" data-jobid="1">1 Hour
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="travelTime" data-jobid="2">50 Minutes
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="travelTime" data-jobid="3">1 Hour 30 Minutes
                </label>
            </div>
        </div>
        <div class="form-inline compare-row ml-4">
            <label class="section-title col-md-1"><span class="title-bar">|</span>Travel Cost</label>
            <div class="form-group col-md-11">
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="travelCost" data-jobid="1">$12 (One Way)
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="travelCost" data-jobid="2"> Gas
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="travelCost" data-jobid="3">$6 (One Way)
                </label>
            </div>
        </div>
        <div class="form-inline compare-row ml-4">
            <label class="section-title col-md-1"><span class="title-bar">|</span>Salary</label>
            <div class="form-group col-md-11">
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="salary" data-jobid="1">$27/hr
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="salary" data-jobid="2">$29/hr
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="salary" data-jobid="3">N/A
                </label>
            </div>
        </div>
        <div class="form-inline compare-row ml-4">
            <label class="section-title col-md-1"><span class="title-bar">|</span>Benefits</label>
            <div class="form-group col-md-11">
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="benefits" data-jobid="1">Full
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="benefits" data-jobid="2">N/A
                </label>
                <label class="checkbox-inline col-md-3 compare-option">
                    <input type="checkbox" name="benefits" data-jobid="3">N/A
                </label>
            </div>
        </div>
        <!--End of Options-->
        <div class="form-inline compare-row ml-4">
                <label class="section-title col-md-1"></label>
            <div class="form-group col-md-11">
                <div class="score-container job1 col-md-3">
                    <span><i class="trash-can far fa-trash-alt"></i></span>
                    <span class="compare-score1 float-right" data-jobid="1">0</span>
                </div>
                <div class="score-container job2 col-md-3">
                        <span><i class="trash-can far fa-trash-alt"></i></span>
                        <span class="compare-score2 float-right" data-jobid="2">0</span>
                    </div>
                    <div class="score-container job3 col-md-3">
                    <span><i class="trash-can far fa-trash-alt"></i></span>
                    <span class="compare-score3 float-right" data-jobid="3">0</span>
                </div>
            </div>
        </div>
        <button class="btn float-right save-btn">Save <i class="fas fa-star"></i></button>
    </form>
   
</div>
@endsection