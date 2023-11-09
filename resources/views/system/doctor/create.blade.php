@extends('layout.app')
@section('content')
    <!-- Content Wrapper-->
    <div class="content-wrapper">
        <!-- Content Header-->
        <section class="content-header pb-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12  mx-auto ">
                        <h1>Create Doctor</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Header-->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md mx-auto">
                        <div class="card card-info">
                            {{-- Form Start --}}
                            <form role="form" method="POST" action="{{ route('doctor.store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                {{-- Doctor Form --}}
                                <div class="doctorForm" id="basicinfo" style="display: block">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Info</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col group-form">
                                                <div class="form-group">
                                                    <label for="license">License No</label>
                                                    <input type="number" class="form-control" id="license_no"
                                                        name="license_no" placeholder="Enter License Number"
                                                        onchange="infoValidation()">
                                                    @error('license_no')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col group-form">
                                                <div class="form-group">
                                                    <label for="first_name">First Name</label>
                                                    <input type="text" class="form-control" id="first_name"
                                                        name="first_name" placeholder="Enter First Name">
                                                    @error('first_name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col group-form">
                                                <div class="form-group">
                                                    <label for="middle_name">Middle Name</label>
                                                    <input type="text" class="form-control" id="middle_name"
                                                        name="middle_name" placeholder="Enter Middle Name">
                                                    @error('middle_name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col group-form">
                                                <div class="form-group">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" class="form-control" id="last_name"
                                                        name="last_name" placeholder="Enter Last Name">
                                                    @error('last_name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col form-group">
                                                <div class="form-group">
                                                    <label for="department_id">Select Department</label>
                                                    <select name="department_id" id="department_id" class="form-control">
                                                        <option value="">Select Department</option>
                                                        @foreach ($departments as $department)
                                                            <option value="{{ $department->id }}">
                                                                {{ $department->department_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('department_id')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col form-group">
                                                <label for="specialization">Specialization</label>
                                                <input type="text" class="form-control" id="specialization"
                                                    name="specialization" placeholder="Specialization">
                                                @error('specialization')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col form-group">
                                                <label for="date">Date of Birth</label>
                                                <input type="text" class="form-control" id="nepali_date" name="nepali_dob"
                                                    placeholder="Date of Birth">
                                                @error('nepali_dob')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col form-group">
                                                <label for="contact">Contact</label>
                                                <input type="number" class="form-control" id="contact" name="contact"
                                                    placeholder="Contact">
                                                @error('contact')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col form-group" hidden>
                                                <input type="date" id="english_date" name="english_dob">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col form-group">
                                                <label for="Role">Role</label><br>
                                                <input type="radio" name="role" value="1">
                                                Admin
                                                <input type="radio" name="role" value="2">
                                                Doctor
                                                @error('role')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col form-group">
                                                <label for="Address">Gender</label> <br>
                                                <input type="radio" name="gender" id="male" value="Male"> Male
                                                <input type="radio" name="gender" id="female" value="Female">
                                                Female
                                                <input type="radio" name="gender" id="others" value="Others">
                                                Others
                                                @error('gender')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col form-group">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name='status' id="status">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>



                                        <hr>
                                        {{-- address --}}
                                        <div class="row">
                                            <div class="col form-group">
                                                <label for="province">Province</label>
                                                <input type="text" class="form-control" id="province"
                                                    name="province" placeholder="Province">
                                                @error('province')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col form-group">
                                                <label for="district">District</label>
                                                <input type="text" class="form-control" id="district"
                                                    name="district" placeholder="District">
                                                @error('district')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label for="municipality">Municipality</label>
                                                <input type="text" class="form-control" id="municipality"
                                                    name="municipality" placeholder="Municipality">
                                                @error('municipality')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col form-group">
                                                <label for="ward">Ward</label>
                                                <input type="number" class="form-control" id="ward" name="ward"
                                                    placeholder="Ward">
                                                @error('ward')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" name="city"
                                                    placeholder="City">
                                                @error('city')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col form-group">
                                                <label for="tole">Tole</label>
                                                <input type="text" class="form-control" id="tole" name="tole"
                                                    placeholder="Tole">
                                                @error('tole')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="group-form">
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input type="file" name="image" id="selectImage">
                                            </div>
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <img id="preview" src="#" alt="profile" class="mt-3"
                                            style="display:none;" />

                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-info btn-sm float-right "
                                            onclick="toggleFormOne()" id="toggleFormOne">Next</a>
                                    </div>
                                </div>

                                {{-- Education Form --}}
                                <div class="educationForm " id="education" style="display: none">
                                    <div class="card-header ">
                                        <h3 class="card-title mt-1">Education</h3>
                                        <a href="#" id="addEducation"
                                            class="btn btn-light text-dark btn-sm float-right">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>

                                    <div class="card-body">
                                        <div class="row education-form">
                                            <div class="col group-form">
                                                <div class="form-group">
                                                    <label for="institution">Institution</label>
                                                    <input type="text" class="form-control" id="institution"
                                                        name="institution[]" placeholder="Enter Institution Name">
                                                    @error('institution')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col group-form">
                                                <div class="form-group">
                                                    <label for="board">Board/University</label>
                                                    <input type="text" class="form-control" id="board"
                                                        name="board[]" placeholder="Enter Board/University">
                                                    @error('board')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col group-form">
                                                <div class="form-group">
                                                    <label for="level">Level</label>
                                                    <select name="level[]" id="level" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="SEE">SEE</option>
                                                        <option value="+2">+2</option>
                                                        <option value="Bachelor">Bachelor</option>
                                                        <option value="Master">Master</option>
                                                    </select>
                                                    @error('level')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col group-form">
                                                <div class="form-group">
                                                    <label for="marks">Marks</label>
                                                    <input type="text" class="form-control" id="marks"
                                                        name="marks[]" placeholder="Enter Marks Obtained">
                                                    @error('marks')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- 1st field --}}
                                            <div class="col form-group">
                                                <label for="date">Completion Date</label>
                                                <input type="text" class="form-control bscompletion_date" id="bscompletion_date" name="completion_date[]"
                                                    placeholder="Completion Date">
                                                @error('completion_date')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col form-group">
                                                <input type="date" id="adcompletion_date" name="adcompletion_date[]">
                                            </div>

                                            <div>
                                                <a href="#" id="removeEducation"
                                                    class="btn btn-danger btn-sm removeEducation">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <a href="#" class="btn btn-secondary btn-sm" onclick="toggleFormOne()"
                                            id="toggleFormOne">Previous</a>

                                        <a href="#" @disabled(true)
                                            class="btn btn-info btn-sm float-right " onclick="toggleFormTwo()"
                                            id="toggleFormTwo">Next</a>
                                    </div>
                                </div>

                                <div class="experienceForm " id="experience" style="display: none">
                                    <div class="card-header ">
                                        <h3 class="card-title mt-1">Experience</h3>
                                        <a href="#" id="addExperience"
                                            class="btn btn-light text-dark btn-sm float-right">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>

                                    <div class="card-body">
                                        <div class="row experience-form">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="organization_name">Organization Name</label>
                                                    <input type="text" class="form-control" id="organization_name"
                                                        name="organization_name[]" placeholder="Enter Organization Name">
                                                    @error('organization_name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="position">Position</label>
                                                    <input type="text" class="form-control" id="position"
                                                        name="position[]" placeholder="Enter Position">
                                                    @error('position')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="start_date">Start date</label>
                                                    <input type="month" class="form-control" id="start_date"
                                                        name="start_date[]" placeholder="Enter First Name">
                                                    @error('start_date')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="end_date">End date</label>
                                                    <input type="month" class="form-control" id="end_date"
                                                        name="end_date[]" placeholder="Enter First Name">
                                                    @error('end_date')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label for="level">Job Description</label><br>
                                                    <textarea name="job_description[]" id="job_description" rows="3"></textarea>
                                                </div>
                                                @error('job_description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group mt-5 text-right">
                                                    <label for=""></label>
                                                    <a href="#" class="btn btn-danger btn-sm removeExperience ">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <a href="#" class="btn btn-secondary btn-sm" onclick="toggleFormTwo()"
                                            id="toggleFormTwo">Previous</a>

                                        <a href="#" @disabled(true)
                                            class="btn btn-info btn-sm float-right " onclick="toggleFormThree()"
                                            id="toggleFormThree">Next</a>
                                    </div>
                                </div>

                                {{-- Login Form --}}
                                <div class="loginForm" id="doctorlogin" style="display: none;">
                                    <div class="card-header">
                                        <h3 class="card-title">Credentials</h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="email">Email address</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" placeholder="Enter email">
                                                    @error('email')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" placeholder="Password">
                                                @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col form-group">
                                                <label for="confirm password">Confirm Password</label>
                                                <input type="password" class="form-control" id="confirmpassword"
                                                    name="password_confirmation" placeholder="confirm password">
                                                @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a href="#" class="btn btn-secondary btn-sm float-left"
                                            onclick="toggleFormThree()" id="toggleFormTwo">Previous</a>
                                        <button class="btn btn-info btn-sm" id="submitForm" onclick="success()">Submit</button>
                                    </div>
                                </div>
                            </form>
                            {{-- Form End --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
    </div>
    <!-- Content Wrapper-->
@endsection
