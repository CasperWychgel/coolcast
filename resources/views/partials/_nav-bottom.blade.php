<div class="d-flex justify-content-center fixed-bottom p-2">
    <a href="{{route('add')}}" class="btn-circle-l btn-info align-self-center d-flex">
        <img src="/img/add.png" alt="" width="20" height="20" class="align-self-center center ml-4">
    </a>
{{--
    <button onclick="showedit()" class="btn-circle btn-danger ml-2 align-self-center d-flex"><img src="/img/edit.png" alt="" width="20" height="20" class="align-self-center center ml-3"></button>
--}}
</div>

<div class="deleteButton d-flex justify-content-center fixed-bottom p-2">
    <button form="deleteform" formaction="{{ route('deleteall') }}" type="submit" class="btn-circle-l btn-danger align-self-center d-flex">
        <img src="/img/delete.png" alt="" width="20" height="20" class="align-self-center center ml-4">
    </button>
</div>
