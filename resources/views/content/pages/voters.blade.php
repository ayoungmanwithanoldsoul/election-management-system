@extends('layouts/contentNavbarLayout')

@section('title', 'Voters')

@section('content')
    {{-- <pre>
@php
    if (sizeof($query) != 0) {
        print_r($query);
        print_r($query[0]->firstname);
    }

@endphp
</pre> --}}
    <h4 class="fw-bold mb-4 py-3">
        <span class="text-muted fw-light">{{ ucfirst(session('user')) }} /</span> Voters
    </h4>

    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">Registered Voters</h5>
        <div class="table-responsive text-nowrap">
            <table class="table-hover table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Section</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @for ($i = 0; $i < sizeof($query); $i++)
                        <tr>
                            <td><strong>{{ $query[$i]->firstname }} {{ $query[$i]->lastname }}</strong></td>
                            <td>Grade {{ $query[$i]->level }}</td>
                            <td>{{ $query[$i]->section }}</td>
                            <td>
                                @php
                                    if ($query[$i]->voted == 1) {
                                        echo "<span class='badge bg-label-success me-1'>Already casted a vote</span>";
                                    } else {
                                        echo "<span class='badge bg-label-danger me-1'>Not yet casted a vote</span>";
                                    }

                                @endphp
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
