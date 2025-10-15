@extends('admin.layouts.app')
@section('title','Designation Add/Edit')
@push('css') @endpush

@section('content')

<section class="search-top-pannel">
   
            <div class="page-title-box d-sm-flex align-items-center justify-content-between w-100 p24-14 pb-2">
                <h4 class="mb-sm-0 font-size-28">Designation Add/Edit</h4>
                <div class="page-title-right">
                    <a href="{{ route('admin.designations.index') }}" class="bg-orange btn-hover back-all text-white rounded-pill">
                        <i class="fa fa-arrow-circle-left"></i> Back
                    </a>
                </div>
            </div>
      
</section>

    <!--<div class="row">-->
    <!--    <div class="col-12">-->
    <!--        <div class="page-title-box d-sm-flex align-items-center justify-content-between">-->
    <!--            <h4 class="mb-sm-0 font-size-18">Designation Add/Edit</h4>-->
    <!--            <div class="page-title-right">-->
    <!--                <a href="{{ route('admin.designations.index') }}" class="btn btn-sm btn-outline-primary">-->
    <!--                    <i class="fa fa-arrow-circle-left"></i> Back-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

     <div class="row all-field-pannel">
        <div class="col-12">
              <div class="card bg-none box-shadow-none">
                <div class="card-body p-17">
                    <form action="{{ $route }}" method="POST" id="prevent-form">
                        @csrf
                        @isset($designation)
                            @method('PUT')
                        @endisset
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Name {!! starSign() !!}</label>
                                    <input type="text" name="name" value="{{ old('name') ?? $designation->name ?? '' }}"
                                           class="form-control {{ hasError('name') }}"
                                           placeholder="Name">
                                    @error('name')
                                    {!! displayError($message) !!}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control {{ hasError('description') }}" placeholder="Description">{{ old('description') ?? $designation->description ?? '' }}</textarea>
                                    @error('description')
                                    {!! displayError($message) !!}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div>
                            <x-submit-button></x-submit-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js') @endpush
