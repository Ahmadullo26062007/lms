<td>
    @if($message->suply_text)
    {{substr($message->suply_text  ,0,20)}}...
    @else
        <button class="btn btn-danger border " type="button" data-bs-toggle="modal"
                data-bs-target="#message{{$message->id}}">
            Write an answer
        </button>
    @endif
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
                            <textarea wire:model="suply_text" class="form-control text-white" name="suply_text" id=""
                                      cols="30" rows="5"></textarea>
                            <br>
                        </div>

                        <button type="button" style="background-color: #03a84e;color: white" wire:click="send" data-bs-dismiss="modal" aria-label="Close" class="btn">Send
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</td>
