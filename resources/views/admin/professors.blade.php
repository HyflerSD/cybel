@extends('layouts.admin')

@section('title') {{'Professors'}} @endsection
@section('content')
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Advisees List</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <!-- <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab1" data-bs-toggle="tab"> List View </a>
                            </li>
                            <li>
                                <a href="#tab2" data-bs-toggle="tab"> Grid View </a>
                            </li>
                        </ul> -->
                        <ul class="nav customtab nav-tabs" role="tablist">
                            <li class="nav-item"><a href="#tab1" class="nav-link active"
                                                    data-bs-toggle="tab">List
                                    View</a></li>
                            <li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Grid
                                    View</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-box">
                                            <div class="card-head">
                                                <header>All Advisees</header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh"
                                                       href="javascript:;"></a>
                                                    <a class="t-collapse btn-color fa fa-chevron-down"
                                                       href="javascript:;"></a>
                                                    <a class="t-close btn-color fa fa-times"
                                                       href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group">
                                                            <a href="add_professor.html" id="addRow"
                                                               class="btn btn-primary">
                                                                Add New <i class="fa fa-plus"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="example4">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th> Name </th>
                                                        <th> Department </th>
                                                        <th> Gender </th>
                                                        <th> Degree </th>
                                                        <th> Mobile </th>
                                                        <th> Email </th>
                                                        <th>Joining Date</th>
                                                        <th> Action </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user1.jpg" alt="">
                                                        </td>
                                                        <td>Rajesh</td>
                                                        <td class="left">Computer</td>
                                                        <td class="left">Male</td>
                                                        <td class="left">M.Com, B.Ed</td>
                                                        <td><a href="tel:4444565756">
                                                                4444565756 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                rajesh@gmail.comsdgfsdfg </a></td>
                                                        <td class="left">22 Feb 2000</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user10.jpg" alt="">
                                                        </td>
                                                        <td>Pooja Patel</td>
                                                        <td class="left">Mechanical</td>
                                                        <td class="left">Female</td>
                                                        <td class="left">M.E.</td>
                                                        <td><a href="tel:444786876">
                                                                444786876 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                pooja@gmail.com </a></td>
                                                        <td class="left">27 Aug 2005</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user2.jpg" alt="">
                                                        </td>
                                                        <td>Sarah Smith</td>
                                                        <td class="left">Science</td>
                                                        <td class="left">Female</td>
                                                        <td class="left">B.Sc., M.Sc.</td>
                                                        <td><a href="tel:44455546456">
                                                                44455546456 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                sarah@gmail.com </a></td>
                                                        <td class="left">05 Jun 2011</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user3.jpg" alt="">
                                                        </td>
                                                        <td>John Deo</td>
                                                        <td class="left">Music</td>
                                                        <td class="left">Male</td>
                                                        <td class="left">B.A.</td>
                                                        <td><a href="tel:444543564">
                                                                444543564 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                john@gmail.com </a></td>
                                                        <td class="left">15 Feb 2012</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user4.jpg" alt="">
                                                        </td>
                                                        <td>Jay Soni</td>
                                                        <td class="left">Mathematics</td>
                                                        <td class="left">10</td>
                                                        <td class="left">B.B.A., P.H.D.</td>
                                                        <td><a href="tel:444543564">
                                                                444543564 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                kenh@gmail.com </a></td>
                                                        <td class="left">12 Nov 2012</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user5.jpg" alt="">
                                                        </td>
                                                        <td>Jacob Ryan</td>
                                                        <td class="left">Computer</td>
                                                        <td class="left">Male</td>
                                                        <td class="left">B.E., M.E.</td>
                                                        <td><a href="tel:444543564">
                                                                444543564 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                johnson@gmail.com </a></td>
                                                        <td class="left">03 Dec 2001</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user6.jpg" alt="">
                                                        </td>
                                                        <td>Megha Trivedi</td>
                                                        <td class="left">Mathematics</td>
                                                        <td class="left">Female</td>
                                                        <td class="left">M.COM, M.Ed.</td>
                                                        <td><a href="tel:444543564">
                                                                444543564 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                megha@gmail.com </a></td>
                                                        <td class="left">17 Mar 2013</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user1.jpg" alt="">
                                                        </td>
                                                        <td>Rajesh</td>
                                                        <td class="left">Computer</td>
                                                        <td class="left">Male</td>
                                                        <td class="left">M.Com, B.Ed</td>
                                                        <td><a href="tel:4444565756">
                                                                4444565756 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                rajesh@gmail.com </a></td>
                                                        <td class="left">22 Feb 2000</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user10.jpg" alt="">
                                                        </td>
                                                        <td>Pooja Patel</td>
                                                        <td class="left">Mechanical</td>
                                                        <td class="left">Female</td>
                                                        <td class="left">M.E.</td>
                                                        <td><a href="tel:444786876">
                                                                444786876 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                pooja@gmail.com </a></td>
                                                        <td class="left">27 Aug 2005</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user2.jpg" alt="">
                                                        </td>
                                                        <td>Sarah Smith</td>
                                                        <td class="left">Science</td>
                                                        <td class="left">Female</td>
                                                        <td class="left">B.Sc., M.Sc.</td>
                                                        <td><a href="tel:44455546456">
                                                                44455546456 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                sarah@gmail.com </a></td>
                                                        <td class="left">05 Jun 2011</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user3.jpg" alt="">
                                                        </td>
                                                        <td>John Deo</td>
                                                        <td class="left">Music</td>
                                                        <td class="left">Male</td>
                                                        <td class="left">B.A.</td>
                                                        <td><a href="tel:444543564">
                                                                444543564 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                john@gmail.com </a></td>
                                                        <td class="left">15 Feb 2012</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user4.jpg" alt="">
                                                        </td>
                                                        <td>Jay Soni</td>
                                                        <td class="left">Mathematics</td>
                                                        <td class="left">10</td>
                                                        <td class="left">B.B.A., P.H.D.</td>
                                                        <td><a href="tel:444543564">
                                                                444543564 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                kenh@gmail.com </a></td>
                                                        <td class="left">12 Nov 2012</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user5.jpg" alt="">
                                                        </td>
                                                        <td>Jacob Ryan</td>
                                                        <td class="left">Computer</td>
                                                        <td class="left">Male</td>
                                                        <td class="left">B.E., M.E.</td>
                                                        <td><a href="tel:444543564">
                                                                444543564 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                johnson@gmail.com </a></td>
                                                        <td class="left">03 Dec 2001</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td class="patient-img">
                                                            <img src="../assets/img/user/user6.jpg" alt="">
                                                        </td>
                                                        <td>Megha Trivedi</td>
                                                        <td class="left">Mathematics</td>
                                                        <td class="left">Female</td>
                                                        <td class="left">M.COM, M.Ed.</td>
                                                        <td><a href="tel:444543564">
                                                                444543564 </a></td>
                                                        <td><a href="mailto:shuxer@gmail.com">
                                                                megha@gmail.com </a></td>
                                                        <td class="left">17 Mar 2013</td>
                                                        <td>
                                                            <a href="edit_professor.html"
                                                               class="tblEditBtn">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a class="tblDelBtn">
                                                                <i class="fa fa-trash-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user10.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Pooja Patel </div>
                                                        <div class="name-center"> Mathematics </div>
                                                    </div>
                                                    <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user1.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Rajesh </div>
                                                        <div class="name-center"> Science </div>
                                                    </div>
                                                    <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
                                                    </p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user2.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Sarah Smith </div>
                                                        <div class="name-center"> Computer </div>
                                                    </div>
                                                    <p>456, Estern evenue, Courtage area, <br />New York</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user3.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">John Deo </div>
                                                        <div class="name-center"> Engineering </div>
                                                    </div>
                                                    <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user4.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Jay Soni </div>
                                                        <div class="name-center"> Music </div>
                                                    </div>
                                                    <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
                                                    </p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user5.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Jacob Ryan </div>
                                                        <div class="name-center"> Commerce </div>
                                                    </div>
                                                    <p>456, Estern evenue, Courtage area, <br />New York</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user6.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Megha Trivedi </div>
                                                        <div class="name-center"> Mechanical </div>
                                                    </div>
                                                    <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user1.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Rajesh </div>
                                                        <div class="name-center"> Science </div>
                                                    </div>
                                                    <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
                                                    </p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user2.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Sarah Smith </div>
                                                        <div class="name-center"> Computer </div>
                                                    </div>
                                                    <p>456, Estern evenue, Courtage area, <br />New York</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user10.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Pooja Patel </div>
                                                        <div class="name-center"> Mathematics </div>
                                                    </div>
                                                    <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user1.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">Rajesh </div>
                                                        <div class="name-center"> Science </div>
                                                    </div>
                                                    <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
                                                    </p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-box">
                                            <div class="card-body no-padding ">
                                                <div class="doctor-profile">
                                                    <img src="../assets/img/user/user3.jpg" class="doctor-pic"
                                                         alt="">
                                                    <div class="profile-usertitle">
                                                        <div class="doctor-name">John Deo </div>
                                                        <div class="name-center"> Engineering </div>
                                                    </div>
                                                    <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
                                                    <div>
                                                        <p><i class="fa fa-phone"></i><a
                                                                href="tel:(123)456-7890"> (123)456-7890</a></p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="professor_profile.html"
                                                           class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
@endsection
