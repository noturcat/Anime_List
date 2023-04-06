
@foreach($animeLists as $animeList)
<!-- <div class="modal fade" id="deleteModal{{$animeList->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-base rounded-1 border-0">
            <div class="modal-body meetings">
                <div class="row mb-2">
                    <div class="col-8 d-flex">
                        <h5 class="modal-title mb-3" id="selectEmployees">
                        <img src="/assets/image/trash.svg" alt="" class=" me-2">
                            Delete Record
                        </h5>
                    </div>
                    <div class="col-4">
                        <div class="float-end">
                            <a data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer;">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.5C10.8181 21.5 9.64778 21.2672 8.55585 20.8149C7.46392 20.3626 6.47177 19.6997 5.63604 18.864C4.80031 18.0282 4.13738 17.0361 3.68508 15.9442C3.23279 14.8522 3 13.6819 3 12.5C3 11.3181 3.23279 10.1478 3.68508 9.05585C4.13738 7.96392 4.80031 6.97177 5.63604 6.13604C6.47177 5.30031 7.46392 4.63738 8.55585 4.18508C9.64778 3.73279 10.8181 3.5 12 3.5C13.1819 3.5 14.3522 3.73279 15.4442 4.18508C16.5361 4.63738 17.5282 5.30031 18.364 6.13604C19.1997 6.97177 19.8626 7.96392 20.3149 9.05585C20.7672 10.1478 21 11.3181 21 12.5C21 13.6819 20.7672 14.8522 20.3149 15.9442C19.8626 17.0361 19.1997 18.0282 18.364 18.864C17.5282 19.6997 16.5361 20.3626 15.4441 20.8149C14.3522 21.2672 13.1819 21.5 12 21.5L12 21.5Z" stroke="#FF7B7B" stroke-linecap="round" />
                                    <path d="M9 9.5L15 15.5" stroke="#FF7B7B" stroke-linecap="round" />
                                    <path d="M15 9.5L9 15.5" stroke="#FF7B7B" stroke-linecap="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2 mb-3">
                        <h5 class="text-18" style="color: #828282;">ARE YOU SURE?</h5>
                        <p class="cancellation-reason mt-2 text-dark">Do you really want to delete this record? This action cannot be undone.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="float-end">
                            <a href="/docs-portal/delete/{{$animeList->id}}">
                                <button type="button" class="btn btn-delete-meeting-modal mt-4 float-end rounded-0 text-white" style="background-color:#FF7B7B;">
                                    <span class="me-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 15L10 12" stroke="white" stroke-width="2" stroke-linecap="round" />
                                            <path d="M14 15L14 12" stroke="white" stroke-width="2" stroke-linecap="round" />
                                            <path d="M18.1522 8.23463L19.0761 8.61732L18.1522 8.23463ZM5.84776 8.23463L4.92388 8.61732L5.84776 8.23463ZM6.58579 19.4142L5.87868 20.1213L6.58579 19.4142ZM17.4142 19.4142L18.1213 20.1213L17.4142 19.4142ZM3 8H21V6H3V8ZM14 19H10V21H14V19ZM7 16V10H5V16H7ZM17 10V16H19V10H17ZM21 6C20.5477 6 20.1585 5.99946 19.8376 6.02135C19.5078 6.04385 19.1779 6.09336 18.8519 6.22836L19.6173 8.07612C19.6589 8.05888 19.7458 8.03227 19.9738 8.01671C20.2107 8.00054 20.5204 8 21 8V6ZM19 10C19 9.52038 19.0005 9.21074 19.0167 8.97376C19.0323 8.74576 19.0589 8.65893 19.0761 8.61732L17.2284 7.85195C17.0934 8.17788 17.0439 8.50779 17.0213 8.83762C16.9995 9.15846 17 9.54774 17 10H19ZM18.8519 6.22836C18.1169 6.53284 17.5328 7.11687 17.2284 7.85195L19.0761 8.61732C19.1776 8.37229 19.3723 8.17761 19.6173 8.07612L18.8519 6.22836ZM7 10C7 9.54774 7.00054 9.15846 6.97865 8.83762C6.95615 8.50779 6.90664 8.17788 6.77164 7.85195L4.92388 8.61732C4.94112 8.65893 4.96773 8.74576 4.98329 8.97376C4.99946 9.21074 5 9.52038 5 10H7ZM3 8C3.47962 8 3.78926 8.00054 4.02624 8.01671C4.25424 8.03227 4.34107 8.05888 4.38268 8.07612L5.14805 6.22836C4.82212 6.09336 4.49221 6.04385 4.16238 6.02135C3.84154 5.99946 3.45226 6 3 6V8ZM6.77164 7.85195C6.46716 7.11687 5.88313 6.53284 5.14805 6.22836L4.38268 8.07612C4.62771 8.17761 4.82239 8.37229 4.92388 8.61732L6.77164 7.85195ZM10 19C9.02892 19 8.40121 18.9979 7.9387 18.9357C7.50496 18.8774 7.36902 18.7832 7.29289 18.7071L5.87868 20.1213C6.38834 20.631 7.01669 20.8297 7.67221 20.9179C8.29896 21.0021 9.08546 21 10 21V19ZM5 16C5 16.9145 4.99788 17.701 5.08214 18.3278C5.17027 18.9833 5.36902 19.6117 5.87868 20.1213L7.29289 18.7071C7.21677 18.631 7.12262 18.495 7.06431 18.0613C7.00212 17.5988 7 16.9711 7 16H5ZM14 21C14.9145 21 15.701 21.0021 16.3278 20.9179C16.9833 20.8297 17.6117 20.631 18.1213 20.1213L16.7071 18.7071C16.631 18.7832 16.495 18.8774 16.0613 18.9357C15.5988 18.9979 14.9711 19 14 19V21ZM17 16C17 16.9711 16.9979 17.5988 16.9357 18.0613C16.8774 18.495 16.7832 18.631 16.7071 18.7071L18.1213 20.1213C18.631 19.6117 18.8297 18.9833 18.9179 18.3278C19.0021 17.701 19 16.9145 19 16H17Z" fill="white" />
                                            <path d="M10.0681 3.37059C10.1821 3.26427 10.4332 3.17033 10.7825 3.10332C11.1318 3.03632 11.5597 3 12 3C12.4403 3 12.8682 3.03632 13.2175 3.10332C13.5668 3.17033 13.8179 3.26427 13.9319 3.37059" stroke="white" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </span><a href="{{url('delete/'.$animeList->id)}}">delete</a>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--Modal: modalConfirmDelete-->
<div class="modal fade delete-modal" id="deleteModal{{$animeList->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
        <!--Header-->
        <div class="modal-header d-flex justify-content-center">
            <p class="heading"><h4>Are you sure you want to Delete?</h4></p>
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
            <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">No</a>
            <a href="{{url('delete/'.$animeList->id)}}"class="btn  btn-outline-danger">Yes</a>
        </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalConfirmDelete-->
@endforeach