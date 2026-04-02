<x-layout title="Welcome Page">
    {{-- @dump($tasks) --}}
    {{--  @dd($tasks) --}} 
    @if(count($tasks))
        <p>There are <?= count($tasks) ?> tasks</p>
    @endif
    <h1>Welcome page (tasks)</h1>

    
    @forelse ($tasks as $task)
    <li>{{ $task }}</li>
    @empty
    <P>No tasks are there!.</P>
    @endforelse
    
</x-layout>
