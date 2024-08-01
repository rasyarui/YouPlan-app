<style>
    .pagination{
        position: relative;
        margin-top: -30px;
        display: flex;
        justify-content: center;
    }

    .pagination button{
    background-color: #7771FF;
    font-size: 15px;
    color: white;
    padding: 0 30px;
    margin: 0 20px;
    width: 150px;
    cursor: pointer;
    border-radius: 15px;
    border: none;
    height: 31px;
    
    }

    @media screen and (max-width: 645px){
        .pagination button{
            font-size: 10px

        }
    }
</style>



<div class="pagination">
    <button wire:click="previousPage"> previous</button>
<button wire:click="nextPage">next </button>
</div>
