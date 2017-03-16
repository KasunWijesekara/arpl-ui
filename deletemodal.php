 <div class="ui green button" id="deleteProduct">Add Product</div>

            <!-- Delete product modal  -->
            <div class="ui small basic test modal" id="modaldivdelete">
                <div class="ui icon header">
                    <i class="trash icon"></i>
                    Delete Product
                </div>
                <div class="content">
                    <p>You're about to delete a product from the database, Would you like us to delete this from the database?</p>
                </div>
                <div class="actions">
                    <div class="ui red basic cancel inverted button">
                        <i class="remove icon"></i>
                        No
                    </div>
                    <div class="ui green ok inverted button">
                        <i class="checkmark icon"></i>
                        Yes
                    </div>
                </div>
            </div>



            $(document).ready(function(){
     $('#deleteProduct').click(function(){
        $('#modaldivdelete').modal('show');    
     });
});