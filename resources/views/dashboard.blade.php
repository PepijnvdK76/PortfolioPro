@extends('projects.layout')
<x-head></x-head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="btn btn-primary" href="{{ route('projects.create') }}"> Create New Project</a>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td><img src="/images/{{ $project->image }}" width="100vw"></td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->date }}</td>
                                <td>{{ $project->category }}</td>
                                <td>
                                    <form action="{{ route('projects.destroy',$project->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('projects.show',$project->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>


{{--
                    {!! $projects->links() !!}
--}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
