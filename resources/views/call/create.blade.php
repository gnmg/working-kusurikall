@extends('layouts.app')

@section('content')
<!-- component -->


@if ($errors->any())

<div class="px-8 py-6 flex flex-col items-center">
    <div class="alert alert-danger text-red-600 bg-white my-4 shadow p-8 w-full lg:w-3/5 items-center">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>

@endif
<form action="{{ route('call.store') }}" method="post">
    @csrf
    <div class="px-8 py-6 flex flex-col items-center">
        <div class="bg-white my-4 shadow p-8 w-full lg:w-3/5 items-center">
            <div class="flex items-center mb-8">
                <div
                    class="border-2 border-blue-400 px-3 py-1 rounded-full font-bold text-blue-500 h-10 w-10 mr-2 text-xl">
                    1
                </div>
                <h2 class="text-lg">{{ __('lang.reminder_title')}}</h2>
            </div>
            <div class="w-full mb-4">
                <div class="">
                    <label for="title" class="block text-lg mb-2 mr-3 mt-3">{{ __('lang.title')}}<span
                            class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                    <input type="text" id="title" name="title" placeholder="{{ __('lang.title')}}"
                        class=" text-sm border-gray-300 md:w-1/8 shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none mb-0.5 @error('title') border-2 border-red-500 @enderror"
                        value="{{ old('title') }}">

                    @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="block text-xs text-gray-600 md:text-base mb-2 mr-3 mt-3">{{ __("Enter a title that is easy to　remember.")}}</div>
                </div>
            </div>
        </div>
        <div class="bg-white my-4 shadow p-8 w-full lg:w-3/5 items-center">
            <div class="flex items-center mb-8">
                <div
                    class="border-2 border-blue-400 px-3 py-1 rounded-full font-bold text-blue-500 h-10 w-10 mr-2 text-xl">
                    2
                </div>
                <h2 class="text-lg">{{ __('lang.schedule')}}</h2>
            </div>
            <div class="w-full mb-4">
                <div class="">
                    <label for="time" class="block text-lg mb-2 mr-3 mt-3">{{ __('lang.time')}}<span
                            class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                            
                    <input type="text" id="time" name="time" placeholder="Time"
                        class=" bs-timepicker text-sm border-gray-300 md:w-1/8 shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none mb-0.5 @error('time') border-2 border-red-500 @enderror"
                        value="{{ old('time') }}">

                    @error('time')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror


                    <div class="block text-xs text-gray-600 md:text-base mb-16 mr-3 mt-3">{{ __("Enter the time you want to be called.")}}</div>
                </div>
            </div>


            <div class="w-full mb-4">
                <div class">
                    <label for="phone_numbers" class="block text-lg mb-2 mr-3 mt-3">{{ __('lang.phone_number')}}<span
                            class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                    <input type="text" id="phone_numbers" name="phone_numbers"
                        class="text-sm border-gray-300 md:w-1/4  shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none mb-0.5 @error('phone_numbers') border-2 border-red-500 @enderror" placeholder="{{ __('lang.phone_number')}}"
                        value="{{ old('phone_numbers') }}">

                    @error('phone_numbers')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror


                    <div class="block text-xs text-gray-600 md:text-base mb-2 mr-3 mt-3">{{ __("Enter the phone number you would like to be called at.")}}</div>
                </div>
            </div>
        </div>
        <div class="bg-white my-4 shadow p-8 w-full lg:w-3/5 items-center">
            <div class="flex items-center mb-8">
                <div
                    class="border-2 border-blue-400 px-3 py-1 rounded-full font-bold text-blue-500 h-10 w-10 mr-2 text-xl">
                    3
                </div>
                <h2 class="text-lg">{{ __('lang.message')}}</h2>
            </div>
            <div class="w-full mb-4">
                <div class="">
                    <label for="message_voice" class="block text-lg mb-2 mr-3 mt-3">{{ __('lang.message_voice')}}<span
                            class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                    <label class="inline-flex items-center">
                        <input type="radio" id="message_voice" name="message_voice" value="Male" class=""
                            placeholder="Message Voice" {{ (old('message_voice') == "Male") ? 'checked' : '' }} >
                        <span class="ml-2">{{ __('lang.male')}}</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" id="message_voice" name="message_voice" value="Female" class=""
                            placeholder="Message Voice" {{ (old('message_voice') == "Female") ? 'checked' : '' }}>
                        <span class="ml-2">{{ __('lang.female')}}</span>
                    </label>
                    
                    @error('message_voice')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="block text-xs text-gray-600 md:text-base mb-16 mr-3 mt-3">{{ __("Choose the voice that the message will be played in.")}}</div>

                </div>
            </div>
            <div class="w-full mb-4">
                <div class="">
                    <label for="message" class="block text-lg mb-2 mr-3 mt-3">{{ __('lang.message')}}<span
                            class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                    <textarea type="textarea" id="message" name="message"
                        class="text-sm border-gray-300 w-full  md:w-3/4 shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none  @error('message') border-2 border-red-500 @enderror"
                        placeholder="{{ __('lang.message')}}">{{ old('message') }}</textarea>
                    @error('message')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="block text-xs text-gray-600 md:text-base mb-2 mr-3 mt-3">{{ __("Type in a message that will be played when the call is answered.")}}</div>
                </div>
            </div>
        </div>
        <div class="bg-white my-4 shadow p-8 w-full lg:w-3/5 items-center">
            <div class="flex items-center mb-8">
                <div
                    class="border-2 border-blue-400 px-3 py-1 rounded-full font-bold text-blue-500 h-10 w-10 mr-2 text-xl">
                    4
                </div>
                <h2 class="text-lg">{{ __('lang.alert')}}</h2>
            </div>
            <div class="w-full mb-4">
                <div class="">
                    <label for="sos" class="block text-lg mb-2 mr-3 mt-3">{{ __('lang.turn_on_alert_message')}}<span
                            class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                    <label class="inline-flex items-center">
                        <input type="radio" id="sos" name="sos" value="yes" class="" placeholder="Message Voice"  {{ (old('sos') == "yes") ? 'checked' : '' }} >
                        <span class="ml-2">{{ __('lang.yes')}}</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" id="sos" name="sos" value="no" class="" placeholder="Message Voice"  {{ (old('sos') == "no") ? 'checked' : '' }} >
                        <span class="ml-2">{{ __('lang.no')}}</span>
                    </label>

                    @error('sos')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="block text-xs text-gray-600 md:text-base mb-16 mr-3 mt-3">{{ __("Do you want to have an alert email sent if the call is not answered?")}}</div>

                </div>


                <div class="w-full mb-4">
                    <div class="mb-16">
                        <label for="sos_email" class="block text-lg mb-2 mr-3 mt-3">{{ __('lang.email')}}</label>
                        <input type="text" id="sos_email" name="sos_email"
                            value="{{ old('sos_email') }}"
                            class="text-sm border-gray-300 md:w-1/4 shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none mb-0.5  @error('sos_email') border-2 border-red-500 @enderror"
                            placeholder="{{ __('lang.email')}}">
                        @error('sos_email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                            @enderror
                            <div class="block text-xs text-gray-600 md:text-base mb-16 mr-3 mt-3">{{ __("Enter the email addess where you want the alert sent to.")}}</div>
                        </div>
                    </div>
                </div>
                <div class="w-full mb-4">
                    <div class="items-center">
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-3 rounded font-medium place-self-center ">{{ __('lang.submit')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>




@endsection('content')