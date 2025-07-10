@extends('backend.layouts.app')

@section('title', __('App Contact'))

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body border-bottom">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img src="{{ url('/') }}/assets/images/profile_av.png" alt="..." class="w90 rounded-4" />
                    </div>
                    <div class="col ml-n2">
                        <h5 class="mb-1"><a href="#">Allie Grater</a></h5>
                        <p class="text-muted mb-1">alliegrater@luno.com</p>
                        <span class="text-muted small">Last update: 22 Dec 2021</span>
                    </div>
                    <div class="col-auto d-none d-md-inline-block">
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#add_contact">Add Contact</button>
                    </div>
                    <div class="col-auto">
                        <div class="dropdown morphing scale-left">
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs tab-card border-bottom-0 pt-2 fs-6" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#contact_all" role="tab"><span>My Contacts</span></a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_groups" role="tab"><i class="fa fa-users"></i><span class="d-none d-sm-inline-block ms-2">My Groups</span></a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_favorites" role="tab"><i class="fa fa-heart"></i><span class="d-none d-md-inline-block ms-2">Favorites</span></a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_merge" role="tab"><i class="fa fa-heart"></i><span class="d-none d-md-inline-block ms-2">Merge & fix</span></a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact_trash" role="tab"><i class="fa fa-trash"></i><span class="d-none d-sm-inline-block ms-2">Trash</span></a></li>
            </ul>
        </div>
        <div class="tab-content mt-4 mb-4">
            <!-- Tab: My Contacts -->
            <div class="tab-pane fade show active" id="contact_all" role="tabpanel">
                <div class="row-title mb-2">
                    <h5 class="fw-light mb-0">My Contacts<span class="fw-bold ms-2">(705)</span></h5>
                    <div>
                        <div class="input-group">
                            <select class="form-select">
                                <option selected>Filter</option>
                                <option value="1">Designer</option>
                                <option value="2">Developer</option>
                                <option value="3">Office</option>
                                <option value="4">Friends</option>
                                <option value="5">Management</option>
                                <option value="6">Colleagues</option>
                            </select>
                            <button class="btn btn-outline-secondary" type="button"><i class="fa fa-upload"></i><span class="d-none d-md-inline-block ms-2">Import</span></button>
                            <button class="btn btn-outline-secondary" type="button"><i class="fa fa-download"></i><span class="d-none d-md-inline-block ms-2">Export</span></button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table id="contact_list" class="table align-middle mb-0 card-table">
                            <thead>
                                <tr>                                       
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Position</th>
                                    <th>Social</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar1.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Marshall Nichols</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+4 1800 12345</td>
                                    <td>Web Designer</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="github"><i class="fa fa-github-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter"><i class="fa fa-twitter-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar2.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Nellie Maxwell</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+91 1800 78963</td>
                                    <td>Colleagues</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="github"><i class="fa fa-github-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter"><i class="fa fa-twitter-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart-o"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar3.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Chris Fox</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+0 1800 25896</td>
                                    <td>Developer</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="linkedin"><i class="fa fa-linkedin-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart-o"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar1.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Jack Bird</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+0 1800 14725</td>
                                    <td>Colleagues</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="github"><i class="fa fa-github-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter"><i class="fa fa-twitter-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart-o"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar1.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Dean Otto</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+1 1800 45698</td>
                                    <td>Web Designer</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="github"><i class="fa fa-github-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter"><i class="fa fa-twitter-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart-o"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar8.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Orlando Lentz</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+0 1800 14725</td>
                                    <td>Friends</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="github"><i class="fa fa-github-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter"><i class="fa fa-twitter-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar6.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Thomas's Joe</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+4 1800 12345</td>
                                    <td>Web Designer</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter"><i class="fa fa-twitter-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart-o"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar7.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Andew Jon</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+91 1800 78963</td>
                                    <td>Colleagues</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="github"><i class="fa fa-github-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter"><i class="fa fa-twitter-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar8.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Chris Fox</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+0 1800 25896</td>
                                    <td>Developer</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="github"><i class="fa fa-github-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="linkedin"><i class="fa fa-linkedin-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart-o"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar9.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Comeren Diaz</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+0 1800 14725</td>
                                    <td>Colleagues</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter"><i class="fa fa-twitter-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart-o"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar10.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Issa Bell</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+1 1800 45698</td>
                                    <td>Web Designer</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="facebook"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="github"><i class="fa fa-github-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="linkedin"><i class="fa fa-linkedin-square"></i></a>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="twitter"><i class="fa fa-twitter-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart-o"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ url('/') }}/assets/images/xs/avatar8.jpg" class="rounded-circle sm avatar" alt="">
                                            <div class="ms-2 mb-0">Bucky Barnes</div>
                                        </div>
                                    </td>
                                    <td>example@info.com</td>
                                    <td>+0 1800 14725</td>
                                    <td>Friends</td>
                                    <td>
                                        <a href="#" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="linkedin"><i class="fa fa-linkedin-square"></i></a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Message"><i class="fa fa-envelope"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <button type="button" class="btn btn-link btn-sm color-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorites"><i class="fa fa-heart"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Tab: Groups -->
            <div class="tab-pane fade" id="contact_groups" role="tabpanel">
                <div class="row-title mb-2">
                    <h5 class="fw-light mb-0">My Groups<span class="fw-bold ms-2">(8)</span></h5>
                    <div>
                        <div class="input-group">
                            <select class="form-select">
                                <option selected>Choose...</option>
                                <option value="1">Designer</option>
                                <option value="2">Developer</option>
                                <option value="3">Office</option>
                                <option value="4">Friends</option>
                                <option value="5">Management</option>
                                <option value="6">Colleagues</option>
                            </select>
                            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#Create_Group">Create Group</button>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-3 row-deck">
                    <div class="col">
                        <div class="card text-center overflow-visible">
                            <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                    <li class="fw-bold">Quick Actions</li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Edit Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Add Contact<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Share Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button type="button" class="btn btn-sm btn-light-primary">Generate Reports</button>
                                </ul>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between flex-column">
                                <div class="me-auto ms-auto py-4">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-0">Out Sourcing</h6>
                                    <small class="text-muted">16 Contacts</small>
                                </div>
                            </div>
                        </div> <!-- .Card End -->
                    </div>
                    <div class="col">
                        <div class="card text-center overflow-visible">
                            <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                    <li class="fw-bold">Quick Actions</li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Edit Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Add Contact<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Share Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button type="button" class="btn btn-sm btn-light-primary">Generate Reports</button>
                                </ul>
                            </div>                                            
                            <div class="card-body d-flex align-items-center justify-content-between flex-column">
                                <div class="me-auto ms-auto py-4">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-0">Management</h6>
                                    <small class="text-muted">11 Contacts</small>
                                </div>
                            </div>
                        </div> <!-- .Card End -->
                    </div>
                    <div class="col">
                        <div class="card text-center overflow-visible">
                            <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                    <li class="fw-bold">Quick Actions</li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Edit Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Add Contact<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Share Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button type="button" class="btn btn-sm btn-light-primary">Generate Reports</button>
                                </ul>
                            </div>                                            
                            <div class="card-body d-flex align-items-center justify-content-between flex-column">
                                <div class="me-auto ms-auto py-4">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar10.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-0">Sold Properties</h6>
                                    <small class="text-muted">106 Contacts</small>
                                </div>
                            </div>
                        </div> <!-- .Card End -->
                    </div>
                    <div class="col">
                        <div class="card text-center overflow-visible">
                            <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                    <li class="fw-bold">Quick Actions</li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Edit Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Add Contact<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Share Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button type="button" class="btn btn-sm btn-light-primary">Generate Reports</button>
                                </ul>
                            </div>                                            
                            <div class="card-body d-flex align-items-center justify-content-between flex-column">
                                <div class="me-auto ms-auto py-4">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <div class="avatar rounded-circle m-1 lift d-inline-flex no-thumbnail">RH</div>
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-0">San Fransisco</h6>
                                    <small class="text-muted">126 Contacts</small>
                                </div>
                            </div>
                        </div> <!-- .Card End -->
                    </div>
                    <div class="col">
                        <div class="card text-center overflow-visible">
                            <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                    <li class="fw-bold">Quick Actions</li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Edit Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Add Contact<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Share Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button type="button" class="btn btn-sm btn-light-primary">Generate Reports</button>
                                </ul>
                            </div>                                            
                            <div class="card-body d-flex align-items-center justify-content-between flex-column">
                                <div class="me-auto ms-auto py-4">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-0">Los Angeles</h6>
                                    <small class="text-muted">84 Contacts</small>
                                </div>
                            </div>
                        </div> <!-- .Card End -->
                    </div>
                    <div class="col">
                        <div class="card text-center overflow-visible">
                            <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                    <li class="fw-bold">Quick Actions</li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Edit Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Add Contact<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Share Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button type="button" class="btn btn-sm btn-light-primary">Generate Reports</button>
                                </ul>
                            </div>                                            
                            <div class="card-body d-flex align-items-center justify-content-between flex-column">
                                <div class="me-auto ms-auto py-4">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar10.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-0">Colleagues</h6>
                                    <small class="text-muted">245 Contacts</small>
                                </div>
                            </div>
                        </div> <!-- .Card End -->
                    </div>
                    <div class="col">
                        <div class="card text-center overflow-visible">
                            <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                    <li class="fw-bold">Quick Actions</li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Edit Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Add Contact<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Share Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button type="button" class="btn btn-sm btn-light-primary">Generate Reports</button>
                                </ul>
                            </div>                                            
                            <div class="card-body d-flex align-items-center justify-content-between flex-column">
                                <div class="me-auto ms-auto py-4">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <div class="avatar rounded-circle m-1 lift d-inline-flex no-thumbnail">RH</div>
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-0">San Fransisco</h6>
                                    <small class="text-muted">126 Contacts</small>
                                </div>
                            </div>
                        </div> <!-- .Card End -->
                    </div>
                    <div class="col">
                        <div class="card text-center overflow-visible">
                            <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                                <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                    <li class="fw-bold">Quick Actions</li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Edit Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Add Contact<i class="fa fa-arrow-right"></i></a></li>
                                    <li><a class="dropdown-item" href="#">Share Group<i class="fa fa-arrow-right"></i></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><button type="button" class="btn btn-sm btn-light-primary">Generate Reports</button>
                                </ul>
                            </div>                                            
                            <div class="card-body d-flex align-items-center justify-content-between flex-column">
                                <div class="me-auto ms-auto py-4">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                    <img class="avatar rounded-circle m-1 lift" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-placement="top" title="Avatar Name" alt="">
                                </div>
                                <div class="mt-2">
                                    <h6 class="mb-0">Los Angeles</h6>
                                    <small class="text-muted">84 Contacts</small>
                                </div>
                            </div>
                        </div> <!-- .Card End -->
                    </div>
                </div> <!-- Row end  -->
                <!-- offcanvas: create Groups -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Create_Group">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title">Create new Group</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body custom_scroll">
                        <p><strong>Note: </strong>It is a long established fact that a reader will be distracted by the readable.</p>
                        <div class="card p-3 mb-2">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Group Name">
                                <label>Group Name</label>
                            </div>
                            <div>
                                <label class="me-3">Added :</label>
                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                                <a href="#" title=""><img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                            </div>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary text-uppercase" type="button">Create new Group</button>
                        </div>
                        <h6 class="card-title mt-4">Contact List</h6>
                        <ul class="list-unstyled mb-0 custom_scroll" style="height: 400px;">
                            <li class="card p-3 my-1 flex-row">
                                <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0">Chris Fox</div>
                                    <span class="text-muted small">21 mutual connections</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="btn mx-1 btn-light-primary">Add</button>
                                </div>
                            </li>
                            <li class="card p-3 my-1 flex-row">
                                <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0">Marshall Nichols</div>
                                    <span class="text-muted small">5 mutual connections</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="btn mx-1 btn-light-success">Added</button>
                                </div>
                            </li>
                            <li class="card p-3 my-1 flex-row">
                                <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0">Orlando Lentz</div>
                                    <span class="text-muted small">9 mutual connections</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="btn mx-1 btn-light-primary">Add</button>
                                </div>
                            </li>
                            <li class="card p-3 my-1 flex-row">
                                <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0">Alexander</div>
                                    <span class="text-muted small">18 mutual connections</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="btn mx-1 btn-light-primary">Add</button>
                                </div>
                            </li>
                            <li class="card p-3 my-1 flex-row">
                                <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar8.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0">Orlando Lentz</div>
                                    <span class="text-muted small">11 mutual connections</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="btn mx-1 btn-light-primary">Add</button>
                                </div>
                            </li>
                            <li class="card p-3 my-1 flex-row">
                                <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0">Marshall Nichols</div>
                                    <span class="text-muted small">5 mutual connections</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="btn mx-1 btn-light-success">Added</button>
                                </div>
                            </li>
                            <li class="card p-3 my-1 flex-row">
                                <img class="avatar rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar6.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0">Orlando Lentz</div>
                                    <span class="text-muted small">9 mutual connections</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="btn mx-1 btn-light-success">Added</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Tab: Favorites -->
            <div class="tab-pane fade" id="contact_favorites" role="tabpanel">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-light mb-0">Favorites<span class="fw-bold ms-2">(5)</span></h5>
                </div>
                <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 row-deck">
                    <div class="col">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="circle">
                                    <img class="avatar xl rounded-circle img-thumbnail" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                                </div>
                                <h6 class="mt-3 mb-0">Michelle Green</h6>
                                <span>jason-porter@info.com</span>
                                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                <button class="btn btn-outline-secondary btn-sm">Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="circle">
                                    <img class="avatar xl rounded-circle img-thumbnail" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                                </div>
                                <h6 class="mt-3 mb-0">Andew Jon</h6>
                                <span>jason-porter@info.com</span>
                                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                <button class="btn btn-outline-secondary btn-sm">Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="circle">
                                    <img class="avatar xl rounded-circle img-thumbnail" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                                </div>
                                <h6 class="mt-3 mb-0">Orlando Lentz</h6>
                                <span>jason-porter@info.com</span>
                                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                <button class="btn btn-outline-secondary btn-sm">Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="circle">
                                    <img class="avatar xl rounded-circle img-thumbnail" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                                </div>
                                <h6 class="mt-3 mb-0">Marshall Nichols</h6>
                                <span>jason-porter@info.com</span>
                                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                <button class="btn btn-outline-secondary btn-sm">Message</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="circle">
                                    <img class="avatar xl rounded-circle img-thumbnail" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="">
                                </div>
                                <h6 class="mt-3 mb-0">Comeren Diaz</h6>
                                <span>jason-porter@info.com</span>
                                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                <button class="btn btn-outline-secondary btn-sm">Follow</button>
                                <button class="btn btn-outline-secondary btn-sm">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab: Merge & fix -->
            <div class="tab-pane fade" id="contact_merge" role="tabpanel">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>Merge & fix</h5>
                </div>
                <div class="card">
                    <div class="card-body text-center p-5">
                        <img src="{{ url('/') }}/assets/images/no-data.svg" class="w120" alt="No Data">
                        <div class="mt-4 mb-3">
                            <span class="text-muted">No data to show</span>
                        </div>
                        <button type="button" class="btn btn-white border lift">Get Started</button>
                        <button type="button" class="btn btn-primary border lift">Back to Home</button>
                    </div>
                </div>
            </div>
            <!-- Tab: Delete -->
            <div class="tab-pane fade" id="contact_trash" role="tabpanel">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>Delete contact</h5>
                </div>
                <div class="card">
                    <div class="card-body text-center p-5">
                        <img src="{{ url('/') }}/assets/images/no-data.svg" class="w120" alt="No Data">
                        <div class="mt-4 mb-3">
                            <span class="text-muted">No data to show</span>
                        </div>
                        <button type="button" class="btn btn-white border lift">Get Started</button>
                        <button type="button" class="btn btn-primary border lift">Back to Home</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- offcanvas: Profile Edit -->
        <div class="modal fade" id="add_contact" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add new Conatct</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-6">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Mobile</label>
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Mobile">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Home</a></li>
                                    <li><a class="dropdown-item" href="#">Work</a></li>
                                    <li><a class="dropdown-item" href="#">Mobile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Row end  -->
<script>
    // project data table
    $('#contact_list')
    .addClass( 'nowrap' )
    .dataTable( {
        responsive: true,
        searching: false,
        paging: false,
        ordering: true,
        info: false,
    });

</script>
@endsection
