
@foreach($animeLists as $animeList)
<div class="modal fade right" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
            <h4 class="modal-title w-100 font-weight-bold">Anime Information</h4>
            </p>
            <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <img src="{{ asset('images/close-circle-svgrepo-com.svg') }}" alt="" class="img-fluid" style="width:40px;">
        </div>
        
            
        </div>
    <form method="post" action="{{route('saveAnime')}}" enctype="multipart/form-data">
        <!--Body-->
        {{csrf_field()}}
        <div class="modal-body">

            <div class="row">
            <!-- <div class="col-3">
                <p></p>
                <p class="text-center"><i class="fas fa-shopping-cart fa-4x"></i></p>
            </div>

            <div class="col-9">
                
                    
                    title<input type="text" name="title" value="" require>
                    genre<input type="text" name="genre"value="">
                    details<input type="text" name="details"value="">
                    <input type="file" class="" name="display_photo">
                    <img src="" alt="" class="img-fluid">
                
            </div> -->
            <div class="col">
                <div class="input-group">
                    <input required="" type="text" name="title" value="" autocomplete="off" class="input">
                    <label class="user-label">Title</label>
                </div>
            </div>  
            <div class="col">
                <div class="input-group">
                    <input required="" type="text" name="genre" value="" autocomplete="off" class="input">
                    <label class="user-label">Genre</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <input placeholder="Optional" type="text" name="details" value="" autocomplete="off" class="input">
                    <label class="user-label">Details</label>
                </div>
            </div>  
            <div class="col">
                <!-- upload file -->

                <label for="file-input" class="drop-container">
                    <span class="drop-title">Drop files here</span>
                    or
                    <input type="file" accept="image/*" name="display_photo"  id="file-input" autocomplete="on" class="input">
                </label>
            </div>
            
            </div>
        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
            <a type="button" class="btn btn-outline-info waves-effect" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
            <button type="submit" class="btn btn-info">Add Anime</button>
            
        </div>
        </div>
    </form>
        <!--/.Content-->
    </div>
</div>

@endforeach