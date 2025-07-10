@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">X-editable</h6>
                            </div>
                            <div class="card-body">
                                <p class="fs-5">This library allows you to create editable elements on your page. It can be used with any engine (bootstrap, jquery-ui, jquery only) and includes both popup and inline modes. <a href="https://vitalets.github.io/x-editable/demo-bs3.html" rel="nofollow">Live Demo</a></p>
                            </div>
                            <div class="card-body pt-0">
<pre class=" language-html m-0" data-lang="html"><code class=" language-html">
</code></pre>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<div class="row g-2 mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="editable-form" class="table table-striped editable-form">
                    <tr>         
                        <td width="35%">Simple text field</td>
                        <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click">superuser</a></td>
                    </tr>
                    <tr>         
                        <td>Empty text field, required</td>
                        <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname" class="editable editable-click editable-empty">Empty</a></td>
                    </tr>  
                    <tr>         
                        <td>Select, local array, custom display</td>
                        <td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex" class="editable editable-click" style="color: gray;">not selected</a></td>
                    </tr>
                    <tr>         
                        <td>Select, remote array, no buttons</td>
                        <td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group" class="editable editable-click">Admin</a></td>
                    </tr> 
                    <tr>         
                        <td>Select, error while loading</td>
                        <td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status" class="editable editable-click">Active</a></td>
                    </tr>
                    <tr>
                        <td>Datepicker</td>
                        <td><a href="#" id="vacation" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-placement="right" data-title="When you want vacation to start?" class="editable editable-click">25.02.2013</a></td>
                    </tr>
                    <tr>
                        <td>Combodate (date)</td>
                        <td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">15/05/1984</a></td>
                    </tr>
                    <tr>
                        <td>Combodate (datetime)</td>
                        <td><a href="#" id="event" data-type="combodate" data-template="D MMM YYYY HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-title="Setup event date and time" class="editable editable-click editable-empty">Empty</a></td>
                    </tr>
                    <tr>
                        <td>Bootstrap Datetimepicker</td>
                        <td><a href="#" id="meeting_start" data-type="date" data-pk="1" data-url="/post" data-placement="right" title="Set date &amp; time" class="editable editable-click">15/03/2013 12:45</a></td>
                    </tr>
                    <tr>
                        <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                        <td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments" class="editable editable-pre-wrapped editable-click">awesome user!</a></td>
                    </tr>
                    <tr>         
                        <td>Bootstrap 2 typeahead</td>
                        <td><a href="#" id="state" data-type="typeahead" data-pk="1" data-placement="right" data-title="Start typing State.." class="editable editable-click">California</a></td>
                    </tr>                               
                    <tr>
                        <td>Checklist</td>
                        <td><a href="#" id="fruits" data-type="checklist" data-value="2,3" data-title="Select fruits" class="editable editable-click">peach<br>apple</a></td>
                    </tr>
                    <tr>
                        <td>Select2 (tags mode)</td>
                        <td><a href="#" id="tags" data-type="select2" data-pk="1" data-title="Enter tags" class="editable editable-click">html, javascript</a></td>
                    </tr>
                    <tr>
                        <td>Select2 (dropdown mode)</td>
                        <td><a href="#" id="country" data-type="select2" data-pk="1" data-value="BS" data-title="Select country" class="editable editable-click">Bahamas</a></td>
                    </tr>
                    <tr>
                        <td>Custom input, several fields</td>
                        <td><a href="#" id="address" data-type="address" data-pk="1" data-title="Please, fill address" class="editable editable-click"><b>Moscow</b>, Lenina st., bld. 12</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div>
<script>
    $(function() {
        if ($('#editable-form').length) {
            $.fn.editable.defaults.mode = 'inline';
            $.fn.editableform.buttons =
                '<button type="submit" class="btn btn-primary btn-sm editable-submit">' +
                '<i class="fa fa-fw fa-check"></i>' +
                '</button>' +
                '<button type="button" class="btn btn-warning btn-sm editable-cancel">' +
                '<i class="fa fa-fw fa-times"></i>' +
                '</button>';
            $('#username').editable({
                type: 'text',
                pk: 1,
                name: 'username',
                title: 'Enter username'
            });

            $('#firstname').editable({
                validate: function(value) {
                    if ($.trim(value) === '') return 'This field is required';
                }
            });

            $('#sex').editable({
                source: [{
                    value: 1,
                    text: 'Male'
                },{
                    value: 2,
                    text: 'Female'
                }]
            });

            $('#status').editable();

            $('#group').editable({
                showbuttons: false
            });

            $('#vacation').editable({
                datepicker: {
                    todayBtn: 'linked'
                }
            });

            $('#dob').editable();

            $('#event').editable({
                placement: 'right',
                combodate: {
                    firstItem: 'name'
                }
            });

            $('#meeting_start').editable({
                format: 'yyyy-mm-dd hh:ii',
                viewformat: 'dd/mm/yyyy hh:ii',
                validate: function(v) {
                    if (v && v.getDate() === 10) return 'Day cant be 10!';
                },
                datetimepicker: {
                    todayBtn: 'linked',
                    weekStart: 1
                }
            });

            $('#comments').editable({
                showbuttons: 'bottom'
            });

            $('#note').editable();
            $('#pencil').on("click", function(e) {
                e.stopPropagation();
                e.preventDefault();
                $('#note').editable('toggle');
            });

            $('#state').editable({
                source: ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"]
            });

            $('#state2').editable({
                value: 'California',
                typeahead: {
                    name: 'state',
                    local: ["Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Dakota", "North Carolina", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"]
                }
            });

            $('#fruits').editable({
                pk: 1,
                limit: 3,
                source: [{
                        value: 1,
                        text: 'banana'
                    },
                    {
                        value: 2,
                        text: 'peach'
                    },
                    {
                        value: 3,
                        text: 'apple'
                    },
                    {
                        value: 4,
                        text: 'watermelon'
                    },
                    {
                        value: 5,
                        text: 'orange'
                    }
                ]
            });

            $('#tags').editable({
                inputclass: 'input-large',
                select2: {
                    tags: ['html', 'javascript', 'css', 'ajax'],
                    tokenSeparators: [",", " "]
                }
            });

            $('#address').editable({
                url: '/post',
                value: {
                    city: "Moscow",
                    street: "Lenina",
                    building: "12"
                },
                validate: function(value) {
                    if (value.city === '') return 'city is required!';
                },
                display: function(value) {
                    if (!value) {
                        $(this).empty();
                        return;
                    }
                    var html = '<b>' + $('<div>').text(value.city).html() + '</b>, ' + $('<div>').text(value.street).html() + ' st., bld. ' + $('<div>').text(value.building).html();
                    $(this).html(html);
                }
            });
            

            $('#user .editable').on('hidden', function(e, reason) {
                if (reason === 'save' || reason === 'nochange') {
                    var $next = $(this).closest('tr').next().find('.editable');
                    if ($('#autoopen').is(':checked')) {
                        setTimeout(function() {
                            $next.editable('show');
                        }, 300);
                    } else {
                        $next.focus();
                    }
                }
            });
        }
    });
</script>
@endsection