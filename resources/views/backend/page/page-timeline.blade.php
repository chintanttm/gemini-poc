@extends('backend.layouts.app')

@section('title', __('Crafted pages'))

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card p-md-4 p-2">
            <div class="timeline-item ti-danger ms-2">
                <div class="d-flex">
                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                    <div class="flex-fill ms-3">
                        <div class="mb-1">Gerald Vaughn changed the status to QA on <strong>MA-86 - Retargeting Ads</strong></div>
                        <span class="d-flex text-muted mb-3 small">New Dashboard Design - 9:24PM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                        <div class="card p-3">
                            I’ve prepared all sizes for you. Can you take a look tonight so we can prepare my final invoice?
                        </div>
                    </div>
                </div>
            </div> <!-- timeline item end  -->
            <div class="timeline-item ti-info ms-2">
                <div class="d-flex">
                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                    <div class="flex-fill ms-3">
                        <div class="mb-1">Gerald Vaughn commented on <strong>DA-459 - Mediation: Demand Source Logo Size</strong></div>
                        <span class="d-flex text-muted mb-3 small">Portfolio Updates for Jason Carroll - 7:12PM by <a class="ms-2" href="#" title=""><strong>Orlando</strong></a> </span>
                    </div>
                </div>
            </div> <!-- timeline item end  -->
            <div class="timeline-item ti-success ms-2">
                <div class="d-flex">
                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                    <div class="flex-fill ms-3">
                        <div class="mb-1">Gerald Vaughn changed the status to QA on <strong>MA-45 - Finish Prototype</strong></div>
                        <span class="d-flex text-muted mb-3 small">New Dashboard Design - 11:30AM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                    </div>
                </div>
            </div> <!-- timeline item end  -->
            <div class="timeline-item ti-primary ms-2">
                <div class="d-flex">
                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                    <div class="flex-fill ms-3">
                        <div class="mb-1">Create new development team for <strong>MA-86 -  stocks for our Instagram channel</strong></div>
                        <span class="d-flex text-muted mb-3 small">Marketing Templates & Strategy - 7:58AM by <a class="ms-2" href="#" title=""><strong>You</strong></a> </span>
                        <div class="card p-3">
                            What do you think about these? Should I continue in this style?
                        </div>
                        <div class="project-members mt-3">
                            <label class="me-3">Team :</label>
                            <a href="#" title=""><img class="avatar xs rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar xs rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar xs rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar7.jpg" alt="friend"> </a>
                            <a href="#" title=""><img class="avatar xs rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar9.jpg" alt="friend"> </a>
                        </div>
                    </div>
                </div>
            </div> <!-- timeline item end  -->
            <div class="timeline-item ti-warning ms-2">
                <div class="d-flex">
                    <img class="avatar sm rounded-circle" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                    <div class="flex-fill ms-3">
                        <div class="mb-1">update new source code on GitHub <strong>MA-78 - Retargeting React Webapp</strong></div>
                        <span class="d-flex text-muted mb-3 small">New Dashboard Design - 9:24PM by <a class="ms-2" href="#" title=""><strong>Chris</strong></a> </span>
                        <div class="alert alert-success rounded">
                            I’ve prepared all sizes for you. Can you take a look tonight so we can prepare my final invoice?
                        </div>
                    </div>
                </div>
            </div> <!-- timeline item end  -->
        </div>
    </div>
</div>
@endsection