<div class="form-row pt-2">
    <label for="your_email">{{$selectTitle}}</label>
    <select name="{{$name}}"  id="{{$selectType}}"  {{$attributes}} data-show-subtext="{{$dataShowSubtext}}" data-live-search="{{$dataLiveSearch}}" >
        <option value="" disabled selected hidden>Please Choose...</option>
        @foreach($list as $item)
        <option value="">{{$item}}</option>
        @endforeach
    </select>
</div>
