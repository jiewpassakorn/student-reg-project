<div class="modal fade" id="insertCourseModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">แบบฟอร์มแก้ไขข้อมูล</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button> <!-- close button-->
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form action="" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 mt-2"><label class="labels">รหัสวิชา</label>
                                @error('CourseID')<span class="text-danger py-0">({{$message}})</span>@enderror
                                <input name="CourseID" type="text" class="form-control" placeholder="" value="">
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 mt-2"><label class="labels">ภาควิชา</label>

                                @error('DepartmentID')<span class="text-danger py-0">({{$message}})</span>@enderror

                                    <select name="DepartmentID" class="form-select">
                                        <option selected>Choose department...</option>
                                        @foreach($departments as $row)
                                            <option value="{{$row->DepartmentID}}">{{$row->DepartmentName}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mt-2"><label class="labels">ชื่อวิชา</label>
                                    @error('CourseName')<span class="text-danger py-0">({{$message}})</span>@enderror
                                    <input name="CourseName" type="text" class="form-control" placeholder="" value="">
                                </div>

                                <div class="col-md-6 mt-2"><label class="labels">หน่วยกิต</label>
                                    @error('Credit')<span class="text-danger py-0">({{$message}})</span>@enderror
                                    <input name="Credit" type="text" class="form-control" value="" placeholder="">
                                </div>
                            </div>                            
                            <div class="modal-footer mt-3">
                                <input type="submit" value="Save Profile" class="btn btn-primary profile-button add_button">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>