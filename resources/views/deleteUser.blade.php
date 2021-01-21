<!--Modal massage delete-->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h5>Remove Item?</h5>
                <p>Are you sure you want to remove this select item?</p>
                <form action="" method="POST" id="formRemoveUser">
                    {{ csrf_field() }} 
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger mt-3" data-dismiss="modal">CANCEL</button>
                    <button onclick="document.getElementById('formRemoveUser').submit()" class="btn btn-primary float-right mt-3">REMOVE</button>
                </form>
            </div>
        </div>
    </div>
</div>
