@extends('admin.layouts.app')
@section('title', 'Dashboard')
@push('css')
@endpush



@section('content')

    {{-- <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
            </div>
        </div>
    </div> --}}
    
    
           <div class="row dash-row">
             <div class="bar-top-dasgbaora">
                   <div class="row">
                      <div class="col-md-6">
                         <h2 class="title-text">
                            <span class="bg-orange text-white icon-dash"><i class="fa-solid fa-house"></i></span>
                            Dashboard
                         </h2>
                      </div>
                      <div class="col-md-6">
                         <div class="dashbaord-bar">
                            <div class="date-dashbaord">
                               <span><i class="fa-solid fa-calendar"></i></span>
                               <select class="form-select">
                                  <option selected>This Month</option>
                                  <option value="">Select Month</option>
                                  <option value="January">January</option>
                                  <option value="February">February</option>
                                  <option value="March">March</option>
                                  <option value="April">April</option>
                                  <option value="May">May</option>
                                  <option value="June">June</option>
                                  <option value="July">July</option>
                                  <option value="August">August</option>
                                  <option value="September">September</option>
                                  <option value="October">October</option>
                                  <option value="November">November</option>
                                  <option value="December">December</option>
                               </select>
                            </div>
                            <button class="bg-orange text-white btn-hover rounded-pill">
                            <i class="fa-solid fa-download me-2"></i>Download Report
                            </button>
                         </div>
                      </div>
                   </div>
                </div>
 </div>
 
 
  <div class="dashbaord-main-body">
    <div class="row">
        @if (authUserRole() === 'administrator')
            <div class="col-xl-12">
                <div class="row">
                    <hr>
                    <div class="col-md-6 plr">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                     <div class="flex-shrink-0 align-self-center">
                                        <div class="icon-left">
                                            <span class="avatar-title1">
                                               <img src="{{ asset('assets/common/images/dash1.svg') }}"
                        class="img-fluid icon-login " alt="Sample image">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.audits.index', ['step_status' => 'ongoing']) }}">
                                                Engagement in progress
                                            </a>
                                        </p>
                                        <!--<h4 class="mb-0">-->
                                        <!--    {{ auditStepStatusWiseCount('ongoing') }}-->
                                        <!--</h4>-->
                                        <div class="progress-dashbaord">
                                            <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
            </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 plr2">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                        <div class="flex-shrink-0 align-self-center">
                                        <div class="icon-left">
                                            <span class="avatar-title1">
                                               <img src="{{ asset('assets/common/images/dash2.svg') }}"
                        class="img-fluid icon-login " alt="Sample image">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.audits.index', ['step_status' => 'approved']) }}">
                                                Engagement Completed
                                            </a>
                                        </p>
                                        <!--<h4 class="mb-0">-->
                                        <!--    {{ auditStepStatusWiseCount('approved') }}-->
                                        <!--</h4>-->
                                    <div class="progress-dashbaord">
                                    <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 plr">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                        <div class="flex-shrink-0 align-self-center">
                                         <div class="icon-left">
                                            <span class="avatar-title1">
                                               <img src="{{ asset('assets/common/images/dsh3.svg') }}"
                        class="img-fluid icon-login mt-2" alt="Sample image">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.audits.index', ['step_status' => 'draft']) }}">
                                                Engagement Pending
                                            </a>
                                        </p>
                                        <!--<h4 class="mb-0">-->
                                        <!--    {{ auditStepStatusWiseCount('draft') }}-->
                                        <!--</h4>-->
                                         <div class="progress-dashbaord">
                                    <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 plr2">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                       <div class="flex-shrink-0 align-self-center">
                                        <div class="icon-left">
                                            <span class="avatar-title1">
                                               <img src="{{ asset('assets/common/images/dash4.svg') }}"
                        class="img-fluid icon-login " alt="Sample image">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium mb-0">
                                            <a href="{{ route('admin.audit-wise-activators',['step_status' => 'draft']) }}">
                                                Who is where
                                            </a>
                                        </p>
                                        <h4 class="mb-0 active-user">
                                            {{ auditStepStatusWiseCount('returned') }}
                                        </h4> 
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            
            <div class="row mt-4">
                <div class="col-md-8">
                    <div class="pannel-all bg-white">
                        <h3 class="mb-4">Engagement Overview</h3>
                        
                        <div class="cgart-area">
    <div class="chart-container">
      <canvas id="myBarChart" height="100"></canvas>
    </div
                            
                            
                         <!--   <img src="{{ asset('assets/common/images/chart.svg') }}"-->
                         <!--alt="Sample image">-->
                        </div>
                    </div>
                </div>
                
                 <div class="col-md-4">
                     <ul class="notice-list">
                         <li class="bg-white">
                             <div class="notice-left">
                                 <p>Recent Activity</p>
                                 <h5>You “Ad a Staff”</h5>
                             </div>
                             
                             <div class="date-notice">
                                 10:10 am
                             </div>
                         </li>
                           <li class="bg-white">
                             <div class="notice-left">
                                 <p>Recent Activity</p>
                                 <h5>Update “Audit”</h5>
                             </div>
                             
                             <div class="date-notice">
                                 3:10 am
                             </div>
                         </li>
                     </ul>
                 </div>
            </div>
            </div>
        @else
            <div class="col-xl-12">
                <div class="row">
                    <h2>Audit workflow status as Supervisor</h2>
                    <hr>

                    <div class="col-md-3">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.supervisor-audits', ['status' => 'ongoing']) }}">
                                                Engagement in progress
                                            </a>
                                        </p>
                                        <h4 class="mb-0">
                                            {{ supervisorStepStatusWiseCount(Auth::user()->id, 'ongoing') }}
                                        </h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.supervisor-audits', ['status' => 'draft']) }}">
                                                Request Pending
                                            </a>
                                        </p>
                                        <h4 class="mb-0">
                                            {{ supervisorStepStatusWiseCount(Auth::user()->id, 'draft') }}
                                        </h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.supervisor-audits', ['status' => 'returned']) }}">
                                                Request Returned
                                            </a>
                                        </p>
                                        <h4 class="mb-0">
                                            {{ supervisorStepStatusWiseCount(Auth::user()->id, 'returned') }}
                                        </h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.supervisor-audits', ['status' => 'approved']) }}">
                                                Request Approved
                                            </a>
                                        </p>
                                        <h4 class="mb-0">
                                            {{ supervisorStepStatusWiseCount(Auth::user()->id, 'approved') }}
                                        </h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- <div class="col-md-3">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.supervisor-audits', ['status' => 'rejected']) }}">
                                                Rejected Audits
                                            </a>
                                        </p>
                                        <h4 class="mb-0">
                                            {{ supervisorStepStatusWiseCount(Auth::user()->id, 'rejected') }}
                                        </h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-xl-12">
                <div class="row">
                    <h2>Audit workflow status as Auditor</h2>
                    <hr>

                    <div class="col-md-3">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.auditor-audits', ['status' => 'draft']) }}">
                                                Pending Engagement (PE)
                                            </a>
                                        </p>
                                        <h4 class="mb-0">
                                            {{ auditorStepStatusWiseCount(Auth::user()->id, 'draft') }}
                                        </h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.auditor-audits', ['status' => 'ongoing']) }}">
                                                Engagement in progress (EIP)
                                            </a>
                                        </p>
                                        <h4 class="mb-0">
                                            {{ auditorStepStatusWiseCount(Auth::user()->id, 'ongoing') }}
                                        </h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.auditor-audits', ['status' => 'ongoing']) }}">
                                                Request Pending for Approval (RPA)
                                            </a>
                                        </p>
                                        <h4 class="mb-0">
                                            {{ auditorStepStatusWiseCount(Auth::user()->id, 'ongoing') }}
                                        </h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.auditor-audits', ['status' => 'approved']) }}">
                                                Request Approved
                                            </a>
                                        </p>
                                        <h4 class="mb-0">
                                            {{ auditorStepStatusWiseCount(Auth::user()->id, 'approved') }}
                                        </h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.auditor-audits', ['status' => 'returned']) }}">
                                                Request Returned
                                            </a>
                                        </p>
                                        <h4 class="mb-0">
                                            {{ auditorStepStatusWiseCount(Auth::user()->id, 'returned') }}
                                        </h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-3">
                        <div class="card mini-stats-wid block-dash">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">
                                            <a href="{{ route('admin.auditor-audits', ['status' => 'rejected']) }}">
                                                Rejected Audits
                                            </a>
                                        </p>
                                        <h4 class="mb-0">
                                            {{ auditorStepStatusWiseCount(Auth::user()->id, 'rejected') }}
                                        </h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        @endif
    </div>
</div>
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Orders</h4>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="align-middle">Order No.</th>
                                    <th class="align-middle">Invoice</th>
                                    <th class="align-middle">Date</th>
                                    <th class="align-middle">Total</th>
                                    <th class="align-middle">Payment Status</th>
                                    <th class="align-middle">Payment Method</th>
                                    <th class="align-middle">View Details</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end row -->
@endsection

@push('js')
@endpush
