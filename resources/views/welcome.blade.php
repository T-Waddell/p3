@extends('layouts.master')

@section('title')
    Waddell - Project 3: Time to Save
@endsection

@section('content')
    <h1>{{ config('app.name') }}</h1>

    <p>
        Show the instructions and the form.
    </p>
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-6">
                <h1>Time to Save</h1>
                <p>Use this calculator to learn how long your savings goal will take you.</p>
                <form method='GET' action='calculate.php'>

                    <label>How much money do you want to save?
                        <input type='text' name='savingsGoal' value='<?php if (isset($savingsGoal)) echo $savingsGoal ?>'>
                    </label>
                    <label>How much money can you put into savings each week or month?
                        <input type='text' name='savings' value='<?php if (isset($savings)) echo $savings ?>'>
                    </label>
                    <label><input type='radio'
                                  name='cadence'
                                  value='weekly' <?php if (isset($cadence) AND $cadence == 'weeks') echo 'checked' ?>> Weekly</label>
                    <label><input type='radio'
                                  name='cadence'
                                  value='monthly' <?php if (isset($cadence) AND $cadence == 'months') echo 'checked' ?>> Monthly</label>
                    <label>What date do you plan to start saving?
                        <input type="date"
                               id="start"
                               name="startDate"
                               value='<?php if (isset($startDate)) echo $startDate ?>'>
                    </label>
                    <input type='submit' value='Calculate'>
                </form>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
@endsection
