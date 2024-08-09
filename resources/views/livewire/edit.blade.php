<div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore>
        <form wire:submit.prevent="update()">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">Edit Plan.</h1>
                    </div>
                    <input type="text" name="activityedit" class="@error('activityedit') is-invalid @enderror"
                        id="activityedit" wire:model.defer="activityedit" required>
                    @error('activityedit')
                        <span class="error passwordLock">{{ $message }}</span>
                    @enderror
                    <div class="modal-footer">
                        <button type="button" class="close" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="edit">Edit</button>
                    </div>
                </div>
            </div>
    </div>
    </form>
</div>
