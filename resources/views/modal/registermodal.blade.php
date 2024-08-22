<div class="modal fade" id="modal-user">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-plus"></i> Register
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
               <div class="" id="firstCard" style="border-radius: 20px;">
                    <div class="card-header">
                        <h3 class="card-title pt-2">
                            <p class="login-box-msg" style="font-family: Courier;font-weight: bolder;font-size: 13pt;">
                                <b style="color: red;">Step 1:</b><br> Search Student ID Number here
                            </p>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('checkStudent') }}" id="checkStudentForm">
                            @csrf

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label><span class="badge badge-default">Student ID Number:</span></label>
                                        <input type="text" id="studID_noreg" name="studID" placeholder="0000-0000-K" class="form-control" placeholder="0000-0000-K" class="form-control" autofocus>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <button type="submit" name="btn-submit" class="btn btn-success btn-block" style="border-radius: 20px">
                                            <i class="fas fa-check"></i> <b>Search</b>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="" id="secondCard" style="display: none;">
                    <div class="card-header">
                        <h3 class="card-title pt-2">
                            <p class="login-box-msg" style="font-family: Courier;font-weight: bolder;font-size: 13pt;">
                                <b style="color: red;">Step 2:</b><br> Register Your Data
                            </p>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('studentCreate') }}">
                            @csrf
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label><span class="badge badge-default">Student ID Number:</span></label>
                                        <input type="text" id="stud_id" name="stud_id" value="" placeholder="0000-0000-K" class="form-control" readonly="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label><span class="badge badge-default">Fullname:</span></label>
                                        <input type="text" id="fullname" name="fullname" value="" class="form-control" readonly="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label><span class="badge badge-default">Generated Password:</span></label>
                                        <input type="text" id="passwordreg" name="password" value="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <input type="hidden" id="idx" name="studlist_id" value="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <button type="submit" name="btn-submit" class="btn btn-success btn-block" style="border-radius: 20px">
                                            <i class="fas fa-check"></i> <b>Register</b>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bg-gray">
                    <div style="padding-top: 5px;">
                    @include('students.partials.numpad_control')
                    </div>
                </div>
            </div>
            
            <div class="modal-footer justify-content-between">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>