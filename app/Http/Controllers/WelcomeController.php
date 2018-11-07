<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class WelcomeController extends Controller
{
    /*
     * route: /
     * Show form to input savings information
     */
    public function index(Request $request)
    {
        #return view('welcome');
        #return 'Show the instructions and the form.';
        return view('welcome')->with([
            'calculated' => $request->session()->get('calculated', ''),
            'cadence' => $request->session()->get('cadence', ''),
            'savingsGoal' => $request->session()->get('savingsGoal', ''),
            'savings' => $request->session()->get('savings', ''),
            'startDate' => $request->session()->get('startDate', ''),
            'stringStartDate' => $request->session()->get('stringStartDate', ''),
            'daysToAdd' => $request->session()->get('daysToAdd'),
            'completeDate' => $request->session()->get('completeDate', '')
        ]);
    }

    /*
     * route: /results
     * Calculate the results and redirect user back to form with results displayed below
     */
    public function calculate(Request $request)
    {
        # Validate the request data
        $request->validate([
            'savingsGoal' => 'required|numeric|min:1',
            'savings' => 'required|numeric|min:1',
            'cadence' => 'required',
            'startDate' => 'required',
        ]);

        #Get our variables from the form:
        $savingsGoal = $request->input('savingsGoal', '');
        $savings = $request->input('savings', '');
        $cadence = $request->input('cadence', null);
        $startDate = $request->input('startDate');
        $daysToAdd = 0;

        #Adjust the cadence verbiage:
        If ($cadence == 'weekly') {
            $cadence = 'weeks';
        } else {
            $cadence = 'months';
        }

        #Calculate the length of time needed to reach the savings goal:
        $calculated = ceil($savingsGoal / $savings);

        if ($cadence == 'weeks') {
            $daysToAdd = $calculated * 7;
        } else if ($cadence == 'months') {
            $daysToAdd = $calculated * 30;
        }

        #convert the string to an integer
        #$daysToAdd = intval($daysToAdd);

        #Add days to the start date:
        #$completeDate = date('m-d-y', strtotime("$startDate +$this->$daysToAdd days"));
        #$completeDate = $startDate->addDays($daysToAdd);
        #$completeDate = $startDate;

        $carbonStartDate = new Carbon($startDate);
        $stringStartDate = $carbonStartDate->toFormattedDateString();
        $completeDate = $carbonStartDate->addDays($daysToAdd);
        $completeDate = $completeDate->toFormattedDateString();



        # Redirect back to the search page w/ the data (if any) stored in the session
        # Ref: https://laravel.com/docs/redirects#redirecting-with-flashed-session-data
        return redirect('/')->with([
            'calculated' => $calculated,
            'cadence' => $cadence,
            'savingsGoal' => $savingsGoal,
            'savings' => $savings,
            'startDate' => $startDate,
            'stringStartDate' => $stringStartDate,
            'daysToAdd' => $daysToAdd,
            'completeDate' => $completeDate
        ]);
    }
}
