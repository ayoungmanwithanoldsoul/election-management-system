@extends('layouts/contentNavbarLayout')

@section('title', 'Candidates')

@section('page-style')
    <style>
        /* datatables.bootsrap5.css*/
        table.dataTable td.dt-control {
            cursor: pointer;
            text-align: center
        }

        table.dataTable td.dt-control:before {
            background-color: #31b131;
            border: .15em solid #fff;
            border-radius: 1em;
            box-shadow: 0 0 .2em #444;
            box-sizing: content-box;
            color: #fff;
            content: "+";
            display: inline-block;
            font-family: Courier New, Courier, monospace;
            height: 1em;
            line-height: 1em;
            margin-top: -9px;
            text-align: center;
            text-indent: 0 !important;
            width: 1em
        }

        table.dataTable tr.dt-hasChild td.dt-control:before {
            background-color: #d33333;
            content: "-"
        }

        table.dataTable thead>tr>td.sorting,
        table.dataTable thead>tr>td.sorting_asc,
        table.dataTable thead>tr>td.sorting_asc_disabled,
        table.dataTable thead>tr>td.sorting_desc,
        table.dataTable thead>tr>td.sorting_desc_disabled,
        table.dataTable thead>tr>th.sorting,
        table.dataTable thead>tr>th.sorting_asc,
        table.dataTable thead>tr>th.sorting_asc_disabled,
        table.dataTable thead>tr>th.sorting_desc,
        table.dataTable thead>tr>th.sorting_desc_disabled {
            cursor: pointer;
            padding-right: 26px;
            position: relative
        }

        table.dataTable thead>tr>td.sorting:after,
        table.dataTable thead>tr>td.sorting:before,
        table.dataTable thead>tr>td.sorting_asc:after,
        table.dataTable thead>tr>td.sorting_asc:before,
        table.dataTable thead>tr>td.sorting_asc_disabled:after,
        table.dataTable thead>tr>td.sorting_asc_disabled:before,
        table.dataTable thead>tr>td.sorting_desc:after,
        table.dataTable thead>tr>td.sorting_desc:before,
        table.dataTable thead>tr>td.sorting_desc_disabled:after,
        table.dataTable thead>tr>td.sorting_desc_disabled:before,
        table.dataTable thead>tr>th.sorting:after,
        table.dataTable thead>tr>th.sorting:before,
        table.dataTable thead>tr>th.sorting_asc:after,
        table.dataTable thead>tr>th.sorting_asc:before,
        table.dataTable thead>tr>th.sorting_asc_disabled:after,
        table.dataTable thead>tr>th.sorting_asc_disabled:before,
        table.dataTable thead>tr>th.sorting_desc:after,
        table.dataTable thead>tr>th.sorting_desc:before,
        table.dataTable thead>tr>th.sorting_desc_disabled:after,
        table.dataTable thead>tr>th.sorting_desc_disabled:before {
            /* display: block;
                                font-size: .9em;
                                line-height: 9px;
                                opacity: .125;
                                position: absolute;
                                right: 10px */
        }

        table.dataTable thead>tr>td.sorting:before,
        table.dataTable thead>tr>td.sorting_asc:before,
        table.dataTable thead>tr>td.sorting_asc_disabled:before,
        table.dataTable thead>tr>td.sorting_desc:before,
        table.dataTable thead>tr>td.sorting_desc_disabled:before,
        table.dataTable thead>tr>th.sorting:before,
        table.dataTable thead>tr>th.sorting_asc:before,
        table.dataTable thead>tr>th.sorting_asc_disabled:before,
        table.dataTable thead>tr>th.sorting_desc:before,
        table.dataTable thead>tr>th.sorting_desc_disabled:before {
            /* bottom: 50%;
                                content: "▴" */
        }

        table.dataTable thead>tr>td.sorting:after,
        table.dataTable thead>tr>td.sorting_asc:after,
        table.dataTable thead>tr>td.sorting_asc_disabled:after,
        table.dataTable thead>tr>td.sorting_desc:after,
        table.dataTable thead>tr>td.sorting_desc_disabled:after,
        table.dataTable thead>tr>th.sorting:after,
        table.dataTable thead>tr>th.sorting_asc:after,
        table.dataTable thead>tr>th.sorting_asc_disabled:after,
        table.dataTable thead>tr>th.sorting_desc:after,
        table.dataTable thead>tr>th.sorting_desc_disabled:after {
            /* content: "▾";
                                top: 50% */
        }

        table.dataTable thead>tr>td.sorting_asc:before,
        table.dataTable thead>tr>td.sorting_desc:after,
        table.dataTable thead>tr>th.sorting_asc:before,
        table.dataTable thead>tr>th.sorting_desc:after {
            opacity: .6
        }

        table.dataTable thead>tr>td.sorting_asc_disabled:before,
        table.dataTable thead>tr>td.sorting_desc_disabled:after,
        table.dataTable thead>tr>th.sorting_asc_disabled:before,
        table.dataTable thead>tr>th.sorting_desc_disabled:after {
            display: none
        }

        table.dataTable thead>tr>td:active,
        table.dataTable thead>tr>th:active {
            outline: none
        }

        div.dataTables_scrollBody table.dataTable thead>tr>td:after,
        div.dataTables_scrollBody table.dataTable thead>tr>td:before,
        div.dataTables_scrollBody table.dataTable thead>tr>th:after,
        div.dataTables_scrollBody table.dataTable thead>tr>th:before {
            display: none
        }

        div.dataTables_processing {
            left: 50%;
            margin-left: -100px;
            margin-top: -26px;
            padding: 2px;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 200px
        }

        div.dataTables_processing>div:last-child {
            height: 15px;
            margin: 1em auto;
            position: relative;
            width: 80px
        }

        div.dataTables_processing>div:last-child>div {
            -webkit-animation-timing-function: cubic-bezier(0, 1, 1, 0);
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
            background: rgba(13, 110, 253, .9);
            border-radius: 50%;
            height: 13px;
            position: absolute;
            top: 0;
            width: 13px
        }

        div.dataTables_processing>div:last-child>div:first-child {
            -webkit-animation: datatables-loader-1 .6s infinite;
            animation: datatables-loader-1 .6s infinite;
            left: 8px
        }

        div.dataTables_processing>div:last-child>div:nth-child(2) {
            -webkit-animation: datatables-loader-2 .6s infinite;
            animation: datatables-loader-2 .6s infinite;
            left: 8px
        }

        div.dataTables_processing>div:last-child>div:nth-child(3) {
            -webkit-animation: datatables-loader-2 .6s infinite;
            animation: datatables-loader-2 .6s infinite;
            left: 32px
        }

        div.dataTables_processing>div:last-child>div:nth-child(4) {
            -webkit-animation: datatables-loader-3 .6s infinite;
            animation: datatables-loader-3 .6s infinite;
            left: 56px
        }

        @-webkit-keyframes datatables-loader-1 {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes datatables-loader-1 {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes datatables-loader-3 {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            to {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
        }

        @keyframes datatables-loader-3 {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            to {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
        }

        @-webkit-keyframes datatables-loader-2 {
            0% {
                -webkit-transform: translate(0);
                transform: translate(0)
            }

            to {
                -webkit-transform: translate(24px);
                transform: translate(24px)
            }
        }

        @keyframes datatables-loader-2 {
            0% {
                -webkit-transform: translate(0);
                transform: translate(0)
            }

            to {
                -webkit-transform: translate(24px);
                transform: translate(24px)
            }
        }

        table.dataTable td.dt-left,
        table.dataTable th.dt-left {
            text-align: left
        }

        table.dataTable td.dataTables_empty,
        table.dataTable td.dt-center,
        table.dataTable th.dt-center {
            text-align: center
        }

        table.dataTable td.dt-right,
        table.dataTable th.dt-right {
            text-align: right
        }

        table.dataTable td.dt-justify,
        table.dataTable th.dt-justify {
            text-align: justify
        }

        table.dataTable td.dt-nowrap,
        table.dataTable th.dt-nowrap {
            white-space: nowrap
        }

        table.dataTable tfoot td,
        table.dataTable tfoot td.dt-head-left,
        table.dataTable tfoot th,
        table.dataTable tfoot th.dt-head-left,
        table.dataTable thead td,
        table.dataTable thead td.dt-head-left,
        table.dataTable thead th,
        table.dataTable thead th.dt-head-left {
            text-align: left
        }

        table.dataTable tfoot td.dt-head-center,
        table.dataTable tfoot th.dt-head-center,
        table.dataTable thead td.dt-head-center,
        table.dataTable thead th.dt-head-center {
            text-align: center
        }

        table.dataTable tfoot td.dt-head-right,
        table.dataTable tfoot th.dt-head-right,
        table.dataTable thead td.dt-head-right,
        table.dataTable thead th.dt-head-right {
            text-align: right
        }

        table.dataTable tfoot td.dt-head-justify,
        table.dataTable tfoot th.dt-head-justify,
        table.dataTable thead td.dt-head-justify,
        table.dataTable thead th.dt-head-justify {
            text-align: justify
        }

        table.dataTable tfoot td.dt-head-nowrap,
        table.dataTable tfoot th.dt-head-nowrap,
        table.dataTable thead td.dt-head-nowrap,
        table.dataTable thead th.dt-head-nowrap {
            white-space: nowrap
        }

        table.dataTable tbody td.dt-body-left,
        table.dataTable tbody th.dt-body-left {
            text-align: left
        }

        table.dataTable tbody td.dt-body-center,
        table.dataTable tbody th.dt-body-center {
            text-align: center
        }

        table.dataTable tbody td.dt-body-right,
        table.dataTable tbody th.dt-body-right {
            text-align: right
        }

        table.dataTable tbody td.dt-body-justify,
        table.dataTable tbody th.dt-body-justify {
            text-align: justify
        }

        table.dataTable tbody td.dt-body-nowrap,
        table.dataTable tbody th.dt-body-nowrap {
            white-space: nowrap
        }

        /*! Bootstrap 5 integration for DataTables
                         *
                         * ©2020 SpryMedia Ltd, all rights reserved.
                         * License: MIT datatables.net/license/mit
                         */
        table.dataTable {
            border-collapse: separate !important;
            border-spacing: 0;
            clear: both;
            margin-bottom: 6px !important;
            margin-top: 6px !important;
            max-width: none !important
        }

        table.dataTable td,
        table.dataTable th {
            box-sizing: content-box
        }

        table.dataTable td.dataTables_empty,
        table.dataTable th.dataTables_empty {
            text-align: center
        }

        table.dataTable.nowrap td,
        table.dataTable.nowrap th {
            white-space: nowrap
        }

        table.dataTable.table-striped>tbody>tr:nth-of-type(odd)>* {
            box-shadow: none
        }

        table.dataTable>tbody>tr {
            background-color: transparent
        }

        table.dataTable>tbody>tr.selected>* {
            box-shadow: inset 0 0 0 9999px rgba(13, 110, 253, .9);
            color: #fff
        }

        table.dataTable.table-striped>tbody>tr.odd>* {
            box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, .05)
        }

        table.dataTable.table-striped>tbody>tr.odd.selected>* {
            box-shadow: inset 0 0 0 9999px rgba(13, 110, 253, .95)
        }

        table.dataTable.table-hover>tbody>tr:hover>* {
            box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, .075)
        }

        table.dataTable.table-hover>tbody>tr.selected:hover>* {
            box-shadow: inset 0 0 0 9999px rgba(13, 110, 253, .975)
        }

        div.dataTables_wrapper div.dataTables_length label {
            font-weight: 400;
            text-align: left;
            white-space: nowrap
        }

        div.dataTables_wrapper div.dataTables_length select {
            display: inline-block;
            width: auto
        }

        div.dataTables_wrapper div.dataTables_filter {
            text-align: right
        }

        div.dataTables_wrapper div.dataTables_filter label {
            font-weight: 400;
            text-align: left;
            white-space: nowrap
        }

        div.dataTables_wrapper div.dataTables_filter input {
            display: inline-block;
            margin-left: .5em;
            width: auto
        }

        div.dataTables_wrapper div.dataTables_info {
            padding-top: .85em
        }

        div.dataTables_wrapper div.dataTables_paginate {
            margin: 0;
            text-align: right;
            white-space: nowrap
        }

        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            -ms-flex-pack: end;
            justify-content: flex-end;
            margin: 2px 0;
            white-space: nowrap
        }

        div.dataTables_scrollHead table.dataTable {
            margin-bottom: 0 !important
        }

        div.dataTables_scrollBody>table {
            border-top: none;
            margin-bottom: 0 !important;
            margin-top: 0 !important
        }

        div.dataTables_scrollBody>table>thead .sorting:after,
        div.dataTables_scrollBody>table>thead .sorting:before,
        div.dataTables_scrollBody>table>thead .sorting_asc:after,
        div.dataTables_scrollBody>table>thead .sorting_asc:before,
        div.dataTables_scrollBody>table>thead .sorting_desc:after,
        div.dataTables_scrollBody>table>thead .sorting_desc:before {
            display: none
        }

        div.dataTables_scrollBody>table>tbody tr:first-child td,
        div.dataTables_scrollBody>table>tbody tr:first-child th {
            border-top: none
        }

        div.dataTables_scrollFoot>.dataTables_scrollFootInner {
            box-sizing: content-box
        }

        div.dataTables_scrollFoot>.dataTables_scrollFootInner>table {
            border-top: none;
            margin-top: 0 !important
        }

        @media screen and (max-width:767px) {

            div.dataTables_wrapper div.dataTables_filter,
            div.dataTables_wrapper div.dataTables_info,
            div.dataTables_wrapper div.dataTables_length,
            div.dataTables_wrapper div.dataTables_paginate {
                text-align: center
            }

            div.dataTables_wrapper div.dataTables_paginate ul.pagination {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }
        }

        table.dataTable.table-sm>thead>tr>th:not(.sorting_disabled) {
            padding-right: 20px
        }

        table.table-bordered.dataTable {
            border-right-width: 0
        }

        table.table-bordered.dataTable thead tr:first-child td,
        table.table-bordered.dataTable thead tr:first-child th {
            border-top-width: 1px
        }

        table.table-bordered.dataTable td,
        table.table-bordered.dataTable th {
            border-left-width: 0
        }

        table.table-bordered.dataTable td:first-child,
        table.table-bordered.dataTable th:first-child {
            border-left-width: 1px
        }

        table.table-bordered.dataTable td:last-child,
        table.table-bordered.dataTable th:last-child {
            border-right-width: 1px
        }

        table.table-bordered.dataTable td,
        table.table-bordered.dataTable th {
            border-bottom-width: 1px
        }

        div.dataTables_scrollHead table.table-bordered {
            border-bottom-width: 0
        }

        div.table-responsive>div.dataTables_wrapper>div.row {
            margin: 0
        }

        div.table-responsive>div.dataTables_wrapper>div.row>div[class^=col-]:first-child {
            padding-left: 0
        }

        div.table-responsive>div.dataTables_wrapper>div.row>div[class^=col-]:last-child {
            padding-right: 0
        }

        div.dataTables_wrapper .card-header {
            -ms-flex-align: center;
            -ms-flex-pack: justify;
            align-items: center;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between
        }

        div.dataTables_wrapper div.dataTables_info {
            padding-top: .5rem
        }

        table.dataTable>thead .sorting:after,
        table.dataTable>thead .sorting:before,
        table.dataTable>thead .sorting_asc:after,
        table.dataTable>thead .sorting_asc_disabled:after,
        table.dataTable>thead .sorting_desc:before,
        table.dataTable>thead .sorting_desc_disabled:before {
            opacity: .4 !important
        }

        table.dataTable>thead .sorting_asc:before,
        table.dataTable>thead .sorting_desc:after {
            opacity: 1 !important
        }

        table.dataTable>thead .sorting_asc_disabled:before,
        table.dataTable>thead .sorting_desc_disabled:after {
            opacity: 0 !important
        }

        html:not([dir=rtl]) table.table-bordered.dataTable td:first-child,
        html:not([dir=rtl]) table.table-bordered.dataTable tr:first-child th:first-child {
            border-left-width: 0
        }

        [dir=rtl] table.table-bordered.dataTable td:first-child,
        [dir=rtl] table.table-bordered.dataTable tr:first-child th:first-child,
        html:not([dir=rtl]) table.table-bordered.dataTable td:last-child,
        html:not([dir=rtl]) table.table-bordered.dataTable tr:first-child th:last-child {
            border-right-width: 0
        }

        [dir=rtl] table.table-bordered.dataTable td:last-child,
        [dir=rtl] table.table-bordered.dataTable tr:first-child th:last-child {
            border-left-width: 0
        }

        @media screen and (min-width:1399.98px) {
            table.table-responsive {
                display: table
            }
        }

        [dir=rtl] div.dataTables_wrapper .dataTables_filter {
            -ms-flex-pack: end;
            display: -ms-flexbox;
            display: flex;
            justify-content: flex-end
        }

        [dir=rtl] div.dataTables_wrapper .dataTables_filter input {
            margin-left: 0;
            margin-right: .5rem
        }

        [dir=rtl] table.table-bordered.dataTable td,
        [dir=rtl] table.table-bordered.dataTable th {
            border-left-width: 1px;
            border-right-width: 0
        }

        [dir=rtl] table.table-bordered.dataTable td:last-child,
        [dir=rtl] table.table-bordered.dataTable th:last-child {
            border-left-width: 0
        }

        table.dataTable {
            border-collapse: collapse !important;
            margin-bottom: 1rem !important;
            margin-top: 0 !important;
            width: 100% !important
        }

        [dir=rtl] table.dataTable.table-sm>thead>tr>th {
            padding-left: 1.25rem
        }

        [dir=rtl] table.dataTable.table-sm .sorting:before,
        [dir=rtl] table.dataTable.table-sm .sorting_asc:before,
        [dir=rtl] table.dataTable.table-sm .sorting_desc:before {
            left: .85em !important;
            right: auto !important
        }

        table.dataTable .form-check-input {
            height: 18px;
            width: 18px
        }

        .dataTables_scroll {
            margin-bottom: .75rem
        }

        table.dataTable thead th {
            vertical-align: middle
        }

        table.dataTable thead .sorting,
        table.dataTable thead .sorting_asc,
        table.dataTable thead .sorting_asc_disabled,
        table.dataTable thead .sorting_desc,
        table.dataTable thead .sorting_desc_disabled {
            padding-right: inherit
        }

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
            /* content: "" !important;
                                font-family: boxicons !important;
                                font-size: 1.2rem !important;
                                font-weight: 500 !important;
                                height: 10px;
                                right: .7rem !important;
                                width: 10px */
        }

        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:before {
            /* content: "" !important;
                                top: .5rem !important */
        }

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc_disabled:after {
            /* bottom: .8rem !important;
                                content: "" !important */
        }

        [dir=rtl] table.dataTable thead .sorting:after,
        [dir=rtl] table.dataTable thead .sorting:before,
        [dir=rtl] table.dataTable thead .sorting_asc:after,
        [dir=rtl] table.dataTable thead .sorting_asc:before,
        [dir=rtl] table.dataTable thead .sorting_asc_disabled:after,
        [dir=rtl] table.dataTable thead .sorting_asc_disabled:before,
        [dir=rtl] table.dataTable thead .sorting_desc:after,
        [dir=rtl] table.dataTable thead .sorting_desc:before,
        [dir=rtl] table.dataTable thead .sorting_desc_disabled:after,
        [dir=rtl] table.dataTable thead .sorting_desc_disabled:before {
            left: 1em !important;
            right: auto !important
        }

        div.card-datatable .dataTable,
        div.card-datatable.dataTable {
            border-left: 0;
            border-right: 0
        }

        @media screen and (max-width:575.98px) {
            div.dataTables_wrapper .card-header {
                display: block
            }

            div.dataTables_wrapper .card-header .dt-action-buttons {
                padding-top: 1rem
            }

            .dtr-bs-modal.modal .modal-body {
                overflow: auto;
                padding: 0
            }

            .dataTable_select div.dataTables_wrapper div.dataTables_info {
                -ms-flex-direction: column;
                flex-direction: column
            }
        }

        @media screen and (max-width:767.98px) {
            div.dataTables_wrapper div.dataTables_info {
                padding-bottom: .625rem;
                padding-top: 0
            }

            div.dataTables_wrapper div.dataTables_length {
                margin-bottom: 0 !important
            }
        }

        div.dataTables_wrapper div.dataTables_filter,
        div.dataTables_wrapper div.dataTables_length {
            margin-bottom: 1rem;
            margin-top: 1rem
        }

        div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-link {
            font-size: .75rem;
            line-height: 1;
            min-width: 2rem;
            padding: .625rem .5125rem
        }

        div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-link div:not(.table-responsive) div.dataTables_wrapper .dataTables_paginate {
            margin-right: 0
        }

        @media screen and (max-width:575.98px) {
            div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-link {
                font-size: .75rem;
                line-height: 1;
                min-width: 1.5rem;
                padding: .375rem .25rem
            }
        }

        @media(max-width:767.98px) {

            div.dataTables_wrapper div.dataTables_filter label,
            div.dataTables_wrapper div.dataTables_info,
            div.dataTables_wrapper div.dataTables_length label,
            div.dataTables_wrapper div.dataTables_paginate {
                -ms-flex-pack: center;
                justify-content: center
            }
        }

        div.card-datatable {
            padding-bottom: 1rem
        }

        div.card-datatable [class*=col-md-] {
            padding-left: 1rem !important;
            padding-right: 1rem !important
        }

        div.card-datatable:not(.table-responsive) .dataTables_wrapper .row:first-child,
        div.card-datatable:not(.table-responsive) .dataTables_wrapper .row:last-child {
            margin: 0
        }

        html:not([dir=rtl]) div.card-datatable table.dataTable tfoot th:first-child,
        html:not([dir=rtl]) div.card-datatable table.dataTable thead th:first-child {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        html:not([dir=rtl]) div.card-datatable table.dataTable tfoot th:last-child,
        html:not([dir=rtl]) div.card-datatable table.dataTable thead th:last-child {
            padding-right: 1rem
        }

        html:not([dir=rtl]) div.card-datatable table.dataTable tbody td:first-child {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        [dir=rtl] table.dataTable.table-sm>thead>tr>th {
            padding-right: .625rem
        }

        [dir=rtl] table.dataTable tbody td,
        [dir=rtl] table.dataTable tfoot th,
        [dir=rtl] table.dataTable thead th {
            padding-right: 1.25rem
        }

        [dir=rtl] table.dataTable.table-sm tbody td,
        [dir=rtl] table.dataTable.table-sm tfoot th,
        [dir=rtl] table.dataTable.table-sm thead th {
            padding-right: .625rem
        }

        [dir=rtl] div.card-datatable table.dataTable tbody td:first-child,
        [dir=rtl] div.card-datatable table.dataTable tfoot th:first-child,
        [dir=rtl] div.card-datatable table.dataTable thead th:first-child {
            padding-right: 1.5rem
        }

        [dir=rtl] div.card-datatable table.dataTable tbody td:last-child,
        [dir=rtl] div.card-datatable table.dataTable tfoot th:last-child,
        [dir=rtl] div.card-datatable table.dataTable thead th:last-child {
            padding-left: 1.5rem
        }

        .light-style div.dataTables_wrapper div.dataTables_info {
            color: #a1acb8
        }

        .light-style div.dataTables_scrollBody table {
            border-top-color: #d9dee3
        }

        .light-style table.table-bordered.dataTable td,
        .light-style table.table-bordered.dataTable th {
            border-color: #d9dee3 !important
        }

        .dark-style div.dataTables_wrapper div.dataTables_info {
            color: #7071a4
        }

        .dark-style div.dataTables_scrollBody table {
            border-top-color: #444564
        }

        .dark-style table.table-bordered.dataTable td,
        .dark-style table.table-bordered.dataTable th {
            border-color: #444564 !important
        }

        div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.disabled .page-link {
            background-color: rgba(124, 125, 182, .08)
        }

        /* datatables.checkboxes.css*/
        table.dataTable tbody td.dt-checkboxes-cell,
        table.dataTable thead th.dt-checkboxes-select-all,
        table.dataTable.dt-checkboxes-select tbody tr {
            cursor: pointer
        }

        table.dataTable tbody td.dt-checkboxes-cell,
        table.dataTable thead th.dt-checkboxes-select-all {
            text-align: center
        }

        div.dataTables_wrapper span.select-info,
        div.dataTables_wrapper span.select-item {
            margin-left: .5em
        }

        @media screen and (max-width:640px) {

            div.dataTables_wrapper span.select-info,
            div.dataTables_wrapper span.select-item {
                display: block;
                margin-left: 0
            }
        }
    </style>
@endsection



@section('content')
    {{-- <pre>
            @php
                if (isset($query)) {
                    // print_r($query);
                    for ($i = 0; $i < count($query); $i++) {
                        foreach ($query[$i] as $key => $value) {
                            print $value;
                            print '----';
                        }
                        print '<br>';
                    }
                }
            @endphp
        </pre> --}}
    <h4 class="fw-bold mb-4 py-3">
        <span class="text-muted fw-light">{{ ucfirst(session('user')) }} / </span>Candidates
    </h4>
    <div class="card">
        <div class="card-datatable table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="card-header flex-column flex-md-row">
                    <div class="head-label text-center">
                        <h3 class="card-title mb-0">Candidates</h3>
                    </div>
                    <div class="dt-action-buttons pt-md-0 pt-3 text-end">
                        <div class="dt-buttons">
                            {{-- <button
                                class="dt-button buttons-collection btn btn-label-primary dropdown-toggle me-2"
                                tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog"
                                aria-expanded="false">
                                <span><i class="bx bx-export me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Export</span>
                                </span>
                                <span
                                    class="dt-down-arrow">▼</span>
                            </button> --}}
                            <button class="dt-button create-new btn btn-primary" tabindex="0"
                                aria-controls="DataTables_Table_0" type="button">
                                <span><i class="bx bx-plus me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Add New Candidate</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="fs-5 col ps-4"> Filter:</p>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        {{-- <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select
                                    name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                    <option value="7">7</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                    </div> --}}
                        <div class="mb-2 col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                            <div id="" class=""><label><input type="search" class="form-control"
                                        placeholder="Firstname" aria-controls=""></label></div>
                        </div>
                        <div class="mb-2 col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                            <div id="" class=""><label><input type="search" class="form-control"
                                        placeholder="Lastname" aria-controls=""></label></div>
                        </div>
                        <div class="mb-2 col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                            <div class=""><label>
                                <select id="defaultSelect" class="form-control w-100">
                                    <option>Position</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select></label>
                            </div>
                        </div>
                    </div>
                    <table class="datatables-basic border-top dataTable no-footer dtr-column table" id="DataTables_Table_0"
                        aria-describedby="DataTables_Table_0_info" style="width: 1119px;">
                        <thead class="sticky">
                            <tr>
                                <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                    style="width: 0px; display: none;" aria-label=""></th>
                                <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1"
                                    colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox"
                                        class="form-check-input"></th>
                                @php
                                    $counter = 0;
                                @endphp
                                @foreach ($query[0] as $key => $value)
                                    @if ($counter++ != 0)
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" style="width: 244px;"
                                            aria-label="Name: activate to sort column ascending">
                                            {{ $key }}
                                        </th>
                                    @endif
                                @endforeach
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63px;"
                                    aria-label="Actions">Actions</th>
                                {{-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" style="width: 244px;" aria-label="Name: activate to sort column ascending">
                                Firstname</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" style="width: 233px;" aria-label="Email: activate to sort column ascending">
                                Lastname</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" style="width: 76px;" aria-label="Date: activate to sort column ascending">
                                Position</th> --}}
                                {{-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" style="width: 75px;" aria-label="Salary: activate to sort column ascending">
                                Salary</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" style="width: 104px;" aria-label="Status: activate to sort column ascending">
                                Status</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63px;"
                                aria-label="Actions">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < sizeof($query); $i++)
                                <tr class="odd">
                                    <td class="control" style="display: none;" tabindex="0"></td>
                                    <td class="dt-checkboxes-cell"><input type="checkbox"
                                            class="dt-checkboxes form-check-input" name="candidatesId"
                                            value="{{ $query[$i]->id }}">
                                    </td>
                                    {{ $counter = 0 }}
                                    @foreach ($query[$i] as $key => $value)
                                        @if ($counter++ != 0)
                                            <td>{{ $value }}</td>
                                        @endif
                                    @endforeach
                                    <td>
                                        <div class="d-inline-block"><a href="javascript:;"
                                                class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-end m-0">
                                                <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                                <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                                <div class="dropdown-divider"></div>
                                                <li><a href="javascript:;"
                                                        class="dropdown-item text-danger delete-record">Delete</a></li>
                                            </ul>
                                        </div><a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                                class="bx bxs-edit"></i></a>
                                    </td>


                                    {{-- <td></td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span
                                                class="avatar-initial rounded-circle bg-label-info">GG</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><span class="emp_name text-truncate">Glyn
                                            Giacoppo</span><small class="emp_post text-truncate text-muted">Software Test
                                            Engineer</small></div>
                                </div>
                            </td>
                            <td>ggiacoppo2r@apache.org</td>
                            <td>04/15/2021</td>
                            <td>$24973.48</td>
                            <td><span class="badge bg-label-success">Professional</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;"
                                                class="dropdown-item text-danger delete-record">Delete</a></li>
                                    </ul>
                                </div><a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td> --}}
                                </tr>
                            @endfor
                            {{-- <tr class="odd">
                            <td class="control" style="display: none;" tabindex="0"></td>
                            <td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input">
                            </td>
                            <td></td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span
                                                class="avatar-initial rounded-circle bg-label-info">GG</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><span class="emp_name text-truncate">Glyn
                                            Giacoppo</span><small class="emp_post text-truncate text-muted">Software Test
                                            Engineer</small></div>
                                </div>
                            </td>
                            <td>ggiacoppo2r@apache.org</td>
                            <td>04/15/2021</td>
                            <td>$24973.48</td>
                            <td><span class="badge bg-label-success">Professional</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;"
                                                class="dropdown-item text-danger delete-record">Delete</a></li>
                                    </ul>
                                </div><a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="control" style="display: none;" tabindex="0"></td>
                            <td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input">
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2">
                                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets//img/avatars/10.png"
                                                alt="Avatar" class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column"><span class="emp_name text-truncate">Evangelina
                                            Carnock</span><small class="emp_post text-truncate text-muted">Cost
                                            Accountant</small>
                                    </div>
                                </div>
                            </td>
                            <td>ecarnock2q@washington.edu</td>
                            <td>01/26/2021</td>
                            <td>$23704.82</td>
                            <td><span class="badge bg-label-warning">Resigned</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;"
                                                class="dropdown-item text-danger delete-record">Delete</a></li>
                                    </ul>
                                </div><a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td class="control" style="display: none;" tabindex="0"></td>
                            <td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input">
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img
                                                src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets//img/avatars/7.png"
                                                alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><span class="emp_name text-truncate">Olivette
                                            Gudgin</span><small class="emp_post text-truncate text-muted">Paralegal</small>
                                    </div>
                                </div>
                            </td>
                            <td>ogudgin2p@gizmodo.com</td>
                            <td>04/09/2021</td>
                            <td>$15211.60</td>
                            <td><span class="badge bg-label-success">Professional</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;"
                                                class="dropdown-item text-danger delete-record">Delete</a></li>
                                    </ul>
                                </div><a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="control" style="display: none;" tabindex="0"></td>
                            <td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input">
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span
                                                class="avatar-initial rounded-circle bg-label-danger">RP</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><span class="emp_name text-truncate">Reina
                                            Peckett</span><small class="emp_post text-truncate text-muted">Quality Control
                                            Specialist</small></div>
                                </div>
                            </td>
                            <td>rpeckett2o@timesonline.co.uk</td>
                            <td>05/20/2021</td>
                            <td>$16619.40</td>
                            <td><span class="badge bg-label-warning">Resigned</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;"
                                                class="dropdown-item text-danger delete-record">Delete</a></li>
                                    </ul>
                                </div><a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td class="control" style="display: none;" tabindex="0"></td>
                            <td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input">
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span
                                                class="avatar-initial rounded-circle bg-label-warning">AB</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><span class="emp_name text-truncate">Alaric
                                            Beslier</span><small class="emp_post text-truncate text-muted">Tax
                                            Accountant</small></div>
                                </div>
                            </td>
                            <td>abeslier2n@zimbio.com</td>
                            <td>04/16/2021</td>
                            <td>$19366.53</td>
                            <td><span class="badge bg-label-warning">Resigned</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;"
                                                class="dropdown-item text-danger delete-record">Delete</a></li>
                                    </ul>
                                </div><a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="control" style="display: none;" tabindex="0"></td>
                            <td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input">
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img
                                                src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets//img/avatars/2.png"
                                                alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><span class="emp_name text-truncate">Edwina
                                            Ebsworth</span><small class="emp_post text-truncate text-muted">Human Resources
                                            Assistant</small></div>
                                </div>
                            </td>
                            <td>eebsworth2m@sbwire.com</td>
                            <td>09/27/2021</td>
                            <td>$19586.23</td>
                            <td><span class="badge bg-label-primary">Current</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;"
                                                class="dropdown-item text-danger delete-record">Delete</a></li>
                                    </ul>
                                </div><a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td class="control" style="display: none;" tabindex="0"></td>
                            <td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input">
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span
                                                class="avatar-initial rounded-circle bg-label-dark">RH</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><span class="emp_name text-truncate">Ronica
                                            Hasted</span><small class="emp_post text-truncate text-muted">Software
                                            Consultant</small></div>
                                </div>
                            </td>
                            <td>rhasted2l@hexun.com</td>
                            <td>07/04/2021</td>
                            <td>$24866.66</td>
                            <td><span class="badge bg-label-warning">Resigned</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;"
                                                class="dropdown-item text-danger delete-record">Delete</a></li>
                                    </ul>
                                </div><a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr> --}}
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                Showing 1 to 7 of 100 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_0_previous">
                                        <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0"
                                            tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                            class="page-link">1</a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0"
                                            class="page-link">2</a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0"
                                            class="page-link">3</a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0"
                                            class="page-link">4</a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0"
                                            class="page-link">5</a></li>
                                    <li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis"><a
                                            href="#" aria-controls="DataTables_Table_0" data-dt-idx="6"
                                            tabindex="0" class="page-link">…</a></li>
                                    <li class="paginate_button page-item"><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0"
                                            class="page-link">15</a></li>
                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a
                                            href="#" aria-controls="DataTables_Table_0" data-dt-idx="8"
                                            tabindex="0" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>@endsection
