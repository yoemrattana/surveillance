<style>
    /* HTML: <div class="loader"></div> */
    .loader {
        width: 50px;
        padding: 8px;
        aspect-ratio: 1;
        border-radius: 50%;
        background: #696cff;
        --_m: 
            conic-gradient(#0000 10%,#000),
            linear-gradient(#000 0 0) content-box;
        -webkit-mask: var(--_m);
                mask: var(--_m);
        -webkit-mask-composite: source-out;
                mask-composite: subtract;
        animation: l3 1s infinite linear;
        margin: 0 auto;
    }
    @keyframes l3 {to{transform: rotate(1turn)}}
</style>
{{-- <div class="modal" id="loader" >
    
</div> --}}

<div class="modal" id="loader">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="background: none !important; box-shadow: none !important">
            <div class="loader"></div>
          </div>
    </div>
  </div>