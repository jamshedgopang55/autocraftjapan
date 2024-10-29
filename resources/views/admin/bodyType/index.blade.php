
@extends('admin.layout.app')

@section('title', 'Body Types')

@section('content')

@include('admin.message')

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4>Body Types</h4>
                <a class="btn btn-primary" href="{{ route('admin.bodyType.create') }}">Create Body type</a>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                              #
                                            </th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th colspan="2" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($bodyTypes as $bodyType)
                                        <tr>
                                            <td class="text-center">{{ $bodyType->id }}</td>
                                            <td>{{ $bodyType->name }}</td>
                                            <td>{{ $bodyType->slug }}</td>
                                            <td>
                                                @if ($bodyType->status == true)
                                                    <svg class=" text-success tick-icon" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                @else
                                                    <svg class="text-danger tick-icon" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                @endif
                                            </td>
                                            <td class="action-btns">
                                                <a href="{{ route('admin.bodyType.edit', $bodyType->id) }}"
                                                    class="btn btn-primary">Edit</a>

                                                <form action="{{ route('admin.bodyType.destroy', $bodyType->id) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this bodyType?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('customJs')

@endsection
