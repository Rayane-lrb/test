<x-site-layout>
    <section class="flex flex-wrap justify-center gap-2">
        @foreach($tasks as $task)
            <a href="{{route('tasks.show', $task->id)}}" class="block">
                <div class="flex bg-green-200 mb-2 w-lg justify-center h-45 flex-col">
                    <h1 class="text-xl font-bold">{{$task->title}}</h1>
                    <p>{{$task->description}}</p>
                    <p class="bg-green-600 rounded w-xs ml-auto">{{$task->due_date}}</p>
                </div>
            </a>
        @endforeach
    </section>
</x-site-layout>
