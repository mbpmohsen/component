@extends('welcome')
@section('content')
    <div class="page-content">
        <div class="form-v4-content">
            @include('layouts.form-left')
            <form class="form-detail" action="#" method="post" id="myform">
                @csrf
                <h2>REGISTER FORM</h2>
                <x-input name="test0" type="text" placeHolder="this is a test" class="form-control" inputTitle="Inpute title"/>
                <x-select name="test1" selectType="select-country" class="form-control selectpicker" selectTitle="Select title" dataShowSubtext="true" dataLiveSearch="true"/>
                <div class=" pt-2">
                    <label for="your_email">Submit</label>
                    <x-tool-tip toolTipType="button" dataPlacement="right" title="this is a button" toolTipName="Tool tip sample" class="btn btn-secondary btn-lg btn-block mytooltip"/>
                    <x-button buttonType="submit" class="btn btn-primary btn-lg btn-block" buttonName="Button sample" />
                </div>
            </form>
        </div>
    </div>
@endsection
