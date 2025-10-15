@extends('admin.layouts.app')
@section('title', 'Staff List')
@push('css')
@endpush

@section('content')
    <div class="middle-sec">
        <section class="search-top-pannel">

            <div class="page-title-box d-sm-flex align-items-center justify-content-between w-100 p24-14 pb-2 pt-0">
                <h4 class="mb-sm-0 font-size-28">Staff List</h4>
                <div class="page-title-right">
                    <a href="{{ route('admin.staffs.create') }}" class="bg-orange btn-hover back-all text-white rounded-pill">
                        <i class="fa fa-plus-circle"></i> Add New
                    </a>
                </div>
            </div>

        </section>

        <!--<div class="row">-->
        <!--    <div class="col-12">-->
        <!--        <div class="page-title-box d-sm-flex align-items-center justify-content-between">-->
        <!--            <h4 class="mb-sm-0 font-size-18">Staff List</h4>-->
        <!--            <div class="page-title-right">-->
        <!--                <a href="{{ route('admin.staffs.create') }}" class="btn btn-sm btn-primary">-->
        <!--                    <i class="fa fa-plus-circle"></i> Add New-->
        <!--                </a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <div class="row all-field-pannel mt-2">
            <div class="col-12 search-left">
                <!-- Accordion for Search -->
                <div class="accordion mb-3" id="accordionSearch">
                    <div class="accordion-item border-0">
                        <div class="accordion-header search-header" id="headingSearch">
                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                            <button class="accordion-button {{ request()->query() ? '' : 'collapsed' }}" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseSearch"
                                aria-expanded="{{ request()->query() ? 'true' : 'false' }}" aria-controls="collapseSearch">
                                Search
                            </button>
                        </div>
                        <div id="collapseSearch" class="accordion-collapse collapse {{ request()->query() ? 'show' : '' }}"
                            aria-labelledby="headingSearch" data-bs-parent="#accordionSearch">
                            <div class="accordion-body">
                                <form method="GET" action="{{ route('admin.staffs.index') }}">
                                    <div class="row">
                                        <div class="col-md-6 pb-4">
                                            <div class="form-group">
                                                <input type="search" name="search" class="form-control"
                                                    placeholder="Search by Company Name, Mobile"
                                                    value="{{ request('search') ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <select name="status" class="form-select">
                                                    <option value=""
                                                        {{ !isset(request()->status) ? 'selected' : '' }}>Status</option>
                                                    @foreach (getStatus() as $status)
                                                        <option value="{{ $status->value }}"
                                                            {{ request('status') === $status->value ? 'selected' : '' }}>
                                                            {{ $status->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-0">
                                            <button type="submit"
                                                class="btn height-48 bg-orange btn-hover text-white">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card bg-none box-shadow-none">
                    <div class="card-body p-7">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered mb-0 text-nowrap bg-white">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-center">Sl. no.</th>
                                        <th>Designation</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th class="text-center">Active Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($staffs as $staff)
                                        <tr>
                                            <td class="text-center">{{ $loop->index + 1 }}</td>
                                            <td>{{ $staff->designation->name ?? '' }}</td>
                                            <td>{{ $staff->name ?? '' }}</td>
                                            <td>{{ $staff->email ?? '' }}</td>
                                            <td>{{ $staff->mobile ?? '' }}</td>
                                            <td class="text-center">
                                                <input type="checkbox" id="staff-{{ $loop->index + 1 }}"
                                                    class="staff-status" data-id="{{ $staff->id }}" switch="bool"
                                                    {{ isActive($staff->status) ? 'checked' : '' }} />
                                                <label class="custom-label-margin" for="staff-{{ $loop->index + 1 }}"
                                                    data-on-label="Yes" data-off-label="No"></label>
                                            </td>
                                            <td class="text-center">
                                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="View/Edit"
                                                    href="{{ route('admin.staffs.edit', $staff->id) }}"
                                                    class="btn btn-sm btn-soft-success"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <x-no-data-found></x-no-data-found>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {!! $staffs->links('pagination::bootstrap-4') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/admin/js/custom/staff_list.js') }}"></script>
@endpush
