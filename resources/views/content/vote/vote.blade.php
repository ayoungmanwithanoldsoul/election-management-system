@php
    if (!isset($voted) ) {
        $auxillaryPositions = ['Grade One Councilor', 'Grade Two Councilor', 'Grade Three Councilor', 'Grade Four Councilor', 'Grade Five Councilor', 'Grade Six Councilor', 'Grade Seven Chairperson', 'Grade Seven Representative', 'Grade Eight Chairperson', 'Grade Eight Representative', 'Grade Nine Chairperson', 'Grade Nine Representative', 'Grade Ten Chairperson', 'Grade Ten Representative', 'Grade Eleven Chairperson', 'Grade Eleven Representative', 'Grade Twelve Chairperson', 'Grade Twelve Representative'];
        $positions = [];
        foreach ($query as $subquery) {
            if (in_array($subquery->position, $auxillaryPositions)) {
                if (strpos($subquery->position, session('level')) === false) {
                    continue;
                }
            }
            if (in_array($subquery->position, $positions)) {
                continue;
            }
            array_push($positions, $subquery->position);
        }
    
        $positionsClean = [];
        foreach ($positions as $subPosition) {
            $string = str_replace(' ', '', $subPosition);
            $string = str_replace('.', '', $string);
            array_push($positionsClean, $string);
        }
    
        foreach (array_combine($positionsClean, $positions) as $cleanPositions => $uncleanPositions) {
            // Create a dynamic variable instance
            ${$cleanPositions} = [];
            for ($i = 0; $i < sizeof($query); $i++) {
                if ($query[$i]->position == $uncleanPositions) {
                    array_push(${$cleanPositions}, $query[$i]);
                }
            }
        }
        session()->flash('positionsClean', $positionsClean);
    }
@endphp


@extends('layouts/contentNavbarLayout')

@section('title', 'Cast a Vote')

@section('page-style')
    <style>
        * {
            box-sizing: border-box;
        }

        .card {
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
        }

        input[type="checkbox"],
        input[type="radio"] {
            display: none;
            /* hide the default check boxes and radios */
        }

        /* style the label elements */
        label {
            display: block;
            width: 100%;
            padding: 15px;
            /* border: 1px solid #0076ff; */
            /* margin-bottom: 10px; */
            border-radius: 10px;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
        }

        /* style the labels when their corresponding inputs are checked */
        input[type="checkbox"]:checked+label,
        input[type="radio"]:checked+label {
            background: #696cff;
            color: white;
            box-shadow: 0 1px 20px 1px #696cff;
        }

        /* style the custom check boxes and radios when their corresponding inputs are checked */
        input[type="checkbox"]:checked+label>span,
        input[type="radio"]:checked+label>span {}

        .vote .btn-vote:hover {
            box-shadow: none;
            background: #696cff;
            color: white;
        }

        .btn-vote {
            color: white;
            background: #696cff;
            position: fixed;
            bottom: 5rem;
            right: 2rem;
            z-index: 999999;
            box-shadow: 0 1px 20px 1px #696cff;
            padding: 20px;
        }
    </style>
@endsection
@section('page-script')
    <script src="{{ asset('assets/js/extended-ui-sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/js/ui-modals.js') }}"></script>

@endsection

@section('content')
    <h4 class="fw-bold mb-4 py-3">
        <span class="text-muted fw-light">Voter/</span>Vote
    </h4>

    @if (isset($voted))
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card text-center">
                    <div class="card-header">
                        <svg xmlns="http://www.w3.org/2000/svg" class="bx-burst" width="108" height="108"
                            viewBox="0 0 24 24" style="fill: rgba(36, 251, 30, 1);transform: ;msFilter:;">
                            <path
                                d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                            </path>
                            <path d="M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z"></path>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">You already Voted</h2>
                        <p class="card-text text-align-justify fs-4">Tahnk you for suppporting our campaign in exercising
                            our freedom to choose our leader. We assure you a clean and stainless election.</p>
                        <button type="button fs-3" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Ballot">
                            <p class="fs-3 m-0 p-2">View Ballot</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Ballot" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="modalScrollableTitle">Ballot</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @for ($i = 0; $i < count($query); $i++)
                            <h3 class="fw-semi-bold">{{ $query[$i]->position }}</h4>
                                <h4 class="fw-light text-center">{{ $query[$i]->firstname . ' ' . $query[$i]->lastname }}
                                    </h6>
                        @endfor
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @else
        <form class="row row-cols-lg-2 px-0" action="{{ route(Route::currentRouteName()) }}" method="POST">
            @csrf
            @foreach ($positionsClean as $subPositionsClean)
                <div class="col-xl-6 mb-4">
                    <div class="card">
                        <h3 class="card-header fs-3 fw-bold">{{ ${$subPositionsClean}[0]->position }}</h3>
                        <div class="card-body">
                            <div
                                class="row row-cols-sm-2 row-cols-md-2 row-cols-lg-1 row-cols-xxl-2 justify-content-center pt-3">
                                @for ($i = 0; $i < sizeof(${$subPositionsClean}); $i++)
                                    <div class="col-md mb-4">
                                        <div class="custom-option custom-option-basic p-0">
                                            <input type="radio" name="{{ $subPositionsClean }}"
                                                value="{{ ${$subPositionsClean}[$i]->id }}"
                                                id="{{ ${$subPositionsClean}[$i]->id }}" required />
                                            <label for="{{ ${$subPositionsClean}[$i]->id }}"
                                                class="row gx-0 row-cols-2 align-items-center p-3">
                                                <span class="col-5">
                                                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                        class="w-px-50 h-auto" style="min-width: 70px">
                                                </span>
                                                <span class="col fs-4 me-0">
                                                    {{ ${$subPositionsClean}[$i]->firstname . ' ' . ${$subPositionsClean}[$i]->lastname }}
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="vote">
                <button type="submit" class="btn btn-vote fs-4 fw-bold p-3">Submit Vote</button>

            </div>
        </form>
    @endif
@endsection
