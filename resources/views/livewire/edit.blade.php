<div>

  <style>
    .modal{
      width: 100vw;
    background-color: rgba(119, 113, 255, 20%);
    }

      .modal-header{
        border-bottom: none;
      }

      .modal-footer{
      border-top: none;

      }
    
    .modal-content{
      margin-top: 250px;
    }


    .modal input:focus{
    outline: none;
    box-shadow: 1px 1px 5px  #7771FF;
}
    .modal input{
      font-weight: 500;
      width: 90%;
      border-radius: 15px;
      margin: auto;
      outline: none;
      padding: 10px 10px;
      border: 1px solid rgba(119, 113, 255, 80%);
      font-family: "Quicksand", sans-serif;
      font-size: 18px;
      color: white;
      hight: 40px;
      color: black;
    }

  

.modal .modal-footer button{
   margin-top: 10px;
   background-color: transparent;
   text-decoration: none;
   background-color: transparent;
   font-weight: 500;   
   width: fit-content;
   border: none;
   font-size: 14px;

}

    .modal  .modal-footer .edit{
      background-color: #7771FF  ;
    padding: 10px 15px;
    width: 70px;
    font-size: 15px;
    margin-left: 10px;
    color: white;
    border-radius: 10px;
    }
  </style>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Edit Plan.</h1>
            </div>
            <input type="text" name="activity" id="activity" wire:model="activityedit">
            <div class="modal-footer">
              <button type="button" class="close" data-bs-dismiss="modal">Close</button>
              <button type="button" class="edit"  data-bs-dismiss="modal" wire:click="update()">Edit</button>
            </div>
          </div>
        </div>
      </div>
</div>
