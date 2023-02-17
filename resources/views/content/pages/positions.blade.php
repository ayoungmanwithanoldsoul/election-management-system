@extends('layouts/contentNavbarLayout')

@section('title', 'Voters')

@section('content')
    {{-- <pre>
@php
    if (sizeof($query) != 0) {
        print_r($query);
        // print_r($query[0]->firstname);
    }

@endphp
</pre> --}}
    <h4 class="fw-bold mb-4 py-3">
        <span class="text-muted fw-light">{{ ucfirst(session('user')) }} /</span> Positions
    </h4>

    <!-- Hoverable Table rows -->
    <div class="card">
        <div class="card-header flex-column flex-md-row">
            <h3>Positions</h3>
            <div class="dt-action-buttons pt-md-0 pt-3 text-end">
                <div class="dt-buttons">
                    <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                        type="button" data-bs-toggle="modal" data-bs-target="#smallModal">
                        <span><i class="bx bx-plus me-sm-2"></i>
                            <span class="d-none d-sm-inline-block">Add New Position</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table-hover table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Rank</th>
                        {{-- <th>Status</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @for ($i = 0; $i < sizeof($query); $i++)
                        <tr>
                            <td><strong>{{ $query[$i]->name }}</strong></td>
                            <td>{{ $query[$i]->specification }}</td>
                            <td>{{ $query[$i]->potency }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i>
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

    <!-- Small Modal -->
    <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Add New Position</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Enter Name of Position...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="specification" class="form-label">Specification</label>
                                <textarea class="form-control" name="specification" id="specification" rows="3"
                                    placeholder="Enter Position Specification..."></textarea>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label class="form-label" for="potency">Potency</label>
                                <input type="number" class="form-control" id="potency"
                                    placeholder="Enter Potency (e.g. 1- highest potency)">
                            </div>
                            {{-- <div class="col mb-0">
                            <label for="dobSmall" class="form-label">DOB</label>
                            <input id="dobSmall" type="text" class="form-control" placeholder="DD / MM / YY">
                        </div> --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger text-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Position</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
