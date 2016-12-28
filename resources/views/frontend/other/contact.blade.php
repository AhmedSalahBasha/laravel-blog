@extends('layouts.master')

@section('tiltle')
    Contact 
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::secure('src/css/form.css') }}" type="text/css" />
@endsection

@section('content')
    @include('includes.info-box')
    <form action="{{ route('contact.send') }}" method="post" id="contact-form">
        <div class="input-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Your Name" {{ $errors->has('name') ? 'class=has-error' : '' }} value="{{ Request::old('name') }}" />
        </div>
        <div class="input-group">
            <label for="email">Your E-Mail</label>
            <input type="email" name="email" id="email" placeholder="Enter Your E-Mail" {{ $errors->has('email') ? 'class=has-error' : '' }} value="{{ Request::old('email') }}" />
        </div>
        <div class="input-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Enter The Subject of Your Message" {{ $errors->has('subject') ? 'class=has-error' : '' }} value="{{ Request::old('subject') }}" />
        </div>
        <div class="input-group">
            <label for="message">Your Message</label>
            <textarea name="message" id="message" row="20" {{ $errors->has('message') ? 'class=has-error' : '' }}>{{ Request::old('message') }}</textarea>
        </div>
        <button type="submit" class="btn">Submit Message</button>
        <input type="hidden" value="{{ Session::token() }}" name="_token"/>
    </form>
@endsection