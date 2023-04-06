@foreach($animeLists as $animeList)
<div class="modal fade delete-modal" id="markModal{{$animeList->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
        <!--Header-->
        <div class="modal-header d-flex justify-content-center">
            <p class="heading"><h4> <?php if($animeList->is_watched == 0)echo 'Mark Complete?'; else echo 'Mark as Incomplete?' ?></h4></p>
            <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <img src="{{ asset('images/close-circle-svgrepo-com.svg') }}" alt="" class="img-fluid" style="width:40px;">
            </div>
        </div>

        <!--Body-->
        <div class="modal-body">
            <i class="fas fa-spinner fa-spin"><img src="{{asset("images/".$animeList->display_photo)}}" alt="" class="img-fluid"></i>
        </div>

        <!--Footer-->
        <div class="modal-footer flex-center">
            <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">No</a>
            <a href="{{url('mark/'.$animeList->id)}}"class="btn  btn btn-success">Yes</a>
        </div>
        </div>
        <!--/.Content-->
    </div>
</div>
@endforeach