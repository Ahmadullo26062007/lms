<div class="modal fade" id="message{{$message->id}}" tabindex="-1"
     aria-labelledby="message{{$message->id}}" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header bg-white">
                <h5 class="modal-title text-danger" id="job-worker">Send Message</h5>
                <button type="button" class="btn-close text-white"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <p class="text-dark">
                        {{$message->text}}
                    </p>
                    <div>
                        <textarea wire:model="suply_text"  class="form-control text-white" name="suply_text" id="" cols="30" rows="5">{{$message->suply_text}}</textarea>
                        <br>
                    </div>

                    <button type="button" style="background-color: #03a84e;color: white"
                            wire:click="message" data-bs-dismiss="modal" aria-label="Close" class="btn">Send
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
