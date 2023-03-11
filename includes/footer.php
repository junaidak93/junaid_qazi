<!-- Modal -->
<div class="modal fade" id="social" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="socialLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center mb-2">
          <h4>Share</h4>
        </div>
        <div class="d-flex justify-content-between">
          <a href="#">
            <img class="mr-3" src="<?php echo $basesurl; ?>images/fbb.svg" width="60" alt="logo">
          </a>
          <a href="#">
            <img class="mr-3" src="<?php echo $basesurl; ?>images/instaa.svg" width="60" alt="logo">
          </a>
          <a href="#">
            <img class="" src="<?php echo $basesurl; ?>images/twiterr.svg" width="60" alt="logo">
          </a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="congratulations" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="congratulationsLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center mb-2">
          <img class="mb-4" src="<?php echo $basesurl; ?>images/smile.svg" width="100" alt="logo">
          <h4 class="mb-0">Congratulations</h4>
          <p class="mb-4">Payment has been done</p>
          <a href="#" class="btn btn-primary w-100">Go Back</a>
        </div>

      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="invite" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="inviteLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center mb-2">
          <h4 class="mb-0">Invite members to Panoptesan</h4>
          <p class="mb-4 fz-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the</p>
          <div class="form-group text-left">
            <label for="">Email</label>
            <input type="email" class="form-control">
          </div>
          <a href="#" class="btn btn-primary w-100">Send</a>
        </div>

      </div>

    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade video-modal" id="video" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="videoLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <video id="my-video" class="video-js" controls preload="auto" width="640" height="264" poster="<?php echo $basesurl; ?>images/maskgroup39.png" data-setup="{}">
          <source src="<?php echo $basesurl; ?>video/pexels-taryn-elliott-5309381.mp4" type="video/mp4" />
          <source src="MY_VIDEO.webm" type="video/webm" />
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p>
        </video>
        <div class="cta">
          <div class="action">
            <button class="btn btn-danger mr-2 delete-modal">Delete</button>
            <a href="#" class="btn btn-success">Edit Video</a>
          </div>
          <div class="action">
            <a href="#" class="btn btn-white">Verify Details</a>
            <a href="#" class="btn btn-primary ml-2">Fetch Car Details</a>
          </div>
        </div>
      </div>
  
    </div>
  </div>
</div>

<script src="<?php echo $basesurl; ?>js/mlib.js"></script>
<script src="<?php echo $basesurl; ?>js/functions.js"></script>