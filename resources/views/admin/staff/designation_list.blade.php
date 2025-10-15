@extends('admin.layouts.app')
@section('title','Designation List')
@push('css') @endpush

@section('content')

<section class="search-top-pannel">
   
            <div class="page-title-box d-sm-flex align-items-center justify-content-between w-100 p24-14 pb-2">
                <h4 class="mb-sm-0 font-size-28">Designation List</h4>
                <div class="page-title-right">
                    <a href="{{ route('admin.designations.create') }}" class="bg-orange btn-hover back-all text-white rounded-pill">
                        <i class="fa fa-plus-circle"></i> Add New
                    </a>
                </div>
            </div>
      
</section>

    <!--<div class="row">-->
    <!--    <div class="col-12">-->
    <!--        <div class="page-title-box d-sm-flex align-items-center justify-content-between">-->
    <!--            <h4 class="mb-sm-0 font-size-18">Designation List</h4>-->
    <!--            <div class="page-title-right">-->
    <!--                <a href="{{ route('admin.designations.create') }}" class="btn btn-sm btn-primary">-->
    <!--                    <i class="fa fa-plus-circle"></i> Add New-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

   <div class="row all-field-pannel">
        <div class="col-12">
              <div class="card bg-none box-shadow-none">
                <div class="card-body p-17">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered mb-0 text-nowrap bg-white">
                            <thead>
                            <tr>
                                <th class="text-center">Sl.no</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($designations as $designation)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td>{{ $designation->name ?? '' }}</td>
                                    <td>{{ textLimit($designation->description,40) ?? '' }}</td>
                                    <td class="text-center">
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="{{ route('admin.designations.edit',$designation->slug) }}"
                                           class="btn btn-sm btn-soft-success" ><i class="fa fa-edit"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                           class="btn btn-sm btn-soft-danger delete-data"
                                           data-id="{{ 'delete-designation-'.$designation->id }}"
                                           href="javascript:void(0);">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-designation-{{ $designation->id }}"
                                              action="{{ route('admin.designations.destroy',$designation->id) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <x-no-data-found></x-no-data-found>
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="d-flex justify-content-center">
                    {!! $designations->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js') @endpush
