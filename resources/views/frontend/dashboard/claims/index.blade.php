@extends('frontend.dashboard.index')

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
                @forelse ($claims as $item)
                    <tr>
                        <td>{{ $item->rta_number }}</td>
                        <td>{{ $item->status->getLabel() }}</td>
                        <td>{{ $item->created_at->toFormattedDateString() }}</td>
                        <td>{{ $item->updated_at->toFormattedDateString() }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('claims.show', $item->rta_number) }}"><i
                                    class="fas fa-eye"></i> View</a>
                            <button type="button" class="btn btn-sm btn-success openModal"
                                data-claim_id="{{ $item->id }}"><i class="fas fa-comment-dots"></i>
                                Comments</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No record Found!</td>
                    </tr>
                @endforelse
                <div class="modal fade" id="comments" tabindex="-1" aria-labelledby="commentsLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="commentsLabel">Comments</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.openModal').on('click', function() {
                const claimId = $(this).data('claim_id');
                $.ajax({
                    url: `/claims/${claimId}/comments`,
                    type: 'GET',
                    success: function(data) {
                        $('#comments .modal-body').html(data);
                        $('#comments').modal('show');
                    }
                })
            })
        })
    </script>
@endsection
