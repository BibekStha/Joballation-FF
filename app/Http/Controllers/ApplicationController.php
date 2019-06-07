<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Application;

class ApplicationController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user_id = Auth::id();

      $applications = Application::where('user_id', $user_id)->paginate(5);
      return view('dashboard.home', ['applications' => $applications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      return view('applications.add', ['job' => []]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user_id = Auth::id();
      
      $form_input_validated = $request->validate([
        'job_title' => 'required',
        'company' => 'nullable',
        'description' => 'nullable',
        'contact_person' => 'nullable',
        'street_address' => 'nullable',
        'city' => 'nullable',
        'province' => 'nullable',
        'country' => 'nullable',
        'postal_code' => 'nullable',
        'salary' => 'nullable',
        'status' => 'nullable',
        'source' => 'nullable',
        'link' => 'nullable'
      ]);

      $form_input_sanitized = filter_var_array($form_input_validated, FILTER_SANITIZE_STRING);

      // echo($form_input_sanitized['contact_person']);
      // exit();

      // inserting user_id in the above array
      $form_input_sanitized['user_id'] = $user_id;

      // save that to the db
      $job = Application::create($form_input_sanitized);


      $lastInsertedId = $job->id;
      
      // return view('applications.add', ['msg' => "last inserted id is $lastInsertedId"]);
      return redirect()->action('ApplicationController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user_id = Auth::id();

      $application = Application::where('user_id', $user_id)->find($id);
    
      // Use $application in blade files to access this particular application details
      return view('applications.show', ['application' => $application]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getURL(Request $request) {

      $user_id = Auth::id();

      // Get job post url
      $job_url = $request->input('job_url');

      // Get details of the job using html scraping
      $job_details = $this->getJobDetails($job_url);

      return view('applications.add', ['job' => $job_details]);
    }

    private function getJobDetails($url) {
      $file = file_get_contents($url);
      $job_details = [];
      $job_details['url'] = $url;

      // Job Title
      $jobtitle_start = strpos($file, '<h3 class="icl-u-xs-mb--xs icl-u-xs-mt--none jobsearch-JobInfoHeader-title">') + 76;
      $jobtitle_end = strpos($file, '</h3>', $jobtitle_start+1);
      $jobtitle = substr($file, $jobtitle_start, ($jobtitle_end-$jobtitle_start));
      $job_details['title'] = $jobtitle;

      // Job Title
      $company_start = strpos($file, '<div class="icl-u-xs-mt--xs jobsearch-JobInfoHeader-subtitle jobsearch-DesktopStickyContainer-subtitle">');
      $company_start = strpos($file, '<a', $company_start + 1);
      $company_start = strpos($file, '>', $company_start + 1) + 1;
      $company_end = strpos($file, '</a>', $company_start+1);
      $companyname = substr($file, $company_start, ($company_end-$company_start));
      $job_details['company'] = $companyname;

      // Location
      $location_start = strpos($file, '<span class="jobsearch-JobMetadataHeader-iconLabel">') + 52;
      $location_end = strpos($file, '</span>', $location_start+1);
      $location = substr($file, $location_start, ($location_end-$location_start));
      $location = \explode(', ', $location);
      $city = $location[0];
      $province = $location[1];
      $job_details['city'] = $city;
      $job_details['province'] = $province;
      
      // Job Description
      $jobdescription_start = strpos($file, '<div id="jobDescriptionText" class="jobsearch-jobDescriptionText">') + 66;
      $jobdescription_end = strpos($file, '</div>', $jobdescription_start+1);
      $jobdescription = substr($file, $jobdescription_start, ($jobdescription_end-$jobdescription_start));
      $job_details['description'] = \htmlspecialchars($jobdescription);

      return($job_details);
    }

    private function compare($ids) {
      $applications = Application::find($ids);

      return view('dashboard.compare', ['applications' => $applications]);
    }
    
}
