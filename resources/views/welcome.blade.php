@extends('layouts.master')

@section('title')
    Waddell - Project 3: Time to Save
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
                <h1>{{ config('app.name') }}</h1>
                <p>Use this calculator to learn how long it will take you to reach your savings goal.</p>
                <form method='GET' action='/results'>

                    <label>How much money do you want to save?
                        <input type='text' name='savingsGoal' value='{{ old('savingsGoal', $savingsGoal) }}'>
                    </label>
                    @if($errors->get('savingsGoal'))
                        <div class='error'>{{ $errors->first('savingsGoal') }}</div>
                    @endif
                    <label>How much money can you put into savings each week or month?
                        <input type='text' name='savings' value='{{ old('savings', $savings) }}'>
                    </label>
                    @if($errors->get('savings'))
                        <div class='error'>{{ $errors->first('savings') }}</div>
                    @endif
                <!--
                    Code for retaining the radio checked for the form from Stack Overflow: https://stackoverflow.com/a/51192546
                    -->
                    <label class='radio'><input type='radio'
                                                name='cadence'
                                                value='weekly'
                                {{ (old('cadence', $cadence) == 'weekly') ? 'checked' : '' }}> Weekly</label>
                    <label class='radio'><input type='radio'
                                                name='cadence'
                                                value='monthly' {{(old('cadence', $cadence) == 'monthly') ? 'checked' : ''}}> Monthly</label>
                    @if($errors->get('cadence'))
                        <div class='error'>{{ $errors->first('cadence') }}</div>
                    @endif
                    <label>What date do you plan to start saving?
                        <input type="date"
                               id="start"
                               name="startDate"
                               value='{{ old('startDate', $startDate) }}'>
                    </label>
                    @if($errors->get('startDate'))
                        <div class='error'>{{ $errors->first('startDate') }}</div>
                    @endif
                    <input type='submit' value='Calculate'>
                </form>
                @if(count($errors) > 0)
                    <ul class='alert alert-danger'>
                        Please correct the errors above.
                    </ul>
                @endif
                @if($calculated)
                    <div class='alert alert-primary' role='alert'>
                        <p>It will take you {{ $calculated }} {{ $cadenceForPrint }} to save for your goal of ${{ $savingsGoal }}.</p>
                        <p>If you start saving on {{ $stringStartDate }}, you will reach your goal on approximately {{ $completeDate }}.</p>
                    </div>
                @endif
            </div>
            <div class="col">
            </div>
        </div>
    </div>
@endsection
