<div class="list-group col-lg-12 nopadding " style="margin-bottom: 3px !important;">
    <a href="{{route('tasks')}}/{{$notification->data['taskFollower']['task_id']}}"
       class="list-group-item list-group-item-action flex-column align-items-start col-lg-12 ">
        <div class="d-flex w-100 justify-content-between">
            <strong> {{$notification->data['follower']['name']}}</strong>
            se upisao na zadatak na Vašem kolegiju.
            <br>
            <small>{{Carbon\Carbon::parse($notification->created_at)->diffForHumans()}}</small>

        </div>
    </a>

</div>
