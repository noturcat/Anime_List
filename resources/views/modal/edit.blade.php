<!-- Modal: modalAbandonedCart-->
@foreach($animeLists as $animeList)
<div class="edit-modal modal fade right " id="editModal{{$animeList->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info modal-m" role="document">
        <!--Content-->
        <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
            <p class="heading">
                <h4>Edit Anime Information</h4>
                <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <img src="{{ asset('images/close-circle-svgrepo-com.svg') }}" alt="" class="img-fluid" style="width:40px;">
                </div>
            </p>

            
        </div>
    <form method="post" action="{{url('update/'.$animeList->id)}}" enctype="multipart/form-data">
        <!--Body-->
        <div class="modal-body ">

            <div class="row">
            {{csrf_field()}}
            @method('PUT')
            <!-- title<input type="text" name="title" value="{{$animeList->title}}" require>
            genre<input type="text" name="genre"value="{{$animeList->genre}}">
            details<input type="text" name="details"value="{{$animeList->details}}">
            <input type="file" class="" name="display_photo">
            <img src="" alt="" class="img-fluid"> -->

            <!-- <div class="input-wrapper">
                <input type="text" placeholder="Type here..." name="text" class="input">
            </div> -->
            <div class="col">
                <div class="input-group">
                    <input required="" type="text" name="title" value="{{$animeList->title}}" autocomplete="off" class="input">
                    <label class="user-label">Title</label>
                </div>
            </div>  
            <div class="col">
                <div class="input-group">
                    <input required="" type="text" name="genre"value="{{$animeList->genre}}" autocomplete="off" class="input">
                    <label class="user-label">Genre</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <input placeholder="Optional" type="text" name="details"value="{{$animeList->details}}" autocomplete="off" class="input">
                    <label class="user-label">Details</label>
                </div>
            </div>  
            <div class="col">
                <label for="file-input" class="drop-container">
                    <span class="drop-title">Drop files here</span>
                    or
                    <input type="file" accept="image/*" name="display_photo" id="file-input" autocomplete="off" class="input">
                </label>
            </div>
            <div class="col-12 d-flex justify-content-center mt-2">
                <img src="{{asset("images/".$animeList->display_photo)}}" alt="" class="img-fluid">
            </div>
            
            </div>
        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
            <a type="button" class="btn btn-outline-info waves-effect" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
            <button type="submit" class="btn btn-info">Edit Anime</button>
            
        </div>
        </div>
    </form>
        <!--/.Content-->
    </div>
</div>
<!-- Modal: modalAbandonedCart-->
@endforeach