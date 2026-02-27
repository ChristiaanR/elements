<link rel="stylesheet" href="/css/modal.css">

<button command="show-modal" commandfor="my-dialog">Open dialog</button>

<dialog id="my-dialog">

  <div class="dialog-header">
    <h2>Dialog Header</h2>
    <button class="top-close" commandfor="my-dialog" command="close"><i
        class="fa-solid fa-xmark"></i><span class="visually-hidden">Close
      </span></button>
  </div>
  <div class="dialog-body">
    <p>This dialog was opened using an invoker command.</p>
  </div>
  <button commandfor="my-dialog" command="close">Close</button>
</dialog>