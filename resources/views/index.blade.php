<x-layout>
    <section class="flex justify-center h-screen items-center">
        <div class="h-4/5 ">
            <div class="felx justify-center items-center">
                <h1 class="font-bold text-2xl justify-center">Are you boring?</h1>
                <form action="/" method="GET">
                    @csrf
                    <div class="mt-5 w-48 h-48 flex justify-between bg-blue-50 p-5 rounded-3xl mx-auto">
                        <button name="yes" id="yes" type="submit"
                            class="text-2xl border-2 h-auto border-solid border-blue-400 py-2 px-2 rounded-md w-14 hover:bg-red-500 hover:text-white hover:rounded-2xl">Yes</button>
                        <button name="no" id="no" type="submit"
                            class="text-2xl border-2 h-auto border-solid border-blue-400 py-2 px-2 rounded-md w-14 hover:bg-red-500 hover:text-white hover:rounded-2xl">No</button>
                    </div>
                </form>
            </div>

            @if(isset($_GET['yes']))
            <div class="mt-10 mb-5 p-5 bg-blue-100 hover:bg-blue-50 border-2 border-solid border-blue-600">
                <div class="flex justify-center p-2 items-center">
                    <h2 class="bg-red-400 hover:bg-blue-400 hover:text-blue-50 rounded-md px-1 py-1 font-bold">Activity:
                    </h2>
                    <p class="ml-2 text-2xl">{{$response->activity}}</p>
                </div>
                <div class="flex justify-center p-2 items-center">
                    <h2 class="bg-red-400 hover:bg-blue-400 hover:text-blue-50 rounded-md px-1 py-1 font-bold">Type:
                    </h2>
                    <p class="ml-2 text-2xl">{{$response->type}}</p>
                </div>
                @if($response->link != null)
                <div class="flex justify-center p-2 items-center">
                    <h2 class="bg-red-400 hover:bg-blue-400 hover:text-blue-50 rounded-md px-1 py-1 font-bold">Link:
                    </h2>
                    <a class="ml-2 text-2xl hover:text-blue-600" href="{{$response->link}}">{{$response->link}}</a>
                </div>
                @else
                @endif
            </div>

            @elseif (isset($_GET['no']))
            <div class="flex justify-center mt-4">
                <p class="text-2xl font-bold"><span class="hover:text-blue-600">You are not</span><span
                        class="hover:bg-red-500 hover:text-white py-2 px-2 rounded-md">bored!</span></p>
            </div>

            @else

            @endif
        </div>
    </section>
</x-layout>