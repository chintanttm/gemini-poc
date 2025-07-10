@extends('backend.layouts.documentation-app')

@section('title', __('Documentation'))

@section('content')
<div class="row g-3 clearfix row-deck">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header py-3 bg-transparent border-bottom-0">
                <h6 class="card-title mb-0">Basic example</h6>
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-12">
                        <label for="TextInput" class="form-label">Text Input</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="TextInputD" class="form-label">Text Input Disabled</label>
                        <input type="text" class="form-control" disabled>
                    </div>
                    <div class="col-12">
                        <label for="PasswordInput" class="form-label">Password Input</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="PasswordInputD" class="form-label">Password Input Disabled</label>
                        <input type="password" class="form-control" disabled>
                    </div>
                    <div class="col-12">
                        <label for="textareaInput" class="form-label">Textarea Input</label>
                        <textarea name="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="textareaInputD" class="form-label">Textarea Input Disabled</label>
                        <textarea name="" cols="30" rows="5" class="form-control" disabled></textarea>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                            <label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                            <label class="form-check-label" for="flexCheckCheckedDisabled">Disabled checked checkbox</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
                            <label class="form-check-label" for="flexRadioDisabled">Disabled radio</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>
                            <label class="form-check-label" for="flexRadioCheckedDisabled">Disabled checked radio</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header py-3 bg-transparent border-bottom-0">
                <h6 class="card-title mb-0">Input group</h6>
            </div>
            <div class="card-body">
                <form class="row g-3 clearfix">
                    <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text">@example.com</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-text">https://example.com/users/</span>
                            <input type="text" class="form-control" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-text">With textarea</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with radio button">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header py-3 bg-transparent border-bottom-0">
                <h6 class="card-title mb-0">Different Sizing</h6>
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-12">
                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                    </div>
                    <div class="col-12">
                        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                    </div>
                    <div class="col-12">
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                    </div>
                    <div class="col-12">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header py-3 bg-transparent border-bottom-0">
                <h6 class="card-title mb-0">Input Styles</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="roundedInput" class="form-label">Rounded Input</label>
                        <input type="text" class="form-control rounded-pill">
                    </div>
                    <div class="mb-3">
                        <label for="DefaultInput" class="form-label">Default Input</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="SquareInput" class="form-label">Square Input</label>
                        <input type="text" class="form-control rounded-0">
                    </div>
                </form>
                <div class="card-header ps-0 pb-2 bg-transparent border-bottom-0">
                    <h6 class="card-title mb-0"><strong>Floating Label</strong></h6>
                </div>
                <form>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" placeholder="name@example.com">
                        <label>Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" placeholder="Password">
                        <label>Password</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header py-3 bg-transparent border-bottom-0">
                <h6 class="card-title mb-0">Horizontal Input</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="row mb-3">
                        <label for="FirstName" class="col-sm-4 col-form-label">First Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="FirstName">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="LastName" class="col-sm-4 col-form-label">Last Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="LastName">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header py-3 bg-transparent border-bottom-0">
                <h6 class="card-title mb-0">Input File</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- .row end -->

<!-- start: navigation btn -->
<div class="row g-3 mt-3">
    @include('backend.documentation.next-previous-url')
</div>
@endsection