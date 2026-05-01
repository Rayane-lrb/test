<x-site-layout>
    <h1 class="flex text-4xl text-white justify-start m-auto">About</h1>
    <section class="flex justify-center rounded-xl  bg-green-300 max-w-1/2 h-120 m-10 shadow-md shadow-green-800">
        <img class="flex w-xl rounded justify-start mr-auto" src="/images/matthew-stephenson-zya2lvVNY3g-unsplash.jpg" alt="about img">
        <div class="flex justify-center items-center flex-1">
        <table class="text-white text-xl mt-">
            <tr class="border-b-yellow-200 border-b-2">
                <th class="text-left">Naam:</th>
                <td class="text-left">{{$personInfo['name']}}</td>
            </tr>
            <tr class="border-b-yellow-200 border-b-2">
                <th class="text-left">Leeftijd:</th>
                <td class="text-left">{{$personInfo['age']}}</td>
            </tr>
            <tr class="border-b-yellow-200 border-b-2">
                <th class="text-left align-top">Hobbies:</th>
                <td class="text-left align-top">
                    @foreach($personInfo['hobbies'] as $hobby)
                        <p>-{{$hobby}}</p>
                    @endforeach
                </td>
            </tr>
        </table>
        </div>
    </section>
<div class="flex justify-center text-red-500">
    <p class="text-blue-400">{{$safe}}</p>
    <br>
    <p class="text-red-600">{!! $unsafe !!}</p>
</div>
    <div class="bg-white w-1/4">
        <h2>Users List</h2>
        <ul>
        @foreach($users as $index => $user)
                <li>{{$index}} - {{$user['name']}} - {{$user['email']}}</li>
            @endforeach
        </ul>
    </div>
    <br>
</x-site-layout>
