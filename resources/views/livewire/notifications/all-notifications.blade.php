<div class="content">

    <!-- Simple -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Notifications</h3>
        </div>
        <div class="block-content">

            <div class="row justify-content-between mb-4 align-items-center">
                <div  class="col-lg-7 mt-2 form-inline">
                    <input wire:model.debounce="search" type="text" class="form-control" placeholder="Search...">
                </div>
                <div class="col-lg-2 form-inline">
                    Per Page: &nbsp
                    <select wire:model="perPage" class="form-control">
                        <option>5</option>
                        <option>10</option>
                        <option>50</option>
                        <option>100</option>
                        <option>250</option>
                    </select>
                </div>

                <div class="col-lg-2 form-inline mt-2">
                        <button class="btn btn-primary" wire:click='refresh'>
                            <i class="fa fas fa-sync"></i>
                        </button>

                </div>

            </div>


            @forelse ($notifications as $notification)
                @php

                    if ($notification->read_at) {
                        $isRead = true;
                    } else {
                        $isRead = false;
                    }

                @endphp

                <div class="alert alert-{{ $isRead ? 'success' : 'danger' }}" role="alert">

                    <a class="alert-link" href="#">
                        <span class="fw-medium text-muted">{{ $notification->created_at->diffForHumans() }}</span>

                        <i
                            class="fa fa-fw {{ $isRead ? 'fa-check-circle' : 'fa-info-circle' }}
                        text-{{ $isRead ? 'success' : 'danger' }}"></i>
                        {{ $notification->data['message'] }}

                    </a>!


                    @if ($notification->read_at == null)
                        <a class="float-right mark-as-read"
                            style="float: right !important; cursor: pointer; text-decoration:underline"
                            wire:click='markAsRead("{{ $notification->id }}")'> Mark as read</a>
                    @endif
                </div>

            @empty

                <h2>No Notification Found</h2>
            @endforelse

            <div class="d-flex justify-content-center">
                {{ $notifications->links() }}

            </div>

        </div>
    </div>
    <!-- END Simple -->

</div>
