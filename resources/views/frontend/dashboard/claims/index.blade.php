@extends('frontend.dashboard.edit')

@php
    $headTitle = 'Accident Claims';
@endphp

@section('customer-dashboard')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Claim ID</th>
                    <th>Status</th>
                    <th>Claim Filed</th>
                    <th>Last Update</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12214</td>
                    <td>In Progress</td>
                    <td>Apr 21, 2025</td>
                    <td>Apr 21, 2025</td>
                    <td>
                        <a class="btn btn-sm btn-info" href=""><i class="fas fa-eye"></i> View</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
