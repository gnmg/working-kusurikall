@extends('layouts.app')

@section('content')
<div class="px-8 py-6 flex flex-col items-center">
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
    
    @if(is_countable($calls) && count($calls) > 0)
    <!-- Start Call Table-->
    <div class="mt-12  lg:w-1/2">
        <div class="flex justify-between">
            <h2 class="text-2xl font-medium">{{ __('lang.myreminders')}}</h2>
            <a href="{{route('call.create')}}"
                class="flex bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" stroke-width="20" fill="white" /></svg>{{ __('lang.addreminder')}}</a>
        </div>

        <div class="mt-4">
            <div class="flex flex-col">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6">
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        <table class="min-w-full">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                        style="text-align: start">
                                        {{ __('lang.reminder_title')}}
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                        style="text-align: start">
                                        {{ __('lang.time')}}
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                        style="text-align: start">
                                        {{ __('lang.phone_number')}}
                                    </th>
                                    
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach($calls as $call)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ $call -> title }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ $call -> time }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">0
                                        {{ $call -> phone_numbers }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                        <a href="{{ route('call.edit', $call->id)}}"
                                            class="text-indigo-600 hover:text-indigo-900"><span
                                                class="px-2 inline-flex text-base leading-5 font-semibold rounded-full bg-blue-200 text-black-800">
                                                {{ __('lang.edit')}}
                                            </span></a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm
                                        leading-5 font-medium">
                                        <button onclick="document.getElementById('id03').style.display='block'"
                                            class="px-2 inline-flex text-base leading-5 font-semibold rounded-full bg-red-200 text-black-800">{{ __('lang.delete')}}
                                        </button>
                                        <div id="id03" class='hidden'>
                                            <!-- This example requires Tailwind CSS v2.0+ -->
                                            <div class="fixed z-10 inset-0 overflow-y-auto">
                                                <div
                                                    class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                                                    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                                    </div>

                                                    <!-- This element is to trick the browser into centering the modal contents. -->
                                                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                        aria-hidden="true">&#8203;</span>

                                                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                                        role="dialog" aria-modal="true"  x-show="on"
                                                        aria-labelledby="modal-headline">
                                                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                            <div class="sm:flex sm:items-start">
                                                                <div
                                                                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                    <!-- Heroicon name: exclamation -->
                                                                    <svg class="h-6 w-6 text-red-600"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor"
                                                                        aria-hidden="true">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                                    </svg>
                                                                </div>
                                                                <div
                                                                    class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                    <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                        id="modal-headline">
                                                                        {{ __('lang.delete_reminder')}}
                                                                    </h3>
                                                                    <div class="mt-2">
                                                                        <p class="text-sm text-gray-500">
                                                                        {{ __("Are you sure you want to delete this reminder?")}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                            <form action="{{ route('call.destroy', $call->id)}}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                    {{ __('lang.delete')}}
                                                                </button>
                                                                 
                                                                {{--
                                                                <button type="button"
                                                                  
                                                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" 
                                                                {{ __('lang.cancel')}}
                                                            </button> // TODO: This button is not working.
                                                            --}}
                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else

                        <div class="container px-4 sm:px-8 mx-auto max-w-lg">

                            <!-- card wrapper -->
                            <div class="wrapper bg-white rounded-sm shadow-lg mt-20">

                                <div class="card px-8 py-8">


                                    <div class="card-text">
                                        <h1 class="text-xl md:text-2xl font-bold leading-tight text-gray-900">You do not have</h1>
                                        <h1 class="text-xl md:text-2xl font-bold leading-tight text-gray-900">any reminders</h1>
                                        
                                    </div>

                                    <div class="mt-10  flex justify-center">
                                    <div class=""><a href="{{ URL::route('call.create') }}"
                                            class="flex bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                                width="24">
                                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" stroke-width="20"
                                                    fill="white" /></svg>Add Reminder</a></div>
                                        
                                    </div>
                                </div>
                            </div>


                        </div>



                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

    $('#myModal').modal({
    backdrop: 'static',
    keyboard: false
}
</script>

@endsection