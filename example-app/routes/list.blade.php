Create a list in a Blade file, such as resources/views/list.blade.php:
@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-bold">Top Frameworks</h2>
    <ul class="list-disc pl-6 mt-4">
        <li>Laravel</li>
        <li>React</li>
        <li>Vue.js</li>
    </ul>
</div>
@endsection
